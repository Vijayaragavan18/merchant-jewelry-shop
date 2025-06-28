<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if ($packageUser && in_array($packageUser->plan_id, [1, 2, 3]))
            <div>Hey {{ Auth::user()->name }}! This is your admin page....</div>
            @else
            <div>Hey {{ Auth::user()->name }}! have a Great day....</div>

            @endif



        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">





                    @if ($packageUser && in_array($packageUser->plan_id, [1, 2, 3]))
                    <h3>Orders received from users:</h3>

                    @php

                    $subtotal = 0;

                    @endphp
                    @foreach ($cartContent as $item)
                    @php




                    $subtotal += $item->OrderPrice*$item->orderQty;






                    $off = $subtotal * 0.10;
                    $offMinus = $subtotal - $off;
                    $gst = $offMinus * 0.18;
                    $gstMinus = $offMinus + $gst;

                    $coupon = session('coupon');
                    $discounts = 0;

                    if ($coupon && isset($coupon['discount_percent'])) {
                    $discounts = ($coupon['discount_percent'] / 100) * $subtotal;
                    }

                    $shipping = 99;
                    $disCheck = ($gstMinus - $discounts) + $shipping;

                    @endphp

                    @endforeach

                    @if ($cartContent->isEmpty())
                    <p>No orders yet.</p>
                    @else
                    @foreach ($cartContent as $item)
                    @php
                    $userAddress = $addresses[$item->user_id] ?? null;
                    $calPrice = $item->OrderPrice/9928;





                    @endphp
                    @endforeach


                    <table style=" width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px;">
                        <thead style="background-color: #f2f2f2;">
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">S.No</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Product</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Qty</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Price</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Subtotal</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Final Price (With Tax%)</th>
                            </tr>
                        </thead>
                        @foreach ($cartContent as $item)
                        <tbody>

                            <tr>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $loop->iteration }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $item->orderUser }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $item->orderQty }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">₹{{ $item->OrderPrice }}/{{ $calPrice }}g</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">
                                    ₹{{ $item->Material }}
                                </td>
                                <td style="border: 1px solid #ddd; padding: 10px;">
                                    ₹{{ $item->OrderPrice*$item->orderQty }}
                                </td>
                            </tr>

                        </tbody>
                        @endforeach

                        <tfoot>
                            <tr>
                                <td colspan="5" style="border: 1px solid #ddd; padding: 10px; text-align: right;"><strong>Total:</strong></td>
                                <td style="border: 1px solid #ddd; padding: 10px;">
                                    ₹{{ number_format($disCheck, 2) }}
                                </td>
                            </tr>
                        </tfoot>

                    </table>


                    @if ($userAddress)

                    <h4>Address for {{ $userAddress->name }}</h4>
                    <table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px; margin-bottom: 20px;">
                        <thead style="background-color: #f2f2f2;">
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 10px;">Name</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Email</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Phone</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Address</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Pin Code</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Payment Type</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->name }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->email }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->phone_number }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->address }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->pincode }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->payment_type }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                                    @php
                                    $address = $addresses->first();
                                    @endphp

                                    @if ($packageUser && in_array($packageUser->plan_id, [1, 2, 3]))

                                    <button style="padding: 6px 12px; background-color: rgb(145, 255, 0); color: white; text-decoration: none; border-radius: 4px;">
                                        Order Confirm
                                    </button>
                                    @else

                                    @if ($address)
                                    <button class="addAddress" style="padding: 6px 12px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">
                                        Edit
                                    </button>
                                    @endif
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @else
                    @foreach ($cartContent as $item)
                    <p><strong>No address found for user ID {{ $item->user_id }}</strong></p>
                    @endforeach
                    @endif


                    @endif
                    @endif





                    @if (!$packageUser || !in_array($packageUser->plan_id, [1, 2, 3]))
                    <h3>Your All Orders Here</h3>
                    @if ($cartContent->isEmpty())
                    <p>No orders yet.</p>
                    @else
                    @php

                    $subtotal = 0;

                    @endphp
                    @foreach ($cartContent as $item)
                    @php




                    $subtotal += $item->OrderPrice*$item->orderQty;






                    $off = $subtotal * 0.10;
                    $offMinus = $subtotal - $off;
                    $gst = $offMinus * 0.18;
                    $gstMinus = $offMinus + $gst;

                    $coupon = session('coupon');
                    $discounts = 0;

                    if ($coupon && isset($coupon['discount_percent'])) {
                    $discounts = ($coupon['discount_percent'] / 100) * $subtotal;
                    }

                    $shipping = 99;
                    $disCheck = ($gstMinus - $discounts) + $shipping;
                    @endphp

                    @endforeach





                    <table style=" width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px;">
                        <thead style="background-color: #f2f2f2;">
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">S.No</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Product</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Qty</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Price</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Subtotal</th>
                                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Final Price (With Tax%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartContent as $item)
                            @php
                            $calPrice = $item->OrderPrice/9928;
                            @endphp

                            <tr>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $loop->iteration }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $item->orderUser }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $item->orderQty }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">₹{{ $item->OrderPrice }}/{{ $calPrice }}g</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">
                                    ₹{{ $item->Material }}
                                </td>
                                <td style="border: 1px solid #ddd; padding: 10px;">
                                    ₹{{ $item->OrderPrice*$item->orderQty  }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" style="border: 1px solid #ddd; padding: 10px; text-align: right;"><strong>Total:</strong></td>
                                <td style="border: 1px solid #ddd; padding: 10px;">
                                    ₹{{ number_format($disCheck, 2) }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                    @if ($addresses->isNotEmpty())
                    @php $userAddress = $addresses->first(); @endphp

                    <table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px; margin-bottom: 20px;">
                        <thead style="background-color: #f2f2f2;">
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 10px;">Name</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Email</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Phone</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Address</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Pin Code</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Payment Type</th>
                                <th style="border: 1px solid #ddd; padding: 10px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->name }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->email }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->phone_number }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->address }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->pincode }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px;">{{ $userAddress->payment_type }}</td>
                                <td style="border: 1px solid #ddd; padding: 10px; text-align: center;">

                                    @php
                                    $address = $addresses->first();
                                    @endphp

                                    @if ($packageUser && in_array($packageUser->plan_id, [1, 2, 3]))

                                    <button style="padding: 6px 12px; background-color: rgb(145, 255, 0); color: white; text-decoration: none; border-radius: 4px;">
                                        Order Confirm
                                    </button>
                                    @else

                                    @if ($address)
                                    <button class="addAddress" style="padding: 6px 12px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">
                                        Edit
                                    </button>
                                    @endif
                                    @endif


                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @else
                    <p><strong>No address found.</strong></p>
                    @endif

                    @endif
                    @endif

                </div>








            </div>
        </div>
        <br>



        <div class="addTrigger">
            <div class="launcAdd">
                <div class="enterHead">
                    <h1>Enter Your Details here</h1>
                </div>
                <div class="enterDetails">
                    @if (!$packageUser || !in_array($packageUser->plan_id, [1, 2, 3]))
                    @php
                    $address = $addresses->first();
                    @endphp

                    @if ($address)
                    <form class="enterAddress" action="{{ route('views.dashEdit') }}" method="POST">
                        @csrf
                        <input type="text" name="addName" placeholder="Enter Your Name" value="{{ $address->name }}">
                        <input type="text" name="addEmail" placeholder="Enter Your Email" value="{{ $address->email }}">
                        <input type="text" name="addNumber" placeholder="Enter Your Number" value="{{ $address->phone_number }}">
                        <input type="text" name="addAddress" placeholder="Enter Your Address" value="{{ $address->address }}">
                        <input type="text" name="addPinCode" placeholder="Enter Your Pincode" value="{{ $address->pincode }}">

                        <select name="addPays" class="pays" required>
                            <option value="">Select The Pays</option>
                            <option value="COD" {{ $address->payment_type == 'COD' ? 'selected' : '' }}>COD</option>
                        </select>

                        <button class="sumBtn" type="submit">Continue</button>
                    </form>
                    @endif
                    @endif

                    <div class="imageAddress">
                        <img src="/images/logimg.jpg" alt="login Image">
                    </div>
                </div>

                <button class="closeadd">Close</button>
            </div>
        </div>



        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const addAdd = document.querySelector('.addAddress');
                const addTrigger = document.querySelector('.addTrigger');
                const closeAdd = document.querySelector('.closeadd');

                addAdd.addEventListener('click', () => {
                    console.log("its click");
                    addTrigger.classList.add('addActive');
                });

                closeAdd.addEventListener('click', () => {
                    addTrigger.classList.remove('addActive');
                });
            });
        </script>




        <br>





        @if($packageUser && in_array($packageUser->plan_id, [1, 2, 3]))

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 merchantBg text-gray-900">
                    <h3>Your subscription has been added</h3>
                    <div class="btnMerchant"><a href="/packages"><button type="button">Change plan</button></a></div>
                </div>
            </div>

        </div>
        @else



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 merchantBg text-gray-900">
                    <h3>Create your online store in minutes, because your jewellery deserves the spotlight.</h3>
                    <div class="btnMerchant"><a href="/packages"><button type="button">Start</button></a></div>
                </div>
            </div>

        </div>
        @endif
        <br>


    </div>




    <style>
        .merchatHead h1 {
            color: #5F1107;
            font-size: 40px;
        }



        .merchantBg .btnMerchant {
            margin-top: 20px;
        }

        .merchantBg .btnMerchant button {
            color: #075f0c;
            background-color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            font-size: 15px;
            font-weight: 600;

            border: none;
            width: 120px;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        }


        .merchantBg {
            background-color: #8a4a12;
        }

        .merchantBg h3 {
            color: white;
        }

        .productAddress {
            text-align: center;
            color: red;
        }

        .sumBtn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            font-size: 15px;
            font-weight: 600;
            color: #fff;
            background-color: #5F1107;
            border: none;
            width: 120px;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        }

        .pays {
            background-color: #5F1107;
            width: 305px;
            padding: 10px;
            color: #ffff;
            border: none;
            border-radius: 7px;
            outline: none;
            font-size: 16px;
        }

        .enterAddress {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .enterDetails {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            width: 100%;
        }



        .imageAddress {
            width: 325px;

        }

        .imageAddress img {
            border-radius: 10px;
            box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.18);
        }

        .enterHead {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .enterAddress input {

            background-color: #5F1107;
            width: 300px;
            padding: 10px;
            color: #ffff;
            border: none;
            border-radius: 7px;
            outline: none;
            font-size: 18px;

            font-weight: 200;
        }



        .launcAdd {
            gap: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: end;
            justify-content: center;
            transform: scale(0.7);
            transition: transform 0.4s ease;
            background-color: aliceblue;
            border-radius: 5px;
            width: 70%;
        }

        .closeadd {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            font-size: 15px;
            font-weight: 600;
            color: #fff;
            background-color: #E7A46A;
            border: none;
            width: 120px;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        }

        .addTrigger.addActive {
            opacity: 1;
            visibility: visible;
        }

        .addTrigger.addActive .launcAdd {
            transform: scale(1);
        }

        .addTrigger {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            backdrop-filter: blur(5px);
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s ease;
            z-index: 100;
        }




        .finalTotal {
            display: flex;
            align-items: end;
            justify-content: end;
        }


        .cartImage {
            width: 55px !important;
            height: 55px !important;
        }

        .orderList {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .checkCartTwo {
            width: 900px !important;
            height: 18vh !important;

        }
    </style>

</x-app-layout>
