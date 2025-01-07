@extends('/layouts/master')

@section('center')






<div class="cartSection">
    <div class="headLineText">
        <h4>My <span style="background-color: #47022C; color: #E19133; padding: 5px; ">Wishlist</span> </h4>
    </div>



    @if (Session::has('success'))

    <h1>{{Session::get('success')}}</h1>
    @endif
    <div class="cartSectionTwo">
        <div class="topDetails">



            @foreach ($cartContent1 as $item )




            <div class="cartDetails">
                <div class="cartDetailsTwo">

                    <div class="cartImageDetails">

                        <!-- <div class="cartHeadings">
                            <h2>S/no:{{Cart::count();}}</h2>
                        </div> -->

                        <div class="cartImage"><img src="/images/card1.png" alt="one"></div>
                        <div class="cartHeadings">
                            <div style="font-size: 22px; color:#5f1107cc; margin-bottom:5px">{{$item->name}}</div>
                            <div style="font-size:16px;color: #5f11076c;">Original Price: {{$item->price}}</div>
                        </div>
                    </div>
                    <div class="divTwo">
                        <div class="cartQuantity">
                            <div style="font-size:24px; color: #5F1107;">{{$item->price}}</div>
                        </div>
                        <div onclick="delateCart2('{{$item->rowId}}');"><i class="fa-solid fa-trash"></i></div>

                        <button class="checkBtn">Add cart</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>





    </div>

</div>


<script>
    function delateCart2(rowId) {

        if (confirm('are you want to delate your wishlist')) {

            $.ajax({
                url: '{{route("views.deleteCart2")}}',
                type: 'post',
                data: {
                    rowId: rowId

                },
                dataType: 'JSON',
                success: function(response) {


                    if (response.status == true) {
                        window.location.href = '{{route("views.addWishlist")}}';
                    }



                }
            })
        }




    }
</script>

<style>
    .headLineText {
        display: flex;
        align-items: start;
        width: 77%;
    }


    .submitSection {
        display: flex;
        margin-top: 20px;
    }

    .couponInput {
        width: 300px;
        padding: 10px;
        border: none;
    }

    .checkBtn {
        width: 180px;
        border: none;
        background-color: #47022C;
        padding: 10px;
        color: #E19133;
        font-size: 16px;
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
        justify-content: center;
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
        display: flex;
        align-items: center;
        justify-content: center;
        color: #5F1107;


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
        background-color: #47022C;
        position: static !important;
    }

    .footerContents {

        background-color: #47022C !important;


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



@endsection
