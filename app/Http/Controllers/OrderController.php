<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderPlacedMail;
use App\Mail\successMail;
use App\Mail\cancelMail;
use Illuminate\Support\Facades\Mail;
use Surfsidemedia\Shoppingcart\Facades\Cart;

use App\models\userOrder;
use App\models\User;

class OrderController extends Controller
{
    // Fix case if needed (Models not models)





    public function orderCancel(Request $request)
    {


        $request->validate([
            'order_id' => 'required|integer',
        ]);
        $myId = auth()->id();

        $updated = \App\Models\UserOrder::where('wishlist_id', $myId)
            ->where('user_id', $request->order_id)
            ->where('OrderRequest', 'Under Review')
            ->update([
                'OrderRequest' => 'Cancel Order'
            ]);

        $buyer = User::find($request->order_id);
        if ($buyer) {


            $orderDetails = [
                'name' => $buyer->name,
                'email' => $buyer->email,
                'message' => 'Your order has been Cancelled by the seller...',
            ];

            Mail::to($buyer->email)->send(new cancelMail($orderDetails));
        }





        return back()->with('message', "$updated order is Canceled");
    }
    public function orderAccept(Request $request)
    {
        $request->validate([
            'order_id' => 'required|integer',
        ]);
        $myId = auth()->id();

        $updated = \App\Models\UserOrder::where('wishlist_id', $myId)
            ->where('user_id', $request->order_id)
            ->where('OrderRequest', 'Under Review')
            ->update([
                'OrderRequest' => 'orderAccept'
            ]);


        $buyer = User::find($request->order_id);


        if ($buyer) {

            $orderDetails = [
                'name' => $buyer->name,
                'email' => $buyer->email,
                'message' => 'Your order has been accepted by the seller!',
            ];

            Mail::to($buyer->email)->send(new successMail($orderDetails));
        }


        return back()->with('message', "$updated order is success");
    }




    public function placeOrder(Request $request)
    {



        $cartContent = Cart::content();
        $subtotal = 0;
        foreach ($cartContent as $item) {

            $subtotal += $item->price * $item->qty;
        }










        $off = $subtotal * 0.10;
        $offMinus = $subtotal - $off;
        $gst = $offMinus * 0.18;
        $gstMinus = $offMinus + $gst;

        $coupon = session('coupon');
        $discounts = 0;

        if ($coupon && isset($coupon['discount_percent'])) {
            $discounts = ($coupon['discount_percent'] / 100) * $gstMinus;
        }

        $shipping = 99;
        $disCheck = ($gstMinus - $discounts) + $shipping;






        $orderData = [
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'items' => [],
            'total' => number_format($disCheck, 2),
        ];

        // foreach (Cart::content() as $item) {
        //     $order = new UserOrder;
        //     $order->user_id = auth()->id();
        //     $order->orderUser = $item->name;
        //     $order->OrderPrice = $item->price;
        //     $order->Description = "no description";
        //     $order->Gender = $item->qty;
        //     $order->Material = $item->qty * $item->price;
        //     $order->TypeOfJewel = "don't need material";
        //     $order->finalPrice = number_format($finalDiscount, 2);
        //     $order->image = $item->options['product_image'] ?? null;
        //     $order->save();
        // }

        foreach (Cart::content() as $item) {
            $order = new \App\Models\UserOrder;

            $order->user_id = auth()->id();

            $order->wishlist_id = $item->options['wishlist_user_id'] ?? auth()->id();

            $order->Client_name = auth()->user()->name;
            $order->OrderRequest = "Under Review";
            $order->orderUser = $item->name;

            $order->orderQty = $item->qty;

            $order->OrderPrice = $item->price;
            $order->Description = $item->options['description'] ?? 'no description';
            $order->Gender = $item->options['gender'] ?? '';
            $order->Material = $item->options['material'] ?? '';
            $order->TypeOfJewel = $item->options['type_of_jewel'] ?? '';
            $order->image = $item->options['product_image'] ?? null;
            $order->finalPrice = number_format($disCheck, 2);

            $order->save();
        }




        Mail::to($orderData['email'])->send(new OrderPlacedMail($orderData));


        Cart::destroy();

        return redirect('/check')->with('message', 'Order placed and email sent!');
    }
}
