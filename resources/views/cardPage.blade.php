@extends('/layouts/master')

@section('center')




<div class="cartSection">
    <div class="headLineText">
        <h4>My <span style="background-color: aliceblue;">Shopping</span> Cart</h4>
    </div>



    @if((Cart::count())==0)
    <h1>Cart is empty now</h1>
    @endif


    @if (Session::has('success'))

    <h1>{{Session::get('success')}}</h1>
    @endif



    <div class="cartSectionTwo">







        <div class="topDetails">






            @foreach ($cartContent as $item )
            <div class="cartDetails">

                <div class="cartDetailsTwo">
                    <div class="cartImageDetails">
                        <div class="cartImage"><img src="/images/wishImg/{{$item->options->product_image}}" alt="one"></div>
                        <div class="cartHeadings">
                            <div style="font-size: 22px; color:#5f1107cc; margin-bottom:5px">{{$item->name}}</div>
                            <div style="font-size:16px;color: #5f11076c;">Original Price: {{$item->price}}</div>
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
                        <div style="font-size:24px;">{{$item->price*$item->qty}}</div>
                    </div>
                </div>






            </div>

            @endforeach
            <div class="bottomEntry">
                <div class="finalEntry">
                    <div>Delivery</div>
                    <div class="off">99rs</div>
                </div>
                <div class="finalEntry">
                    <div>Off !!</div>
                    <div>10%</div>
                </div>
                <div class="finalEntry">
                    <div>GSD%</div>
                    <div>18%</div>
                </div>
                <div class="finalEntry">
                    <div>Total</div>
                    <div>{{ Cart::count()>0 ?(((Cart::subTotal())-10/100)+18/100)+99 : 00}}</div>
                </div>
            </div>


            <div class="submitSection">

                <input class="couponInput" type="text" placeholder="Please Enter The Coupon Code" disabled>
                <button class="applyBtn">Apply Coupon</button>
                <button class="checkBtn">Checkout</button>

            </div>





        </div>

    </div>


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

    .checkBtn {
        background-color: #0E286C;
        border-radius: 5px;
    }

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
        width: 158px;
        background: transparent;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.20);
    }

    .finalEntry div:nth-child(2) {
        font-size: 22px;
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
