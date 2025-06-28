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
                    <a class="livePrice " href="https://www.goodreturns.in/gold-rates/madurai.html">live Price:<span>&#8377;</span>9,928/g </a>


                    <div class="setTwo">
                        <div class="cardShow">
                            <h2 style="color:white">{{ Cart::count() }}</h2>
                            <a class="" href="/card"> <i class="navIconRight fa-solid fa-cart-shopping"></i></i></a>
                        </div>

                        <a class="" href="/dashboard"><i class="navIconRight fa-solid fa-user"></i></a>
                    </div>
                </div>
            </div>



        </nav>






        <style>
            .activeBtn {
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
                color: white;
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
                                <h1>Download The App</h1>
                            </div>
                            <img src="/images/qrCode.png" alt="qrLink">
                        </div>
                    </div>
                </div>


                <div class="copyRightLine"></div>


                <div class="copyRightText">
                    @2025 CopyRight.Alua jewels
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


</body>

</html>