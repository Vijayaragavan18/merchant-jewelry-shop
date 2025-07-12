<?php

namespace App\Http\Controllers;

use App;
use App\Mail\contactUs;
use App\Mail\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use App\models\wishlist;
use App\models\UserAddress;
use App\models\blog;
use App\models\packageUser;
use App\Models\userOrder;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Surfsidemedia\Shoppingcart\Facades\Cart;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\DB;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */















    public function packagePlanStore($planId, $package)
    {
        packageUser::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'plan_id' => $planId,
                'package' => $package,
            ]
        );

        return redirect('dashboard')->with('success', 'Plan selected successfully!');
    }






    public function sendMail()
    {


        Mail::to('vr81666@gmail.com')->send(new contactUs());
        return 'email has been send';
    }




    public function sendEnquiry(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'messageContent' => 'required|min:5',
        ]);

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new Enquiry(($data)));
        return redirect()->back()->with('success', 'Your Query Successfully Sended !');
    }






    public function showBlog()
    {
        $packageUser = packageUser::where('user_id', auth()->id())->first();

        if ($packageUser && ($packageUser->plan_id == 2 || $packageUser->plan_id == 3)) {
            $showBlog = \App\Models\Blog::where('user_id', auth()->id())
                ->orderBy('updated_at', 'desc')
                ->paginate(3);
        } else {
            $showBlog = \App\Models\Blog::orderBy('updated_at', 'desc')->paginate(3);
        }

        return view('blogPageX', [
            'showBlog' => $showBlog,
            'packageUser' => $packageUser,
        ]);
    }







    public function checkList()
    {
        $cartContent = UserOrder::where('user_id', auth()->id())->get();

        $addresses = UserAddress::where('user_id', auth()->id())->latest()->first();

        return view('addWishlist', [
            'cartContent' => $cartContent,
            'addresses' => $addresses,
        ]);
    }


    public function downloadPdf()
    {
        $addresses = UserAddress::where('user_id', auth()->id())->latest()->first();
        $cartContent = userOrder::where('user_id', auth()->id())->get();

        $subtotal = $cartContent->sum(function ($item) {
            return floatval(preg_replace('/[^\d.]/', '', $item->finalPrice));
        });
        $coupon = session('coupon');
        $discounts = $coupon && isset($coupon['discount_percent']) ? ($coupon['discount_percent'] / 100) * $subtotal : 0;

        $disCheck = $subtotal - $discounts;
        $tax = $disCheck * 0.18;
        $shipping = 99;
        $finalDiscount = $disCheck + $tax + $shipping;

        $pdf = Pdf::loadView('pdf.invoice', compact('addresses', 'cartContent', 'finalDiscount'));
        return $pdf->download('invoice.pdf');
    }


















    public function allJewelry(Request $request)
    {
        $packageUser = packageUser::where('user_id', auth()->id())->first();


        if ($packageUser && in_array($packageUser->plan_id, [1, 2, 3])) {

            $query = wishlist::where('user_id', auth()->id());
        } else {

            $query = wishlist::query();
        }


        if ($request->has('gender') && is_array($request->gender)) {
            $query->whereIn('Gender', $request->gender);
        }


        if ($request->has('material') && is_array($request->material)) {
            $query->whereIn('Material', $request->material);
        }


        if ($request->has('category') && is_array($request->category)) {
            $query->whereIn('TypeOfJewel', $request->category);
        }


        if ($request->filled('price')) {
            $query->where(function ($q) use ($request) {
                foreach ($request->price as $range) {
                    [$minRupee, $maxRupee] = explode('-', $range);
                    $minGram = (int)$minRupee;
                    $maxGram = (int)$maxRupee;
                    if ($maxRupee == '100000') {
                        $maxGram = PHP_INT_MAX;
                    }
                    $q->orWhereBetween('Price', [$minGram, $maxGram]);
                }
            });
        }





        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('Wish_name', 'LIKE', "%{$search}%")
                    ->orWhere('Description', 'LIKE', "%{$search}%")
                    ->orWhere('Gender', 'LIKE', "%{$search}%")
                    ->orWhere('TypeOfJewel', 'LIKE', "%{$search}%");
            });
        }


        $showWishList = $query->orderBy('updated_at', 'desc')->paginate(9);

        return view('allJewelry_page', [
            'showWishList' => $showWishList,
            'packageUser' => $packageUser,
        ]);
    }








    public function wishListPage()
    {
        return view('addCart');
    }

    public function aboutFunction()
    {
        return view('about');
    }


    public function addToCart(Request $request)
    {
        $product = wishList::find($request->id);

        if (!$product) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found'
            ]);
        }

        $productAlready = false;

        foreach (Cart::content() as $item) {
            if ($item->id == $product->id) {
                $productAlready = true;
                break;
            }
        }

        if ($productAlready) {
            return response()->json([
                'status' => false,
                'message' => $product->Wish_name . ' already in cart'
            ]);
        }


        Cart::add(
            $product->id,
            $product->Wish_name,
            1,
            $product->Price,
            [
                "product_image" => $product->image,
                "description" => $product->Description,
                "gender" => $product->Gender,
                "material" => $product->Material,
                "type_of_jewel" => $product->TypeOfJewel,
                "wishlist_user_id" => $product->user_id
            ]
        );






        return response()->json([
            'status' => true,
            'message' => $product->Wish_name . ' added to cart'
        ]);
    }



    public function addWishlist(Request $request)
    {

        $product2 = wishlist::find($request->id);

        if ($product2 == null) {

            return response()->json([
                'status' =>  false,
                'message' => 'product not added'
            ]);
        }

        if (Cart::count() > 0) {

            $cartContent2 = Cart::content();
            $productAlready = false;
            foreach ($cartContent2 as $item) {

                if ($item->id == $product2->id) {
                    $productAlready = true;
                }

                if ($productAlready == false) {

                    Cart::add($product2->id, $product2->Wish_name, 1, $product2->Quantity, ["product_image" => $product2->image]);
                    $status = true;
                    $message = $product2->Wish_name . 'product added in wishList';
                } else {
                    $status = false;
                    $message = $product2->Wish_name . 'already added in wishList';
                }
            }
        } else {




            Cart::add($product2->id, $product2->Wish_name, 1, $product2->Quantity, ["product_image" => $product2->image]);


            $status = true;
            $message = $product2->Wish_name . 'product added in wishList';
        }

        return response()->json([
            'status' =>  $status,
            'message' =>  $message
        ]);
    }






    public function applyCoupon(Request $request)
    {
        $code = $request->input('coupon_code');


        if ($code === 'ALUA10') {

            session([
                'coupon' => [
                    'name' => $code,
                    'discount_percent' => 10
                ]
            ]);


            return redirect()->back()->with('success', 'Coupon applied successfully!');
        } else {

            return redirect()->back()->with('error', 'Invalid coupon code');
        }
    }






    public function Cart()
    {
        $cartContent = Cart::content();
        $address = UserAddress::where('user_id', auth()->id())->latest()->first();

        return view('cardPage', [
            'cartContent' => $cartContent,
            'showModal' => !$address,
        ]);
    }




    public function updateCart(Request $request)
    {

        $rowId = $request->rowId;
        $qty = $request->qty;
        Cart::update($rowId, $qty);
        $message = 'Cart updated successFully';
        session()->flash('success', $message);
        return response()->json([
            'status' => true,
            'message' => $message
        ]);
    }
    public function delateCart(request $request)
    {
        $itemInfo = Cart::get($request->rowId);
        if ($itemInfo == null) {

            $errorMessage = "Item not in the cart";
            return response()->json([
                'status' => false,
                'message' => $errorMessage
            ]);
        }

        Cart::remove($request->rowId);
        $successMessage = "Cart removed";
        return response()->json([
            'status' => true,
            'message' => $successMessage
        ]);
    }

    public function delateCart2(request $request)
    {
        $itemInfo = Cart::get($request->rowId);
        if ($itemInfo == null) {

            $errorMessage = "Item not in the Wishlist";
            return response()->json([
                'status' => false,
                'message' => $errorMessage
            ]);
        }

        Cart::remove($request->rowId);
        $successMessage = "Wish removed";
        return response()->json([
            'status' => true,
            'message' => $successMessage
        ]);
    }





    function Blog_Page()
    {
        return view('blogPage');
    }
    function Wishlist_Page()
    {
        return view('wishlistPage');
    }
    function Card_Page()
    {
        return view('cardPage');
    }


    function go()
    {
        return redirect()->back();
    }

    function productList()
    {
        return view('productDetail');
    }




    function Show_Blog(\App\models\blog $showBlogs)

    {

        $packageUser = packageUser::where('user_id', auth()->id())->first();


        return view('showBlog', [
            'showBlogs' => $showBlogs,
            'packageUser' => $packageUser
        ]);
    }
    function User_Register()
    {
        return view('register');
    }


    public function index()
    {
        return view('createBlog');
    }




    // public function addWishList($id, $Wish_name, $Price)
    // {

    //     Cart::instance("wishlist")->add($id, $Wish_name, 1, $Price)->associate('App\Models\wishlist');



    //     // Cart::instance('wishlist')->add($request->id, $request->Wish_name, $request->Quantity, 1, $request->Price)->associate('App\models\wishList');

    // }



    public function create(App\models\blog $create)
    {


        return view('editPage', compact('create'));
    }

    public function store(Request $request)
    {


        $request->validate([

            'blogImage' => 'required|mimes:jpeg,jpg,png,gif'

        ]);

        $imageName = time() . "vijay ." . $request->blogImage->extension();
        $request->blogImage->move(public_path('uploads'), $imageName);

        $blog = new App\models\blog;
        $blog->user_id = auth()->id();
        $blog->image = $imageName;
        $blog->name = request('blogName');
        $blog->description = request('blogDes');
        $blog->save();
        return redirect('blog');
    }



    // public function showWish()
    // {
    //     $showWishList = wishList::paginate(9);
    //     return view('allJewelry_page', compact(var_name: 'showWishList'));
    // }
    // public function showBlogPAgination()
    // {
    //     $showBlog = blog::paginate(9);
    //     return view('blogPageX', compact(var_name: 'showBlog'));
    // }




    //? WishList Set


    // public function wishStore(Request $request)
    // {

    //     $request->validate(rules: [

    //         'addWishImg' => 'required|mimes:jpeg,jpg,png,gif'

    //     ]);

    //     $imageName = time() . "wish." . $request->addWishImg->extension();
    //     $request->addWishImg->move(public_path('/images/wishImg'), $imageName);

    //     $wishList = new App\Models\wishlist;
    //     $wishList->Wish_name = request('wishName');
    //     $wishList->Price = request('wishPrice');
    //     $wishList->Description = request('wishDes');
    //     $wishList->Quantity = request('wishQuant');
    //     $wishList->image = $imageName;
    //     $wishList->save();
    //     return redirect('allJewelry');
    // }


    // public function addAddress(Request $request)
    // {
    //     // Check what is submitted

    //     $request->validate([
    //         'addName' => 'required|string|max:255',
    //         'addEmail' => 'required|string|max:255',
    //         'addNumber' => 'required|string|regex:/^[0-9]+$/|min:10|max:15',
    //         'addAddress' => 'required|string|max:255',
    //         'addPinCode' => 'required|string|max:255',
    //         'addPays' => 'required|string|max:255',
    //     ]);

    //     if (!auth()->check()) {
    //         return redirect()->back()->with('error', 'You must be logged in.');
    //     }

    //     $address = new UserAddress();
    //     $address->user_id = auth()->id();
    //     $address->name = $request->addName;
    //     $address->email = $request->addEmail;
    //     $address->phone_number = $request->addNumber;
    //     $address->address = $request->addAddress;
    //     $address->pincode = $request->addPinCode;
    //     $address->payment_type = $request->addPays;
    //     $address->save();

    //     return redirect()->back()->with('success', 'Details Added');
    // }


    public function addAddress(Request $request)
    {
        $request->validate([
            'addName' => 'required|string|max:255',
            'addEmail' => 'required|string|max:255',
            'addNumber' => 'required|string|regex:/^[0-9]+$/|min:10|max:15',
            'addAddress' => 'required|string|max:255',
            'addPinCode' => 'required|string|max:255',
            'addPays' => 'required|string|max:255',
        ]);

        if (!auth()->check()) {
            return redirect()->back()->with('error', 'You must be logged in.');
        }


        foreach (Cart::content() as $item) {



            $address = new \App\Models\UserAddress;
            $address->user_id = auth()->id();
            $address->wishlist_id = $item->options['wishlist_user_id'] ?? auth()->id();

            $address->name = $request->addName;
            $address->email = $request->addEmail;
            $address->phone_number = $request->addNumber;
            $address->address = $request->addAddress;
            $address->pincode = $request->addPinCode;
            $address->payment_type = $request->addPays;
            $address->save();
        }









        return redirect()->back()->with('success', 'Address saved successfully.');
    }






    public function dashEdit(Request $request)
    {


        $request->validate([
            'addName' => 'required|string|max:255',
            'addEmail' => 'required|string|max:255',
            'addNumber' => 'required|string|regex:/^[0-9]+$/|min:10|max:15',
            'addAddress' => 'required|string|max:255',
            'addPinCode' => 'required|string|max:255',
            'addPays' => 'required|string|max:255',
        ]);

        if (!auth()->check()) {
            return redirect()->back()->with('error', 'You must be logged in.');
        }

        $wishlist_id = null;


        foreach (Cart::content() as $item) {
            if (!empty($item->options->wishlist_user_id)) {
                $wishlist_id = $item->options->wishlist_user_id;
                break;
            }
        }


        $wishlist_id = $wishlist_id ?? auth()->id();


        if (!DB::table('wishlists')->where('user_id', $wishlist_id)->exists()) {
            $wishlist_id = null;
        }


        \App\Models\UserAddress::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'wishlist_id' => $wishlist_id,
                'name' => $request->addName,
                'email' => $request->addEmail,
                'phone_number' => $request->addNumber,
                'address' => $request->addAddress,
                'pincode' => $request->addPinCode,
                'payment_type' => $request->addPays,
            ]
        );

        return redirect()->route('views.dashEdit')->with('success', 'Details Added');;
    }






    public function wishStore(Request $request)
    {

        $request->validate([
            'wishName' => 'required|string|max:255',
            'wishPrice' => 'required|string|max:255',
            'wishDes' => 'required|string',

            'Gender' => 'required|string',
            'Material' => 'required|string',
            'TypeOfJewel' => 'required|string',
            'addWishImg' => 'required|mimes:jpeg,jpg,png,gif|max:7168',

        ]);


        $imageName = time() . "_wish." . $request->file('addWishImg')->extension();
        $request->file('addWishImg')->move(public_path('images/wishImg'), $imageName);

        $priceCal = round($request->input(key: 'wishPrice') * 9928);



        $wishList = new App\models\wishlist;
        $wishList->user_id = auth()->id();
        $wishList->Wish_name = $request->input('wishName');
        $wishList->Price = $priceCal;
        $wishList->Description = $request->input('wishDes');

        $wishList->Gender = $request->input('Gender');
        $wishList->Material = $request->input('Material');
        $wishList->TypeOfJewel = $request->input('TypeOfJewel');
        $wishList->image = $imageName;
        $wishList->save();

        return redirect('allJewelry')->with('success', 'Jewelry added successfully!');
    }


    public function reCheck()
    {
        $cartContent = Cart::content();
        $address = UserAddress::where('user_id', auth()->id())->latest()->first();

        return view("addWishlist", [
            'cartContent' => $cartContent,
            'addresses' => $address

        ]);
    }







    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    // public function addWishlist(Request $request){


    //     Cart::instance('wishList')->add($request->id,$request->wishName,$request->quantity,$request->price)->associate('App/')
    // }







    /**
     * Update the specified resource in storage.
     */
    // public function update(App\models\blog $showBlogs)
    // {
    //     //
    //     $showBlogs->update(request(['name', 'description', 'blogImage']));
    //     $showBlogs->save();
    //     return view('blogPageX', compact('showBlogs'));
    // }

    public function update(Request $request, \App\Models\blog $showBlogs)
    {

        $request->validate([
            'blogName' => 'required|string|max:255',
            'blogDes' => 'required|string|min:40',
            'blogImage' => 'nullable|mimes:jpeg,jpg,png,gif|max:2048',
        ]);


        $data = [
            'name' => $request->input('blogName'),
            'description' => $request->input('blogDes'),
        ];


        if ($request->hasFile('blogImage')) {
            $imageName = time() . "vijay." . $request->blogImage->extension();
            $request->blogImage->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
        }


        $showBlogs->update($data);


        return redirect()->route('blog.show');
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\blog $blog)
    {

        $imagePath = public_path('uploads/' . $blog->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $blog->delete();

        return redirect()->route('blog.show')->with('success', 'Blog deleted successfully!');
    }
}
