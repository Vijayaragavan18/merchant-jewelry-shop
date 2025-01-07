<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\wishList;
use Surfsidemedia\Shoppingcart\Facades\Cart;

// use illuminate\Support\Facades\Cart;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function addToCart(Request $request)
    {

        $product = wishList::find($request->id);

        if ($product == null) {


            return response()->json([
                'status' => false,
                'message' => 'product not added'
            ]);
        }






        if (Cart::count() > 0) {
            //echo "Cart already in cart";
            $cartContent = Cart::content();
            $productAlready = false;
            foreach ($cartContent as $item) {

                if ($item->id == $product->id) {
                    $productAlready = true;
                }

                if ($productAlready == false) {

                    Cart::add($product->id, $product->Wish_name, 1, $product->Quantity, ["product_image" => $product->image]);
                    $status = true;
                    $message = $product->Wish_name . 'product added in cart';
                } else {
                    $status = false;
                    $message = $product->Wish_name . 'already added in cart';
                }
            }
        } else {

            // echo "cart is empty now adding a product";


            Cart::add($product->id, $product->Wish_name, 1, $product->Quantity, ["product_image" => $product->image]);


            $status = true;
            $message = $product->Wish_name . 'product added in cart';
        }

        return response()->json([
            'status' =>  $status,
            'message' =>  $message
        ]);

        // Cart::add('293ad', 'Product 1', 1, 9.99);
    }



    public function addWishlist(Request $request)
    {

        $product2 = wishList::find($request->id);

        if ($product2 == null) {

            return response()->json([
                'status' =>  false,
                'message' => 'product not added'
            ]);
        }

        if (Cart::count() > 0) {
            //echo "Cart already in cart";
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

            // echo "cart is empty now adding a product";


            Cart::add($product2->id, $product2->Wish_name, 1, $product2->Quantity, ["product_image" => $product2->image]);


            $status = true;
            $message = $product2->Wish_name . 'product added in wishList';
        }

        return response()->json([
            'status' =>  $status,
            'message' =>  $message
        ]);

        // Cart::add('293ad', 'Product 1', 1, 9.99);
    }



    public function Wish()
    {
        $cartContent1 = Cart::content();
        // dd($cartContent1);
        $data['cartContent1'] = $cartContent1;
        return view("addWishlist", $data);
    }






    public function Cart()
    {
        $cartContent = Cart::content();
        // dd($cartContent);
        $vj['cartContent'] = $cartContent;
        return view("cardPage", $vj);
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


    public function addMyWish(Request $request)
    {

        // mywish::instance('mywishes')->add($request->id, $request->Wish_name, $request->Quantity, 1, $request->Price)->associate('App\models\mywishes');
        // return redirect()->back();
        $showWishList = App\models\wishlist::all();
        return view("allJewelry_page", compact("showWishList"));
    }

    function Show_Blog(\App\models\blog $showBlogs)
    {
        return view('showBlog', compact('showBlogs'));
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


    /**
     * Show the form for creating a new resource.
     */
    public function create(App\models\blog $create)
    {


        return view('editPage', compact('create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([

            'blogImage' => 'required|mimes:jpeg,jpg,png,gif'

        ]);

        $imageName = time() . "vijay ." . $request->blogImage->extension();
        $request->blogImage->move(public_path('uploads'), $imageName);

        $blog = new App\models\blog;
        $blog->image = $imageName;
        $blog->name = request('blogName');
        $blog->description = request('blogDes');
        $blog->save();
        return redirect('blog');
    }

    function showBlog()
    {

        if (Auth::user()->email == "vr81666@gmail.com") {
            $showBlog = App\models\blog::all();
            return view('blogPage', compact('showBlog'));
        } else {
            $showBlog = App\models\blog::all();
            return view('blogPageX', compact('showBlog'));
        }
    }




    //? WishList Set


    public function wishStore(Request $request)
    {

        $request->validate(rules: [

            'addWishImg' => 'required|mimes:jpeg,jpg,png,gif'

        ]);

        $imageName = time() . "wish." . $request->addWishImg->extension();
        $request->addWishImg->move(public_path('/images/wishImg'), $imageName);

        $wishList = new App\Models\wishlist;
        $wishList->Wish_name = request('wishName');
        $wishList->Price = request('wishPrice');
        $wishList->Description = request('wishDes');
        $wishList->Quantity = request('wishQuant');
        $wishList->image = $imageName;
        $wishList->save();
        return redirect('allJewelry');
    }



    public function showWish()
    {
        $showWishList = wishList::paginate(9);
        return view('allJewelry_page', compact('showWishList'));
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
    public function update(App\models\blog $showBlogs)
    {
        //
        $showBlogs->update(request(['name', 'description']));
        $showBlogs->save();
        return view('blogPage', compact('$showBlogs'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
