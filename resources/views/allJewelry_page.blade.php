@extends('/layouts/master')

@section('center')



<div class="filterBanner">

    <img src="/images/filterBanner.png" alt="banner">

</div>



<div class="jewelsDetails">
    <div class="filterSection">
        <div class="filterHead">
            <h1>Filter</h1>
            <i onclick="fun('All')" class="fa-plus"></i>
        </div>
        <div class="filterDetails">




            <div class="subArea">

                <div class="head2">
                    <span class="title">Price Range</span>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="subSec">
                    <div class="checkbox">


                        <input type="checkbox" id="Women">
                    </div>
                    <div class="checkName">
                        <label for="men">Men</label>

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
                        <input type="checkbox" id="gold">

                        <input type="checkbox" id="Diamond">
                    </div>
                    <div class="checkName">
                        <label for="gold">Gold</label>
                        <label for="Diamond">Diamond</label>
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
                        <input type="checkbox" id="Ring">

                        <input type="checkbox" id="Chain">
                        <input type="checkbox" id="Necklace">
                        <input type="checkbox" id="Earrings">

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
                    <span class="title">Occasion</span>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="subSec">
                    <div class="checkbox">
                        <input onclick="fun('Casual')" type="checkbox" id="Casual">

                        <input onclick="fun('Traditional')" type="checkbox" id="Traditional">
                        <input onclick="fun('Trendy')" type="checkbox" id="Trendy">
                        <input onclick="fun('Wedding')" type="checkbox" id="Wedding">
                        <input onclick="fun('Work Wear')" type="checkbox" id="WorkWear">
                        <input onclick="fun('Casual Wear')" type="checkbox" id="Casual Wear">
                    </div>
                    <div class="checkName">
                        <label class="fitCheck" for="Casual">Casual</label>
                        <label class="fitCheck" for="Traditional">Traditional</label>
                        <label class="fitCheck" for="Trendy">Trendy</label>
                        <label class="fitCheck" for="Wedding">Wedding</label>
                        <label class="fitCheck" for="WorkWear">Work Wear</label>
                        <label class="fitCheck" for="Casual Wear">Casual Wear</label>
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
                        <input type="checkbox" id="kids">

                        <input type="checkbox" id="female">
                        <input type="checkbox" id="Male">
                    </div>
                    <div class="checkName">
                        <label for="kids">Kids</label>
                        <label for="female">Female</label>
                        <label for="Male">Male</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

                    <a href="/wish/addWishlist" class="addCard"><button>New card</button></a>






                    <div class=" heartCart">
                        <i class="fa-solid fa-heart"></i>
                    </div>




                </div>
                <div class="jewelsImgSec">



                    @foreach ($showWishList as $showList )
                    <div class="jewelsImageDetails">
                        <div class="jewelsDetailTwo">
                            <div class="jewelsImage">
                                <img src="/images/wishImg/{{$showList->image}}" alt="jewelsOne">
                                <div class="info">



                                    <div onclick="addWishCart('{{$showList->id}}')" class="whishList">
                                        <i class="fa-solid whishListIcon fa-heart"></i>
                                    </div>





                                    <div class="addCard">
                                        <div class="addBtn" onclick="addToCart('{{$showList->id}}')"><button>Add to Card</button></div>
                                    </div>
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
                        .addCard button {
                            border: none;
                            padding: 5px 10px;
                            border-radius: 5px;
                        }


                        li {
                            list-style: none;
                        }

                        .pagination {
                            display: flex;
                            align-items: center;
                            justify-content: space-between;
                            width: 220px;
                        }

                        .page-link {
                            font-size: 13px;
                            text-decoration: none;
                            padding: 9px;
                            background-color: #fff;
                            border-radius: 6px;

                        }



                        .jewelsImage:hover a {
                            opacity: 1;
                            transition: 1s all;
                        }

                        .info a:hover {
                            color: red;
                        }

                        .whishListIcon {
                            font-size: 20px;
                        }

                        /* .whishList {
                        } */
                        .info {
                            display: flex;
                            height: 200px;
                            align-items: center;
                            justify-content: space-between;
                            flex-direction: column;
                            position: absolute;
                            width: 80%;
                            z-index: 6;
                        }

                        .jewelsImage .addCard button {
                            background-color: #5F1107;
                            border: none;
                            border-radius: 5px;
                            color: aliceblue;
                            padding: 7px 10px;
                        }

                        .jewelsImage .addCard {
                            z-index: 3;
                            /* position: relative; */
                            color: aqua;
                            opacity: 0;
                            display: flex;
                            transform: translateY(30px);
                            transition: 1s all;
                        }

                        .jewelsImage:hover .addCard {
                            opacity: 1;
                            transform: translateY(0px);
                        }

                        .jewelsImageDetails {
                            display: flex;
                            align-items: center;
                            padding-top: 3rem;
                        }

                        .jewelsDetailTwo {
                            width: 100%;
                            height: 100%;
                        }

                        .add {
                            display: block;
                        }

                        .jewelsImage:before {
                            content: '';
                            background-color: #5f110733;
                            width: 250px;
                            height: 280px;
                            z-index: 2;
                            position: absolute;
                            top: 0;
                            left: 0;
                            display: block;
                            opacity: 0;
                            transition: 0.5s all;
                            border-radius: 7px;
                        }

                        .jewelsImage:hover:before {
                            opacity: 1;
                        }

                        .jewelsImage {
                            position: relative;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            flex-direction: column;
                        }

                        .wishColor {
                            color: red;
                        }

                        .opp {
                            opacity: 1;
                        }

                        .info a {
                            text-decoration: none;
                            display: flex;
                            align-items: center;
                            justify-content: end;
                            width: 100%;
                            opacity: 0;
                            z-index: 5;
                            color: aliceblue;
                        }

                        .pagIcons {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            margin-top: 4rem;
                        }
                    </style>
                    <!-- <div class="jewelsImageDetails">
                        <div class="jewelsDetailTwo">
                            <div class="jewelsImage">
                                <img src="/images/jewelsImg/f4.jpg" alt="jewelsOne">
                                <div class="info">
                                    <a href="">
                                        <div class="whishList"><i class="fa-solid whishListIcon fa-heart"></i></div>
                                    </a>
                                    <div class="addCard">
                                        <div class="addBtn"><button>Add to Card</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="jewelsPrice ">
                                <h4>Weight: 3.08 gm</h4>
                                <h1>$22,600.00</h1>
                                <p>
                                    gold ring for men and women WorkWear and Wedding trendy
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="jewelsImageDetails">
                        <div class="jewelsDetailTwo">
                            <div class="jewelsImage">
                                <img src="/images/jewelsImg/f4.jpg" alt="jewelsOne">
                                <div class="info">
                                    <a href="">
                                        <div class="whishList"><i class="fa-solid whishListIcon fa-heart"></i></div>
                                    </a>
                                    <div class="addCard">
                                        <div class="addBtn"><button>Add to Card</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="jewelsPrice ">
                                <h4>Weight: 3.08 gm</h4>
                                <h1>$22,600.00</h1>
                                <p>
                                    gold ring for men and women WorkWear and Wedding trendy
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
        <div class="pagIcons">
            {!!$showWishList->links()!!}
        </div>
    </div>

