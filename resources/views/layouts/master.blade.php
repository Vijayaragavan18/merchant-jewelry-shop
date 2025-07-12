<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="/package/swiper-bundle.min.css">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


    <!-- Swiper JS -->




</head>

<body>
    <section>
        <nav>
            <div class="navBar ">
                <div class="logoImage">
                    <a href="/">
                        <img src="/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="searchNav">
                    <form action="{{ route('views.allJewelry') }}" method="GET">
                        <div class="searchContainer">
                            <div class="inputSearch">
                                <input type="search" name="search" placeholder="Search Jewels here" value="{{ request('search') }}">
                            </div>
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass searchIcon"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="navHead">
                    <a class=" " href="/">Home</a>
                    <a class=" " href="/allJewelry">All jewelry</a>
                    <a class=" " href="/blog">Blogs</a>
                    <a class=" " href="/about">About As</a>
                    <a class="livePrice " href="javascript:void(0)">live Price:<span>&#8377;</span>9,928/g </a>


                    <div class="setTwo">
                        <div class="cardShow">
                            <h2 style="color:white">{{ Cart::count() }}</h2>
                            <a class="" href="/card"> <i class="navIconRight fa-solid fa-cart-shopping"></i></i></a>
                        </div>

                        <a class="" href="/dashboard"><i class="navIconRight fa-solid fa-user"></i></a>
                    </div>
                </div>
            </div>


            <div class="navBarMobile">

                <div class="logotect">
                    <h1>Alua</h1>
                    <h1>Jewels</h1>


                </div>

                <div class="searchNav">
                    <form action="{{ route('views.allJewelry') }}" method="GET">
                        <div class="searchContainer">
                            <div class="inputSearch">
                                <input type="search" name="search" placeholder="Search Jewels here" value="{{ request('search') }}">
                            </div>
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass searchIcon"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="cardShow">
                    <h2 style="color:white">{{ Cart::count() }}</h2>
                    <a class="" href="/card"> <i class="cartResTop fa-solid fa-cart-shopping" style="color: #fff ;"></i></i></a>
                </div>


                <div class="responseMobile menuBarIcon">

                    <i class="fa-solid fa-bars menuBar"></i>

                </div>


            </div>








        </nav>

        <div class="menuBarRes">
            <div class="menuLaunch ">
                <a class=" " href="/">Home</a>
                <a class=" " href="/allJewelry">All jewelry</a>
                <a class=" " href="/blog">Blogs</a>
                <a class=" " href="/about">About As</a>
                <a class="livePrice " href="javascript:void(0)">live Price:<span>&#8377;</span>9,928/g </a>
                <a class="" href="/dashboard"><i class=" fa-solid fa-user" style="color: #5F1107;"></i></a>



                <button class="closeMenu">Close</button>
            </div>
        </div>




        <style>
            .menuBarRes {
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
                z-index: 10;
            }

            .navBarMobile {
                display: none;
            }

            .activeBtn {
                border-bottom: solid 1px #ff5806;
                margin-bottom: 10px;
            }

            .activeBtnMob {
                border-bottom: solid 1px #ff5806;
                margin-bottom: 10px;
            }


            .livePrice {
                background-color: #e19133;
                padding: 5px;
                border-radius: 2px;
            }

            .navIconRight {
                font-size: 14px;
                color: #ffffffff;
            }

            .setTwo {
                display: flex;
                gap: 20px;
                align-items: center;
                border: white solid 1px;

                border-radius: 10px;
                width: 180px;
                justify-content: space-evenly;
                height: 40px;
            }


            .menuLaunch {
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
                width: 70%;
            }
        </style>


        <script>
            window.addEventListener("DOMContentLoaded", () => {

                const navLinks = document.querySelectorAll(".navHead > a");
                const currentPath = window.location.pathname;

                navLinks.forEach(link => {

                    if (link.getAttribute("href") === currentPath) {
                        link.classList.add("activeBtn");
                    }


                    link.addEventListener('click', () => {
                        navLinks.forEach(l => l.classList.remove('activeBtn'));
                        link.classList.add('activeBtn');
                    });
                });
            });




            window.addEventListener("DOMContentLoaded", () => {

                const maobNavLinks = document.querySelectorAll(".menuLaunch > a");
                const currentPathMob = window.location.pathname;

                maobNavLinks.forEach(link => {

                    if (link.getAttribute("href") === currentPathMob) {
                        link.classList.add("activeBtnMob");
                    }


                    link.addEventListener('click', () => {
                        maobNavLinks.forEach(l => l.classList.remove('activeBtnMob'));
                        link.classList.add('activeBtnMob');
                    });
                });
            });
        </script>



        @yield('center')

        <footer>

            <div class="footerContents">
                <div class="footerDetails">

                    <div class="footerText">
                        <h2>Alua</h2>
                        <p>We are India's simplest all-in-one D2C technology platform, empowering independent e-commerce brands and startups with online stores </p>
                    </div>

                    <div class="linkOne">
                        <div class="linkImage">
                            <div class="usefulLinks">
                                <h1>Follow On Instagram</h1>
                            </div>
                            <img src="/images/qrCode.png" alt="qrLink">
                        </div>
                    </div>
                </div>


                <div class="copyRightLine"></div>


                <div class="copyRightText">
                    2025 CopyRights@Alua jewels
                </div>


            </div>
            <style>
                .cardShow {
                    display: flex;
                    align-items: center;
                    gap: 3px;
                }



                .copyRightText {
                    text-align: center;
                    color: aliceblue;
                    padding: 10px;
                }

                .line {
                    display: grid;
                    align-items: center;
                    justify-content: center;

                }

                .copyRightLine {
                    border-top: white solid 1px;
                    width: 100%;
                }

                .footerText {
                    display: flex;
                    flex-direction: column;
                }

                .footerText p {
                    font-size: 25px;
                    color: aliceblue;
                }

                .footerText h2 {
                    color: aliceblue;
                    font-size: 40px;
                }

                @media (min-width: 576px) and (max-width: 991.98px) {
                    .menuBarRes {
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
                        z-index: 10;
                    }

                    .navBar {
                        width: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: space-evenly;
                        gap: 0px;



                    }


                    .navHead {
                        display: flex;
                        flex-direction: row;
                        gap: 20px;
                        align-items: center;
                        width: 60%;
                        justify-content: space-around;
                    }

                    .navHead a {
                        font-size: 14px;
                    }

                    .logoImage {
                        width: 9%;
                    }

                    .searchNav {
                        width: 150px;
                    }

                    .setTwo {
                        width: 24%;
                    }

                    .searchContainer input[type="search"] {
                        width: 101px;
                        padding: 0 10px;
                        height: 29px;
                        outline: none;
                        border: none;
                        background-color: #fff;
                        font-size: 13px;
                        font-weight: 600;
                        color: #5F1107;
                        border-radius: 10px;
                        -webkit-border-radius: 10px 1px;
                    }
                }



                @media only screen and (max-width: 480px) {
                    .menuLaunch a {
                        text-decoration: none;
                    }

                    .navBar {
                        display: none;
                    }

                    .navBarMobile {
                        display: flex;
                        align-items: center;
                        justify-content: space-around;
                        width: 100%;
                    }

                    .responseMobile {
                        padding: 10px;
                    }

                    .logotect {
                        padding: 10px;
                    }

                    .inputSearch {
                        overflow: visible;
                        max-height: 0;
                    }

                    .searchNav .searchContainer {
                        display: flex;
                        align-items: first baseline;
                        justify-content: right;
                        gap: 3px;
                        width: 90%;
                    }


                    .searchContainer input[type="search"] {

                        width: 100%;
                    }

                    .searchNav {
                        width: 50%;
                    }

                    .cardsTwo_details .cardTwo p,
                    .navBarMobile h1 {
                        font-size: 14px;
                        text-align: center;
                    }

                    .linkImage {
                        width: auto;
                        height: auto;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                    }

                    .footerText p {
                        font-size: 15px;
                        color: aliceblue;
                        text-align: justify;
                        width: 95%;
                    }

                    .footerText h2 {
                        color: aliceblue;
                        font-size: 37px;
                    }

                    .footerContents .footerDetails h1 {
                        color: #E19133;
                        font-size: 14px;
                    }

                    .footerDetails {
                        width: auto;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        padding: 10px;
                    }

                    .menuActive {
                        opacity: 1;
                        visibility: visible;
                    }

                    .menuActive .menuLaunch {
                        transform: scale(1);
                    }


                    .closeMenu {
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

                    .navIconRight {
                        font-size: 14px;
                        color: #5F1107;
                    }

                    .livePrice {
                        background-color: #e19133;
                        padding: 5px;
                        border-radius: 2px;
                        color: #fff !important;
                    }

                    .menuLaunch a {
                        text-decoration: none;
                        color: #5F1107;
                    }
                }
            </style>


        </footer>
    </section>



    <!-- Include Bootstrap JS + Popper -->


    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>


    <script>
        // csrf addd
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const swiper = new Swiper(".mySwiperTwo", {
                slidesPerView: 3,
                spaceBetween: 30,
                navigation: {
                    nextEl: "#rightIcon",
                    prevEl: "#leftIcon",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                watchOverflow: true,
                loop: false,
            });
        });


        var swiper = new Swiper(".mySwiperThree", {
            slidesPerView: 2.5,
            // spaceBetween: 5,
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
            navigation: {
                nextEl: ".next",
                prevEl: ".prev",
            },
        });


        $.ajax({
            url: ''
        })


        const swiper3D = new Swiper('.mySwiper3D', {
            loop: true,
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 200,
                modifier: 2,
                slideShadows: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script src="/js/script.js"></script>
    <script>
        const launchMenu = document.querySelector('.menuBar');
        const menuOverlay = document.querySelector('.menuBarRes');
        launchMenu.addEventListener('click', () => {
            console.log("its click");

            menuOverlay.classList.add('menuActive');


        });

        const closeMenu = document.querySelector('.closeMenu');
        closeMenu.addEventListener('click', () => {
            menuOverlay.classList.remove('menuActive');
        });
    </script>


</body>

</html>
