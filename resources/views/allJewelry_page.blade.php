@extends('/layouts/master')

@section('center')



<div class="filterBanner">

    <img src="/images/filterBanner.png" alt="banner">

</div>



<div class="jewelsDetails">


    <form action="{{ route('views.allJewelry') }}" method="get">
        <div class="filterSection">
            <div class="filterHead">
                <h1>Filter</h1>
                <a class="allBtn" href="{{ route( 'views.allJewelry') }}" style=" text-decoration: none;">
                    All
                </a>
            </div>

            <div class="filterDetails">
                <div class="subArea">

                    <div class="head2">
                        <span class="title">Price Range</span>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="subSec">
                        <div class="checkbox">


                            <input type="checkbox" name="price[]" value="0-500">
                            <input type="checkbox" name="price[]" value="500-1000">
                            <input type="checkbox" name="price[]" value="1000-1500">
                        </div>
                        <div class="checkName">
                            <label for="men">0-500</label>
                            <label for="men">500-1000</label>
                            <label for="men">1000-1500</label>

                        </div>
                    </div>
                </div>
                <div class="subArea">

                    <div class="head2">
                        <span class="title">Material</span>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="subSec">
                        <div class="checkbox">
                            <input type="checkbox" name="material[]" value="Gold" id="gold">
                            <input type="checkbox" name="material[]" value="Diamond" id="Diamond">
                            <input type="checkbox" name="material[]" value="Platinum" id="Platinum">
                        </div>
                        <div class="checkName">
                            <label for="gold">Gold</label>
                            <label for="Diamond">Diamond</label>
                            <label for="platinum">Platinum</label>
                        </div>
                    </div>
                </div>
                <div class="subArea">

                    <div class="head2">
                        <span class="title">All Jewellerys</span>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="subSec">
                        <div class="checkbox">
                            <input type="checkbox" name="category[]" value="Ring" id="Ring">
                            <input type="checkbox" name="category[]" value="Chain" id="Chain">
                            <input type="checkbox" name="category[]" value="Necklace" id="Necklace">
                            <input type="checkbox" name="category[]" value="Earnings" id="Earnings">


                        </div>
                        <div class="checkName">
                            <label for="Ring">Ring</label>
                            <label for="Chain">Chain</label>
                            <label for="Necklace">Necklace</label>
                            <label for="Earrings">Earrings</label>


                        </div>
                    </div>
                </div>
                <div class="subArea">

                    <div class="head2">
                        <span class="title">Gender</span>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="subSec">
                        <div class="checkbox">
                            <input type="checkbox" name="gender[]" value="Male " id="Male">
                            <input type="checkbox" name="gender[]" value="Female" id="Female">
                            <input type="checkbox" name="gender[]" value="Kids" id="kids">
                        </div>
                        <div class="checkName">
                            <label for="Male">Male</label>
                            <label for="female">Female</label>
                            <label for="kids">Kids</label>
                        </div>
                    </div>
                </div>
                <button class="allBtn" type="submit">Submit</button>
            </div>
        </div>
    </form>
    <div class="leftContent">
        <div class="flexLeft">
            <div class="hrLine">
            </div>
            <div class="jewelrySec">
                <div class="jewelsHead">
                    <h1>JEWELRY</h1>
                    <p>Buy Gold Jewellery Online and Enjoy Insured Shipping from AluaJewels.com
                        Alua Jewellery is India's leading online gold jewelry store gives the finest designs
                        in Gold Bangles.</p>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            const dashboardContent = document.getElementById('newCart');
                            if (dashboardContent) {
                                dashboardContent.style.display = 'block';
                            }
                        });
                    </script>
                    @if ($packageUser && in_array($packageUser->plan_id, [1,2, 3]))

                    <a href="/wish/productDetailAdd" id="newCart" class="addCard">
                        <button>New card</button>
                    </a>
                    @endif



                </div>
                <div class="jewelsImgSec">


                    @if ($showWishList->isEmpty())



                    <h1>no products</h1>
                    @else
                    @foreach ($showWishList as $showList )
                    <div class="jewelsImageDetails">
                        <div class="jewelsDetailTwo">
                            <div class="jewelsImage">
                                <img src="/images/wishImg/{{$showList->image}}" alt="jewelsOne">
                                <div class="info">









                                    @if (! $packageUser || ! in_array($packageUser->plan_id, [1, 2, 3]))
                                    <div class="addCard">
                                        <div class="addBtn" onclick="addToCart('{{$showList->id}}')"><button>Add to Card</button></div>
                                    </div>

                                    @endif

                                </div>
                            </div>
                            <div class="jewelsPrice ">
                                <h4>{{$showList->Wish_name}}</h4>
                                <h1>{{$showList->Price}}</h1>
                                <p>
                                    {{$showList->Description}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    @endif

                    <script>
                        function addWishCart(id) {


                            $.ajax({
                                url: '{{route("views.addWish")}}',
                                type: "post",
                                data: {
                                    id: id
                                },
                                dataType: "json",
                                success: function(response) {


                                    if (response.status == true) {
                                        window.location.href = "{{route('views.addWishlist')}}";
                                        console.log("wish added");
                                    } else {
                                        alert(response.message);






                                    }

                                }

                            });
                        }




                        function addToCart(id) {


                            $.ajax({
                                url: '{{route("views.addCart")}}',
                                type: "post",
                                data: {
                                    id: id
                                },
                                dataType: "json",
                                success: function(response) {


                                    if (response.status == true) {
                                        window.location.href = "{{route('views.cardPage')}}";
                                    } else {
                                        alert(response.message);
                                    }

                                }

                            });
                        }
                    </script>





                    <style>

                    </style>
                </div>

            </div>
        </div>
        <div class="pagIcons">

            {{ $showWishList->links() }}
        </div>
    </div>

</div>





<style>
    .allBtn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 5px 7px;
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        background-color: #C07000;
        border: none;
        width: 100px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        text-decoration: none;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        margin-left: 35px;
    }





    .j {
        padding-top: 50px;
    }

    .subArea {
        display: grid;
        overflow: hidden;

    }

    .flexLeft {
        display: flex;
        align-items: self-start;
    }


    .leftContent {
        display: flex;
        flex-direction: column;
    }

    .subArea.open {
        min-height: 35px;
    }


    input[type="checkbox"] {
        border: 2rem solid red;
    }

    .checkName {
        display: grid;
        gap: 30px;

    }

    .checkbox {
        display: grid;
        justify-content: space-between;
        gap: 30px;
    }



    .jewelsImage img {
        width: 250px;
        height: 280px;
        border-radius: 7px;


    }

    .subSection {
        display: grid;
        width: 100%;
    }

    .sub {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .subSec {
        height: 0;
        display: flex;
        margin-left: 40px;
        gap: 12px;
        transition: all 0.5s linear;
        -webkit-transition: all 0.2s linear;
        -moz-transition: all 0.2s linear;
        -ms-transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
    }




    .jewelsPrice h4 {
        font-size: 20px;
    }

    .jewelsPrice h1 {
        font-size: 32px;
    }

    .jewelsPrice {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .jewelrySec {
        display: grid;
        margin-top: 75px;
        align-items: start;
        gap: 50px;
    }



    .jewelsDetails {

        display: flex;
        align-items: self-start;
        justify-content: space-around;
        margin-bottom: 3rem;
    }

    .jewelsImgSec {
        display: grid;
        grid-template-columns: auto auto auto;
    }

    /* .jewelsPrice {
        display: grid;
        align-items: center;
        justify-content: center;

    } */



    .jewelsImageDetails {
        display: grid;
        align-items: center;
        justify-content: center;
        gap: 16px;


    }

    .jewelsPrice p {
        display: none;
    }

    .jewelsHead {
        width: 75%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 50px;
        gap: 20px;
    }

    .jewelsHead p {
        font-size: 16px;
        font-weight: 200;
    }

    .jewelsHead h1 {
        font-size: 50px;
        font-weight: lighter;
    }


    .hrLine {
        height: 160vh;
        width: 10px;
        border-left: 3px solid black;
        margin-top: 120px;
        border-radius: 10%;
    }


    .navBar {
        padding: 5px 0px 5px 0px;
        background-color: #5F1107;
        position: static !important;
    }

    .filterBanner {
        padding-top: 17px;
    }

    .filterSection {
        margin-top: 75px;
        /* background-color: #5F1107; */
        width: 350px;
        display: grid;
        gap: 25px;
        padding-left: 38px;
    }

    .filterHead h1 {
        font-size: 45px;
        text-align: left;
    }

    .filterDetails {
        padding-left: 20px;
        display: grid;
        gap: 55px;
    }

    .head2 {
        width: 70%;
        display: grid;
        grid-auto-columns: auto auto;
        grid-template-columns: auto auto;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        cursor: pointer;
    }

    .head2 i {
        transition: all 0.2s linear;
        font-size: 15px;
        color: rgba(0, 0, 0, 0.685);
        -webkit-transition: all 0.2s linear;
        -moz-transition: all 0.2s linear;
        -ms-transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
    }

    .hide {
        display: none;
    }
</style>

<script>
    window.onload = () => {
        fun("All");
    }

    function reload(val) {
        fun("All");

    }



    //   filter subSection accordion

    const acc2 = document.querySelectorAll(".subArea");
    acc2.forEach((item, value) => {
        // console.log(value);
        const hd2 = item.querySelector(".head2");
        hd2.addEventListener('click', () => {
            item.classList.toggle("open");
            const head = item.querySelector(".subSec");
            if (item.classList.contains("open")) {
                head.style.height = `${head.scrollHeight}px`;
                item.querySelector("i").classList.replace("fa-plus", "fa-minus");
            } else {
                head.style.height = '0px';
                item.querySelector("i").classList.replace("fa-minus", "fa-plus");
            }
            MyFun(value);
        });

    });

    function MyFun(values) {
        acc2.forEach((ind, ind2) => {

            if (values != ind2) {
                // console.log(values, ind2);
                ind.classList.remove("open");
                let s = ind.querySelector(".subSec");
                s.style.height = "0px";
                ind.querySelector("i").classList.replace("fa-minus", "fa-plus");
            }
        })
    }



    const wishList = document.querySelectorAll(".whishListIcon");
    wishList.forEach((val, index) => {
        val.addEventListener("click", () => {
            val.classList.toggle("wishColor");
            const addWish = document.querySelectorAll(".whishList");
            addWish.forEach((num, item) => {
                if (index == item) {
                    num.classList.toggle("opp");
                }
            })

        })
    })


    function fun(val) {

        let check = document.querySelectorAll(".fitCheck");
        check.forEach(btn => {
            if (val.toUpperCase() == btn.innerText.toUpperCase()) {
                console.log(btn.innerHTML);

                btn.classList.toggle("ad");
                if (btn.classList.contains("ad")) {
                    classCheck(val);

                } else {
                    if (!btn.classList.contains("ad")) {
                        let check = document.querySelectorAll(".jewelsImageDetails");
                        check.forEach(bt => {
                            bt.classList.remove("vj");
                        })
                    }
                }


            }
        })



    }



    function classCheck(item) {
        let check = document.querySelectorAll(".jewelsImageDetails");
        check.forEach(btn => {
            if (btn.innerHTML.includes(item)) {
                btn.classList.remove("hide")
                btn.classList.toggle("vj")
            } else {
                if (!btn.classList.contains("vj")) {
                    btn.classList.add("hide");
                    checkHide();

                } else {
                    btn.classList.remove("hide");
                }
            }

        })



    }


    function checkHide() {

        let btn = document.querySelectorAll(".jewelsImageDetails");
        btn.forEach(btn3 => {
            if (!btn3.classList.contains("vj")) {
                btn3.classList.add("hide");
            }
        })
    }




    function errorCheck(btn) {
        let check = document.querySelectorAll(".jewelsImageDetails");
        check.forEach(bt => {
            bt.classList.remove("hide");
        })


    }
</script>




@endsection