</div>

<script>
    // let click = document.querySelectorAll(".jewelsImage");

    // click.forEach(ct => {
    //     let inp = document.querySelector(".info");
    //     ct.addEventListener("mouseover", () => {

    //         inp.classList.add("add");
    //     })
    //     ct.addEventListener("mouseout", () => {
    //         inp.classList.remove("add");
    //     })


    // })

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

                    // } else {
                    //     let check2 = document.querySelectorAll(".jewelsImageDetails");
                    //     check2.forEach(bt => {
                    //         if (!btn.classList.contains("ad")) {
                    //             bt.classList.remove("hide");
                    //         }
                    //     })
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







    // function fun(val) {
    //     let element = document.querySelectorAll(".jewelsImageDetails");




    //     element.forEach(ele => {
    //         let check = document.querySelectorAll(".fitCheck");
    //         check.forEach((item, rag) => {

    //             if (val == "All") {
    //                 ele.classList.remove("hide");


    //             } else {


    //                 myfun(rag);



    //  if (ele.innerHTML.includes(val)) {
    //  ele.classList.remove("hide");
    // console.log(ele.innerHTML.includes(val))
    // } else {
    //   ele.classList.add("hide");
    //  console.log(ele.innerHTML.includes(val))
    //}
    //             }
    //         })

    //         function myfun(rags) {


    //             check.forEach((inp, out) => {
    //                 if (rags != out) {
    //                     inp.classList.toggle("ad");
    //                 }
    //             })



    //         }

    //     })

    // }
</script>




<style>
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
        padding: 15px 0px 15px 0px;
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
</script>




@endsection
