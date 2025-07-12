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

            <h1>Here The All Orders Of Yours</h1>
        </div>

        <div class="checkCart">
            @php
            $subtotal = 0;

            @endphp

            @foreach ($cartContent as $whishList )
            @php
            $calPrice = $whishList->OrderPrice/9928;
            $subtotal += $whishList->OrderPrice*$whishList->orderQty;







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


            @endphp


            <div class="checkCartTwo">
                <div class="cartImageDetails">
                    <div class="cartImage"><img src="/images/wishImg/{{ $whishList->image}}" alt="one"></div>
                    <div class="cartHeadings">
                        <div class="nameInvoiceMb">{{ $whishList->orderUser }}</div>
                        <div class="nameInvoiceMb2">Original Price:{{ $whishList->OrderPrice }}/{{$calPrice}}g </div>
                    </div>
                </div>
                <div class="divTwo">
                    <div class="cartQuantityDet">




                        <p class="cartQuantityNum">Qty:{{ $whishList->orderQty  }}</p>













                        <div class="invoiceMb">{{ $whishList->OrderPrice * $whishList->orderQty}}</div>
                    </div>


                </div>
            </div>


            @endforeach


        </div>




        <div class="bottomEntry">
            <div class="finalEntry">
                <div>Total:</div>
                <div>{{ number_format($disCheck, 2)}}</div>
            </div>
        </div>


        <style>
            .nameInvoiceMb {
                font-size: 22px;
                color: #5f1107cc;
                margin-bottom: 5px
            }

            .nameInvoiceMb2 {
                font-size: 16px;
                color: #5f11076c;
            }

            .AddressCheckHead {

                width: 100%;
            }

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

            .invoiceMb {
                font-size: 24px;
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
                gap: 20px;
            }

            .checkLine {
                width: 100%;
                border: 1px solid black;
            }

            .cardsTwo_details .cardTwo p,
            h1 {
                font-size: 15px;
                text-align: center;
            }

            .headLineText h4 {
                font-size: 27px;
                font-weight: normal;
                color: #5F1107;
            }

            .backCheck {
                background-color: #47022c;
                padding: 10px;
                border-radius: 5px;
            }

            .logoImageCheck {
                width: 90px;
            }

            @media only screen and (max-width: 480px) {

                .navBarMobile {

                    padding-top: 7px;
                    padding-bottom: 5px;
                    background-color: #47022C !important;
                    position: static !important;

                }

                .cardsTwo_details .cardTwo p,
                .navBarMobile h1 {
                    font-size: 14px;
                    text-align: center;
                    color: white !important;
                }

                .menuBarIcon {
                    color: white;
                }

                .navIconRight {
                    font-size: 14px;
                    color: #FFF !important;
                }

                /* Nav */

                .cartImage {
                    width: 69px;
                    height: 78px;
                }

                .checkCartTwo {
                    width: auto;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    height: 20vh;
                }

                .cartQuantityDet {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    gap: 10px;
                    width: auto;
                }

                .invoiceMb {
                    font-size: 14px;
                }

                .cartSectionTwo {
                    display: flex;
                    align-items: end;
                    justify-content: center;
                    flex-direction: column;
                    gap: 20px;
                    width: 89%;
                    background-color: white;
                    padding: 10px;
                    box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.20);
                }

                .logoImageCheck {
                    width: 43px;
                }

                .AddressField h1 {
                    font-size: 16px;
                    color: #47022C;
                }

                .nameInvoiceMb {
                    font-size: 14px;
                    color: #5f1107cc;
                    margin-bottom: 5px;
                }

                .cartImageDetails {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 13px;
                }
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
