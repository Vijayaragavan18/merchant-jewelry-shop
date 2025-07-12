@extends('/layouts/master')

@section('center')




<div class="cartSection">
    <div class="headLineText">
        <h4>My <span style="background-color: aliceblue;">Shopping</span> Cart</h4>
    </div>



    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif



    @if(Cart::count() > 0)


    <div class="cartSectionTwo">








        <div class="topDetails">
            @php
            $subtotal = 0;
            @endphp




            @foreach ($cartContent as $item )
            <div class="cartDetails">
                @php
                $calPrice = $item->price/9928 ;
                $subtotal += $item->price*$item->qty;
                @endphp
                <div class="cartDetailsTwo">
                    <div class="cartImageDetails">
                        <div class="cartImage"><img src="/images/wishImg/{{$item->options->product_image}}" alt="one"></div>
                        <div class="cartHeadings">
                            <div class="cartNameMb">{{$item->name}}</div>



                            <div class="cartPriceOg">Original Price: {{ $item->price }}/{{$calPrice}}g</div>
                        </div>
                    </div>
                    <div class="divTwo">
                        <div class="cartQuantity">




                            <div class="btn"><button class="decrease sub" data-id="{{$item->rowId}}">
                                    <h1>-</h1>
                                </button>
                            </div>
                            <input class="cartQuantityNum" value="{{$item->qty}}">
                            <div class="btn"><button class="increase add" data-id="{{$item->rowId}}">
                                    <h1>+</h1>
                                </button>
                            </div>













                        </div>
                        <div onclick="delateCart('{{$item->rowId}}');"><i class="fa-solid fa-trash"></i></div>
                        <div class="cartNameMb">{{ $item->price*$item->qty }}/{{$calPrice*$item->qty}}g</div>
                    </div>
                </div>
                <!--    $discounts = ($coupon['discount_percent'] / 100) * $subtotal; -->

                @php






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




            </div>
            @endforeach





            <div class="bottomEntry">
                <div class="finalEntry">
                    <div class="gstMb">GST%:</div>
                    <div class="gstMb">18%</div>


                </div>

                <div class="finalEntry">
                    <div class="gstMb">Offer:</div>
                    <div class="gstMb">10%</div>
                </div>
                <div class="finalEntry">
                    <div class="gstMb">Delivery:</div>
                    <div class="gstMb" class="off">99rs</div>
                </div>
                <div class="finalEntry">
                    <div class="gstMb">Coupon:</div>
                    <div class="gstMb">{{ number_format($discounts, 2) }}</div>

                </div>


                <div class="finalEntry">
                    <div class="gstMb">Total:</div>
                    <div class="gstMb"> {{ number_format($disCheck, 2) }}</div>
                </div>


            </div>


            <div class="submitSection">


                <form action="{{ route('views.applyCoupon') }}" method="POST">
                    @csrf
                    <input class="couponInput" type="text" name="coupon_code" placeholder="Please Enter The Coupon 'ALUA10'">
                    <button class="applyBtn" type="submit">Apply Coupon</button>
                </form>


                @if($showModal)
                <button class="addAddress">ADD ADDRESS</button>

                @elseif(!$showModal)


                <form action="{{ route('place.order') }}" method="POST" onsubmit="alert('Your order is packed')">
                    @csrf
                    <button type="submit" class="addAddresss">CONTINUE</button>
                </form>


                @endif
            </div>

            <div class="addTrigger">
                <div class="launcAdd ">
                    <div class="enterHead">
                        <h1>Enter Your Details here</h1>
                    </div>
                    <div class="enterDetails">

                        <form class="enterAddress" action="{{ route('views.addAddress') }}" method="POST">
                            @csrf
                            <input type="text" name="addName" placeholder="Enter Your Login Name" value="{{ old('addName') }}">
                            <input type="text" name="addEmail" placeholder="Enter Your Login Email" value="{{ old('addEmail') }}">
                            <input type="text" name="addNumber" placeholder="Enter Your Number" value="{{ old('addNumber') }}">
                            <input type="text" name="addAddress" placeholder="Enter Your Address" value="{{ old('addAddress') }}">
                            <input type="text" name="addPinCode" placeholder="Enter Your Pincode" value="{{ old('addPinCode') }}">

                            <select name="addPays" class="pays" required>
                                <option value="">Select The Pays</option>
                                <option value="COD" {{ old('addPays') == 'COD' ? 'selected' : '' }}>COD</option>
                            </select>

                            <button class="sumBtn" type="submit">Continue</button>
                        </form>


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

            <style>
                .cartNameMb {
                    font-size: 22px;
                    color: #5f1107cc;
                    margin-bottom: 5px
                }

                .cartPriceOg {
                    font-size: 16px;
                    color: #5f11076c;
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
                    width: 320px;
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
            </style>




        </div>

    </div>
    @else
    <p>Your cart is empty dude</p>
    @endif

</div>


<style>
    .headLineText {
        display: flex;
        align-items: start;
        width: 77%;
    }


    .submitSection {
        display: flex;
        margin-top: 20px;
        align-items: center;
        justify-content: end;
    }

    .couponInput {
        width: 300px;
        padding: 10px;
        border: none;
    }

    .checkBtn,
    .applyBtn {
        width: 150px;
        border: none;
        background-color: #061E09;
        padding: 10px;
        color: #FFFFFF;
        font-size: 16px;
    }


    .addAddress {
        width: 150px;
        border: none;
        background-color: #0E286C;
        border-radius: 5px;
        padding: 10px;
        color: #FFFFFF;
        cursor: pointer;
        font-size: 16px;
    }

    .addAddresss {
        width: 150px;
        border: none;
        background-color: #0E286C;
        border-radius: 5px;
        padding: 10px;
        color: #FFFFFF;
        cursor: pointer;
        font-size: 16px;
    }




    /* .checkBtn {
        background-color: #0E286C;
        border-radius: 5px;
    } */

    .applyBtn {
        margin-right: 10px;
    }


    .topDetails {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .bottomEntry {
        display: flex;
        align-items: center;
        justify-content: end;
        gap: 20px;

    }

    .finalEntry {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 50%;
        background: transparent;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.20);
    }

    .finalEntry div:nth-child(2) {
        font-size: 15px;
        font-weight: bold;
    }


    .cartSectionTwo {
        display: flex;
        align-items: end;
        justify-content: center;
        flex-direction: column;
        gap: 20px;
        width: fit-content;
        background-color: transparent;
        padding: 70px;
        box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.20);

    }




    .divTwo {
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: 60px;
    }

    .cartQuantityNum {
        font-size: 12px;
        background-color: #FFFFFF;
        width: 18px;
        height: 18px;

        color: #5F1107;
        border: none;
        text-align: center;

    }


    .cartImage img {
        border-radius: 5px;
    }

    .cartImageDetails {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 32px;
    }

    .cartDetailsTwo {
        width: 800px;
        display: flex;

        align-items: center;
        justify-content: space-between;
    }


    .cartSection {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 50px;
        margin: 5rem 0rem 7rem 0rem;
    }


    .cartQuantity {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;

    }

    .cartQuantity .increase,
    .decrease {
        background-color: #061E09;
        width: 22px;
        height: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        border-radius: 2px;
        color: white;
        border: none;
        cursor: pointer;
    }





    .cartDetails {
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 901px;
        height: 200px;
        background-color: transparent;
        box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.20);
    }



    .navBar {
        padding: 15px 0px 15px 0px;
        background-color: #061E09;
        position: static !important;
    }

    .footerContents {

        background-color: #061E09 !important;


    }

    h4 {
        font-size: 38px;
        font-weight: normal;
        color: #5F1107;
    }

    img {
        width: 100%;
        height: 100%;
    }

    .cartImage {
        width: 110px;
        height: 110px;
    }



















    @media (min-width: 576px) and (max-width: 991.98px) {
        .headLineText {
            display: flex;
            align-items: start;
            width: auto;
        }

        .cartDetails {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
            height: 200px;
            background-color: transparent;
            box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.20);
            padding: 10px;
        }
    }






    @media only screen and (max-width: 480px) {

        .navBarMobile {

            padding-top: 7px;
            padding-bottom: 5px;
            background-color: #061E09 !important;
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


        .headLineText {
            display: flex;
            align-items: start;
            width: auto;
        }

        .headLineText h4 {
            font-size: 24px;
            font-weight: normal;
            color: #5F1107;
        }

        .cartDetails {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
            height: 140px;
            background-color: transparent;
            box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.20);
        }

        .divTwo {
            display: flex;
            align-items: center;
            justify-content: space-around;
            gap: 10px;
            padding-left: 3px;
        }

        .couponInput {
            width: auto;
            padding: 10px;
            border: none;
        }

        .checkBtn,
        .applyBtn {
            width: 102px;
            border: none;
            background-color: #061E09;
            padding: 10px;
            color: #FFFFFF;
            font-size: 13px;
        }

        .addAddress {
            width: 102px;
            border: none;
            background-color: #0E286C;
            border-radius: 5px;
            padding: 10px;
            color: #FFFFFF;
            cursor: pointer;
            font-size: 12px;
            margin-top: 10px;
        }

        .finalEntry {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 84%;
            background: transparent;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.20);
        }

        .submitSection {
            display: flex;
            margin-top: auto;
            align-items: center;
            justify-content: end;
            flex-direction: column;
        }

        .cartQuantity .increase,
        .decrease {
            background-color: #061E09;
            width: 15px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            border-radius: 2px;
            color: white;
            border: none;
            cursor: pointer;
        }

        .cartImage {
            width: 43px;
            height: 46px;
        }

        .cardPriceMb {
            font-size: 14px;
        }

        .cartDetailsTwo {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }


        .cartSectionTwo {
            display: flex;
            align-items: end;
            justify-content: center;
            flex-direction: column;
            gap: 20px;
            width: fit-content;
            background-color: transparent;
            padding: 58px 10px;
            box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.20);
        }

        .cartQuantity {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 4px;
        }

        .cartImageDetails {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 17px;
        }

        .cartPriceOg {
            font-size: 11px;
            color: #5f11076c;
        }

        .cartNameMb {
            font-size: 14px;
            color: #5f1107cc;
            margin-bottom: 5px;
        }

        .imageAddress {
            display: none;
        }

        .enterAddress input {
            background-color: #5F1107;
            width: auto;
            padding: 15px;
            color: #ffff;
            border: none;
            border-radius: 7px;
            outline: none;
            font-size: 14px;
            font-weight: 200;
        }

        .pays {
            background-color: #5F1107;
            width: auto;
            padding: 10px;
            color: #ffff;
            border: none;
            border-radius: 7px;
            outline: none;
            font-size: 16px;
        }

        .launcAdd {
            gap: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transform: scale(0.7);
            transition: transform 0.4s ease;
            background-color: aliceblue;
            border-radius: 5px;
            width: 67%;
        }

        .addAddresss {
            width: 150px;
            border: none;
            background-color: #0E286C;
            border-radius: 5px;
            padding: 10px;
            color: #FFFFFF;
            cursor: pointer;
            font-size: 16px;
            margin-top: 13px;
        }



        .gstMb {
            font-size: 12px;
        }

        .bottomEntry {
            display: grid;
            align-items: center;
            justify-content: center;
            gap: 9px;
            grid-template-columns: auto auto auto;
        }

        .finalEntry div:nth-child(2) {
            font-size: 14px;
            font-weight: bold;
        }

    }
