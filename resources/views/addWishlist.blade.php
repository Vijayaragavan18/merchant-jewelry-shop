@extends('/layouts/master')

@section('center')






<div class="cartSection">
    <div class="headLineText">
        <h4>My <span style="background-color: #47022C; color: #E19133; padding: 5px; ">Order</span> </h4>
    </div>




    <div id="invoiceContents" class="cartSectionTwo">
        <div class="topDetailsCheck">

            <h1>INVOICE</h1>
        </div>


        <div class="checkTwo">
            <div class="backCheck">
                <div class="logoImageCheck">
                    <img src="/images/logo.png" alt="logo">
                </div>
            </div>
            <div class="addressDetail">
                <h3>ALUA Jewels </h3>
                <p> 16/w, CSI Church
                    Street , Coimbatore </p>
                <a href="tel:8270241319">8270241319</a>
            </div>
        </div>
        <div class="checkLine"></div>
        <div class="checkAddressSection">
            <div class="AddressCheckHead">

                <h1>Customer Details</h1>
            </div>

            <div class="checkDetatilsAddress">
                @if ($addresses)


                <div class="checkCol1">
                    <div class="AddressField">
                        <h1>Vijay</h1>
                        <h6>{{ $addresses->name }}</h6>
                    </div>
                    <div class="AddressField">
                        <h1>Email</h1>
                        <h6>{{ $addresses->email }}</h6>
                    </div>
                    <div class="AddressField">
                        <h1>Number</h1>
                        <h6>{{ $addresses->phone_number }}</h6>
                    </div>
                </div>

                <div class="checkCol2">
                    <div class="AddressField">
                        <h1>Address</h1>
                        <h6>{{ $addresses->address }}</h6>
                    </div>
                    <div class="AddressField">
                        <h1>pin code</h1>
                        <h6>{{ $addresses->pincode }}</h6>
                    </div>
                    <div class="AddressField">
                        <h1>Payment Type</h1>
                        <h6>{{ $addresses->payment_type}}</h6>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="checkLine"></div>
        <div class="AddressCheckHead">

            <h1>Customer Details</h1>
        </div>

        <div class="checkCart">


            @foreach ($cartContent as $whishList )



            <div class="checkCartTwo">
                <div class="cartImageDetails">
                    <div class="cartImage"><img src="/images/wishImg/{{ $whishList->image}}" alt="one"></div>
                    <div class="cartHeadings">
                        <div style="font-size: 22px; color:#5f1107cc; margin-bottom:5px">{{ $whishList->orderUser }}</div>
                        <div style="font-size:16px;color: #5f11076c;">Original Price:{{ $whishList->OrderPrice }} </div>
                    </div>
                </div>
                <div class="divTwo">
                    <div class="cartQuantityDet">




                        <p class="cartQuantityNum">Qty:{{ $whishList->orderQty  }}</p>













                        <div style="font-size:24px;">{{ $whishList->orderQty* $whishList->OrderPrice }}</div>
                    </div>


                </div>
            </div>
            @endforeach





        </div>


        @php
        // Initialize subtotal
        $subtotal = 0;

        // Safely sum up finalPrice values
        foreach ($cartContent as $item) {
        $price = floatval(str_replace(',', '', $item->finalPrice ?? 0));
        $subtotal += $price;
        }

        // Get coupon session
        $coupon = session('coupon');

        // Initialize values
        $discounts = 0;
        $tax = 0;
        $shipping = 99;

        // Apply discount if coupon exists
        if ($coupon && isset($coupon['discount_percent'])) {
        $discounts = ($coupon['discount_percent'] / 100) * $subtotal;
        }

        // Subtotal after discount
        $disCheck = $subtotal - $discounts;

        // Apply tax (18%) and shipping
        $tax = $disCheck * 0.18;
        $finalDiscount = $disCheck + $tax + $shipping;
        @endphp

        <div class="bottomEntry">
            <div class="finalEntry">
                <div>Total:</div>
                <div>{{ number_format($finalDiscount, 2) }}</div>
            </div>
        </div>


        <style>
            .AddressCheckHead h1 {
                text-align: start;
            }


            .AddressField h1 {
                font-size: 18px;
                color: #47022C;
            }

            .AddressField h6 {
                font-size: 14px;
                color: #0d0d0dcf;
            }

            .navBar {
                padding: 15px 0px 15px 0px;
                background-color: #47022C;
                position: static !important;
            }

            .footerContents {

                background-color: #47022C !important;


            }


            .AddressField {

                display: flex;
                flex-direction: column;
                align-items: self-start;
            }

            .addressField {
                display: flex;
                flex-direction: column;
                align-items: self-start;
            }

            .checkCol1,
            .checkCol2 {
                display: flex;
                flex-direction: column;
                align-items: self-start;
                gap: 12px;
            }

            .checkAddressSection {
                width: 100%;
                display: grid;
                gap: 15px;
            }

            .checkDetatilsAddress {
                display: flex;
                align-items: self-start;
                width: 100%;
            }

            .checkLine {
                width: 100%;
                border: 1px solid black;
            }


            .backCheck {
                background-color: #47022c;
                padding: 10px;
                border-radius: 5px;
            }

            .logoImageCheck {
                width: 90px;
            }
        </style>


    </div>
    <div class="downLoadCheck">
        <h1 style="color: green;">Your order has been placed successfully and will arrive soon. Thank you for shopping with us!</h1>
        <div class="downBtn">
            <a href="{{ route('dashboard.showAddress') }}">
                <button class="dashPage">Go to Dashboard</button>
            </a>

            <a href="{{ route('download-invoice') }}">
                <button class="downloadBtn">Download Invoice </button>
            </a>
        </div>

    </div>









</div>
</div>




@endsection