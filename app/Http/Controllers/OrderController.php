<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderPlacedMail;
use Illuminate\Support\Facades\Mail;
use Surfsidemedia\Shoppingcart\Facades\Cart;

use App\models\userOrder;

class OrderController extends Controller
{
    // Fix case if needed (Models not models)

    public function placeOrder(Request $request)
    {


        $subtotal = floatval(str_replace(',', '', Cart::subTotal()));
        $coupon = session('coupon');

        // Initialize discount, tax, and shipping
        $discounts = 0;
        $tax = 0;
        $shipping = 99;

        // Apply discount if coupon exists
        if ($coupon && isset($coupon['discount_percent'])) {
            $discounts = ($coupon['discount_percent'] / 100) * $subtotal;
        }

        // Calculate total after discount
        $disCheck = $subtotal - $discounts;

        // Apply tax and shipping
        $tax = $disCheck * 0.18;
        $finalDiscount = $disCheck + $tax + $shipping;





        $orderData = [
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'items' => [],
            'total' => number_format($finalDiscount, 2),
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

            $order->orderUser = $item->name;

            $order->orderQty = $item->qty;

            $order->OrderPrice = $item->price;
            $order->Description = $item->options['description'] ?? 'no description';
            $order->Gender = $item->options['gender'] ?? '';
            $order->Material = $item->options['material'] ?? '';
            $order->TypeOfJewel = $item->options['type_of_jewel'] ?? '';
            $order->image = $item->options['product_image'] ?? null;
            $order->finalPrice = number_format($finalDiscount, 2);

            $order->save();
        }




        Mail::to($orderData['email'])->send(new OrderPlacedMail($orderData));

        // Clear cart after placing order
        Cart::destroy();

        return redirect('/check')->with('message', 'Order placed and email sent!');
    }
}
