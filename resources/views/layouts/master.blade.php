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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>

<body>
    <section>
        <nav>


            <div class="navBar">
                <a href="/">
                    <div class="logoImage"><img src="/images/logo.png" alt="logo"></div>
                </a>
                <div class="searchNav">
                    <form action="#">

                        <div class="searchContainer">
                            <div class="inputSearch"><input type="search" placeholder="search">
                            </div>
                            <i class="fa-solid fa-magnifying-glass searchIcon"></i>
                        </div>

                    </form>
                </div>
                <div class="navHead">
                    <a href="/allJewelry">All jewelry</a>
                    <a href="/blog">Blogs</a>

                    <a href="/wishlist">About As</a>
                    <div class="setTwo">
                        <a href="/card"> <i class="addCart fa-solid fa-cart-shopping"></i></i></a>
                        <!-- <a href="/wish"> <i class="addCart fa-solid fa-heart"></i></a> -->
                        <a href="/dashboard">User Account</a>
                    </div>
                </div>
            </div>
            <style>
                .addCart,
                .addWish {
                    font-size: 16px;
                    color: white;
                }

                .setTwo {
                    display: flex;
                    gap: 20px;
                }
            </style>

        </nav>


        @yield('center')

        <footer>

            <div class="footerContents">
                <div class="footerDetails">
                    <div class="linkOne">
                        <div class="links">
                            <div class="usefulLinks">
                                <h1>Useful Links</h1>
                            </div>
                            <a href="">Home</a>
                            <a href="">About</a>
                            <a href="">Home</a>
                            <a href="">Contacts</a>
                            <a href="">Home</a>
                        </div>
                    </div>
                    <div class="linkOne">
                        <div class="links">
                            <div class="usefulLinks">
                                <h1>Information</h1>
                            </div>
                            <a href="">Home</a>
                            <a href="">About</a>
                            <a href="">Home</a>
                            <a href="">Contacts</a>
                            <a href="">Home</a>
                        </div>
                    </div>
                    <div class="linkOne">
                        <div class="links">
                            <div class="usefulLinks">
                                <h1>Contacts</h1>
                            </div>
                            <a href="">Home</a>
                            <a href="">About</a>
                            <a href="">Home</a>
                            <a href="">Contacts</a>
                            <a href="">Home</a>
                        </div>
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
            </div>



        </footer>
    </section>
    <!-- <script src="/public/package/swiper-bundle.min.js"></script> -->
    <script src="/package/swiper-bundle.min.js"></script>
    <script>
        // csrf addd
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });














        var swiper = new Swiper(".mySwiperTwo", {
            slidesPerView: 3,
            spaceBetween: 30,
            // centeredSlides: true,
            // coverFlowEffect: {
            //     rotate: 0,
            //     stretch: 0,
            //     depth: 100,
            //     modifier: 2.5,
            // },


            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".next",
                prevEl: ".prev",
            },
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
    </script>
    <script src="/js/script.js"></script>


</body>

</html>