</style>
<script>
    $('.add').click(function() {
        var qtyEle = $(this).parent().prev();
        var qtyVal = parseInt(qtyEle.val());
        if (qtyVal < 10) {
            var rowId = $(this).data('id');

            qtyEle.val(qtyVal + 1);
            var newQty = qtyEle.val();
            updateCart(rowId, newQty)
        }
    })
    $('.sub').click(function() {
        var qtyEle = $(this).parent().next();
        var qtyVal = parseInt(qtyEle.val());
        if (qtyVal > 1) {
            var rowId = $(this).data('id');
            qtyEle.val(qtyVal - 1);
            var newQty = qtyEle.val();
            updateCart(rowId, newQty)
        }

    })




    function updateCart(rowId, qty) {
        $.ajax({
            url: '{{route("views.updateCart")}}',
            type: 'post',
            data: {
                rowId: rowId,
                qty: qty
            },
            dataType: 'JSON',
            success: function(response) {


                if (response.status == true) {
                    window.location.href = "{{route('views.cardPage')}}";
                }
            }
        })
    }




    function delateCart(rowId) {

        if (confirm('are you want to delate')) {

            $.ajax({
                url: '{{route("views.deleteCart")}}',
                type: 'post',
                data: {
                    rowId: rowId

                },
                dataType: 'JSON',
                success: function(response) {


                    if (response.status == true) {
                        window.location.href = '{{route("views.cardPage")}}';
                    }



                }
            })
        }




    }
</script>



@endsection
