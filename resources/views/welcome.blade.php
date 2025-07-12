@extends('layouts/master')
@section('center')

<div class="swiper mySwiper  heroBanner">

    <style>
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;

            height: 100%;
            object-fit: cover;

        }

        .swiper-pagination-bullet-active {
            background: white;
        }

        .paginationIcon {

            bottom: 60px;
            z-index: 1;

            position: relative;
        }
    </style>
    <div class="swiper-wrapper deskTopSize">

        <div class="swiper-slide bannerImage">
            <img class="bannerImg" src="/images/heroBanner/bannerOne.png" alt="bannerImage">
            <div class="bannerText">
                <div class="text">
                    <h1>glam Days</h1>
                    <h3>Wide variety of daily
                        <br>wear jewelry
                    </h3>
                    <a href="/allJewelry"><button type="button">See More</button></a>

                </div>
            </div>
            <div class="iconsRL">
                <div class="frontBackIcon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide bannerImage">
            <img class="bannerImg" src="/images/heroBanner/bannerTwo.png" alt="bannerImage">
            <div class="bannerText1">
                <div class="text">
                    <h1>Jewelry</h1>
                    <h3>Girls just wanna
                        <br>have fun
                    </h3>
                    <a href="/allJewelry"><button type="button">See More</button></a>
                </div>
            </div>
            <div class="iconsRL">
                <div class="frontBackIcon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide bannerImage">
            <img class="bannerImg" src="/images/heroBanner/bannerThree.png" alt="bannerImage">
            <div class="bannerText2">
                <div class="text">
                    <h3>“Wear your heart around your neck” <br>
                        Your Style, Your Statement</h3>

                    <a href="/allJewelry"><button type="button">See More</button></a>
                </div>
            </div>
            <div class="iconsRL">
                <div class="frontBackIcon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide bannerImage">
            <img class="bannerImg" src="/images/heroBanner/bannerFour.png" alt="bannerImage">
            <div class="bannerText3">
                <div class="text">
                    <h1>In every piece</h1>
                    <h1>,a memory lingers</h1>

                </div>

            </div>
            <div class="iconsRL">
                <div class="frontBackIcon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide bannerImage">
            <img class="bannerImg" src="/images/heroBanner/bannerFive.png" alt="bannerImage">
            <div class="bannerText4">

            </div>
            <div class="iconsRL">
                <div class="frontBackIcon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>










    <div class="mobileRes myPhone">
        <div class="swiper-wrapper">

            <div class="swiper-slide ">
                <img class="bannerImg" src="/images/heroBanner/WellOne.jpg" alt="bannerImage">
                <div class="bannerText">
                    <div class="text">
                        <h1>glam Days</h1>
                        <h3>Wide variety of daily
                            <br>wear jewelry
                        </h3>
                        <a href="/allJewelry"><button type="button">See More</button></a>

                    </div>
                </div>
                <div class="iconsRL">
                    <div class="frontBackIcon">
                        <i class="prevSec fa-solid fa-angle-left"></i>
                        <i class="nextSec fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <img class="bannerImg" src="/images/heroBanner/wellTwo.png" alt="bannerImage">
                <div class="bannerText1">
                    <div class="text">
                        <h1>Jewelry</h1>
                        <h3>Girls just wanna
                            <br>have fun
                        </h3>
                        <a href="/allJewelry"><button type="button">See More</button></a>
                    </div>
                </div>
                <div class="iconsRL">
                    <div class="frontBackIcon">
                        <i class="prevSec fa-solid fa-angle-left"></i>
                        <i class="nextSec fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <img class="bannerImg" src="/images/heroBanner/wellThree.png" alt="bannerImage">
                <div class="bannerText2">
                    <div class="text">
                        <h3>“Wear your heart around your neck” <br>
                            Your Style, Your Statement</h3>

                        <a href="/allJewelry"><button type="button">See More</button></a>
                    </div>
                </div>
                <div class="iconsRL">
                    <div class="frontBackIcon">
                        <i class="prevSec fa-solid fa-angle-left"></i>
                        <i class="nextSec fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="ourServices">
        <div class="services">
            <div class="serviceList">
                <i class="fa-regular fa-circle-check"></i>
                <h3>Safe<br>&Secure</h3>
            </div>
            <div class="serviceList">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Free <br>
                    Shipping</h3>
            </div>
            <div class="serviceList">
                <i class="fa-solid fa-rotate-left"></i>
                <h3>7 Days <br>
                    Return</h3>
            </div>
            <div class="serviceList">
                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                <h3>Diamond <br>
                    Exchange</h3>
            </div>
        </div>
    </div>

</div>

<div class="cardSection mobileHide">

    <div class="heading">
        <h1>Shop By <span style="font-weight:bolder;">Collection</span>
        </h1>
    </div>




    <div class="buyingCards">
        <div class="cards">
            <div class="card">
                <a href="allJewelry">
                    <div class="cardImage"><img src="/images/card1.png" alt="cardImage"></div>
                </a>
                <div class="brandTitle">
                    <h1>Haaram</h1>
                </div>
            </div>
            <div class="card">
                <a href="allJewelry">
                    <div class="cardImage"><img src="/images/card2.png" alt="cardImage"></div>
                </a>
                <div class="brandTitle">
                    <h1>Boho Charm</h1>
                </div>
            </div>
            <div class="card">
                <a href="allJewelry">
                    <div class="cardImage"><img src="/images/card3.png" alt="cardImage"></div>
                </a>
                <div class="brandTitle">
                    <h1>Mangalsutra </h1>
                </div>
            </div>
            <div class="card hideOne">
                <a href="allJewelry">
                    <div class="cardImage"><img src="/images/card4.png" alt="cardImage"></div>
                </a>
                <div class="brandTitle">
                    <h1>Polki Necklace</h1>
                </div>
            </div>


        </div>

    </div>


</div>


<!-- <div class="swiper mySwiper3D">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="/images/card1.png" alt="cardImage">
            <h1>Necklace</h1>
        </div>
        <div class="swiper-slide">
            <img src="/images/card2.png" alt="cardImage">
            <h1>Necklace</h1>
        </div>
        <div class="swiper-slide">
            <img src="/images/card2.png" alt="cardImage">
            <h1>Necklace</h1>
        </div>
        <div class="swiper-slide">
            <img src="/images/card2.png" alt="cardImage">
            <h1>Necklace</h1>
        </div>
        <div class="swiper-slide">
            <img src="/images/card2.png" alt="cardImage">
            <h1>Necklace</h1>
        </div>
        <div class="swiper-slide">
            <img src="/images/card2.png" alt="cardImage">
            <h1>Necklace</h1>
        </div>



    </div>


<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div> -->


<!-- <style>
    .swiper-slide {
        background: #fff;
        width: 300px;
        height: 400px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }

    .mySwiper3D {
        width: 90%;
    }
</style> -->




<script type="module">
    import {
        animate,
        hover
    } from "https://cdn.jsdelivr.net/npm/motion@12.7.5/+esm"

    hover(".card", (element) => {
        animate(element, {
            scale: 0.9
        })

        return () => animate(element, {
            scale: 1
        })
    })

    hover(".genderOne", (element) => {
        animate(element, {
            scale: 0.9
        })

        return () => animate(element, {
            scale: 1
        })
    })
</script>


<div class="cardSection_two">
    <div class="sectionTwo_heading">
        <h1>Our <span style="font-weight:bolder;">Categories</span></h1>
    </div>
    <div class="cardsTwo_details">
        <div class="cardTwo">
            <a href="allJewelry">
                <div class="cardTwo_image"><img src="/images/card1.png" alt="card1"></div>
            </a>
            <p>let your gold earnings shines
                as bright as your reputation</p>
            <h1>Golden Grace</h1>
        </div>
        <div class="cardTwo">
            <a href="allJewelry">
                <div class="cardTwo_image"><img src="/images/card3.png" alt="card1"></div>
            </a>
            <p>Your glow is natural, your gold is optional but why?</p>
            <h1>Kanchan Kada</h1>
        </div>
        <div class="cardTwo">
            <a href="allJewelry">
                <div class="cardTwo_image"><img src="/images/card5.png" alt="card1"></div>
            </a>
            <p>More than a jewel, it’s a legacy around your neck</p>
            <h1>The Radiance Cuff</h1>
        </div>
        <div class="cardTwo">
            <a href="allJewelry">
                <div class="cardTwo_image"><img src="/images/card4.png" alt="card1"></div>
            </a>
            <p>Every queen deserves her crown and her gold</p>
            <h1>Twilight Twirl</h1>
        </div>
        <div class="cardTwo">
            <a href="allJewelry">
                <div class="cardTwo_image"><img src="/images/card7.png" alt="card1"></div>
            </a>
            <p>You don't wear gold to sparkle, you wear it to speak</p>
            <h1>Regal Rhythm</h1>
        </div>
        <div class="cardTwo">
            <a href="allJewelry">
                <div class="cardTwo_image"><img src="/images/card6.png" alt="card1"></div>
            </a>
            <p>Let your jewels tell the story of your strength</p>
            <h1>Velvet Karat</h1>
        </div>
        <div class="cardTwo hideOne">
            <a href="allJewelry">
                <div class="cardTwo_image"><img src="/images/card8.png" alt="card1"></div>
            </a>
            <p>Every queen deserves her crown and her gold</p>
            <h1>Zari Charm</h1>
        </div>
        <div class="cardTwo hideOne">
            <a href="allJewelry">
                <div class="cardTwo_image"><img src="/images/card2.png" alt="card1"></div>
            </a>
            <p>Let your gold shine louder than your words</p>
            <h1>Sunehri Circle</h1>
        </div>
    </div>
</div>

<div class="sectionFour hideOne mobileHide">
    <div class="headFour">
        <h1>Top Sellers</h1>
        <p>Love the most to bought the most</p>
    </div>
    <div class="cardFour_section ">

        <div class="slidIcon prev" id="leftIcon"><i class="fa-solid fa-angle-left"></i></div>

        <div class="swiper cardFour mySwiperTwo">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="allJewelry">
                        <img src="/images/card2.png" alt="card_one">
                    </a>
                    <div class="cardDesc">
                        <h3>Soft Flower Diamond Ring</h3>
                        <div class="priceTags">
                            <h4>Aurora Gems</h4>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <a href="allJewelry">
                        <img src="/images/card6.png" alt="card_one">
                    </a>
                    <div class="cardDesc">
                        <h3>Golden Dewdrop Necklace</h3>
                        <div class="priceTags">
                            <h4>Lustre & Co.</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="allJewelry">
                        <img src="/images/card3.png" alt="card_one">
                    </a>
                    <div class="cardDesc">
                        <h3>Twilight Garden Necklace</h3>
                        <div class="priceTags">
                            <h4>Veloura Jewels</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="allJewelry">
                        <img src="/images/card5.png" alt="card_one">
                    </a>
                    <div class="cardDesc">
                        <h3>Moonbeam Link Chain</h3>
                        <div class="priceTags">
                            <h4>Celestia Diamonds</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="allJewelry">
                        <img src="/images/card7.png" alt="card_one">
                    </a>
                    <div class="cardDesc">
                        <h3>Eternal Bloom Diamond Ring</h3>
                        <div class="priceTags">
                            <h4>Nuvella Jewelry</h4>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="allJewelry">
                        <img src="/images/card1.png" alt="card_one">
                    </a>
                    <div class="cardDesc">
                        <h3>Sunset Horizon Chain</h3>
                        <div class="priceTags">
                            <h4>Eterna Luxe</h4>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="allJewelry">
                        <img src="/images/card6.png" alt="card_one">
                    </a>
                    <div class="cardDesc">
                        <h3>Velvet Strand Chain</h3>
                        <div class="priceTags">
                            <h4>Seraphine & Sons</h4>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="allJewelry">
                        <img src="/images/card2.png" alt="card_one">
                    </a>
                    <div class="cardDesc">
                        <h3>Lush Bloom Cuff</h3>
                        <div class="priceTags">
                            <h4>Opaline Treasures</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slidIcon next" id="rightIcon"><i class="fa-solid fa-angle-right"></i></div>
    </div>
</div>
<style>
    #leftIcon.swiper-button-disabled,
    #rightIcon.swiper-button-disabled {
        opacity: 0.5 !important;
        pointer-events: none !important;
        display: block !important;
    }

    .cardTwo_image {
        position: relative;
    }

    .cardTwo_image::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(95, 17, 7, 0.29);
        width: 259px;
        height: 301px;
        z-index: 3;

        border-radius: 10px;

        transition: opacity 0.4s ease, transform 0.4s ease;
        transform: scale(1)
    }


    .cardTwo_image:hover::after {
        opacity: 0;
        transform: scale(1.1);
    }

    .cardFour_section .slidIcon {
        padding-left: 1rem;

    }

    .cardFour_section .slidIcon {
        padding-right: 2rem;
    }

    .swiper {
        /* width: 100%; */
        height: 100%;
    }

    .cardDesc {
        display: grid;
        align-items: start;
        justify-content: start;
        width: 100%;

        padding-bottom: 20px;

        padding-left: 3rem;
    }

    .cardTwo {
        cursor: pointer;
    }

    .mySwiperTwo .swiper-wrapper {

        width: 100%;
        height: 100%;
        z-index: 1;
        display: flex;
        transition-property: transform;
        transition-timing-function: var(--swiper-wrapper-transition-timing-function, initial);
        box-sizing: content-box
    }

    .mySwiperTwo .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 30px;
        border-radius: 10px;
    }

    .mySwiperTwo .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 5px;
    }

    .mySwiperTwo .swiper-slide {

        flex-shrink: 0;
        width: 100%;
        height: 100%;
        position: relative
    }
</style>
<script>

</script>

<div class="genderDetails mobileHide">
    <div class="genderHeadings">
        <h1>Shop By Gender</h1>
        <p>First-class jewelry for first-class Men, Women & Children</p>
    </div>

    <div class="genderImages">
        <div class="imageGender_cover">
            <div class="imageGender newClass" id="male"><img src="/images/men.png" alt="men"></div>
        </div>
        <div class="imageGender_cover">
            <div class="imageGender" id="male"><img src="/images/women.png" alt="men"></div>
        </div>
        <div class="imageGender_cover">
            <div class="imageGender" id="male"><img src="/images/kids.png" alt="men"></div>
        </div>
    </div>
    <div class="bottomScroll_section active" id="maleDetails">
        <div class="menSection">

            <div class="genderPhoto">

                <img src="/images/men.webp" alt="men">

                <div class="genderText">
                    <h1>"Bold looks start with bold pieces"</h1>
                    <a href="/allJewelry"><button>See more</button></a>
                </div>

            </div>
            <div class="iconPosition swiper mySwiperThree">
                <div class="swiper-wrapper">
                    <div class="swiper-slide genderOne ">
                        <div class="genderScroll">
                            <img src="/images/men1.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/men2.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Luna Halo Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/men3.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Whispering Petals Band</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/men3.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Sunbeam Link Chain</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/men5.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Golden Aura Band</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/men4.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Rose Gold Glint Studs</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide genderOne ">
                        <div class="genderScroll">
                            <img src="/images/menLast.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Lily Pearl Dangles</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div> -->
                </div>
                <div class="scroll_icon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>
            </div>

        </div>
    </div>
    <div class="bottomScroll_section women">
        <div class="menSection">

            <div class="genderPhoto">
                <img src="/images/Woman.webp" alt="men">
                <div class="genderText">
                    <h1>"Grace is her power. Confidence is her crown"</h1>
                    <a href="/allJewelry"><button>See more</button></a>
                </div>
            </div>
            <div class="iconPosition swiper mySwiperThree">
                <div class="swiper-wrapper">
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/women1.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Celestial Drops</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/women2.jpg" alt=" card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Twilight Mirage</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/women3.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Eclipse Tear Earrings</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/women4.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Opal Mirage Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/women5.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Crimson Silk Chain</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                </div>
                <div class="scroll_icon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>
            </div>
            <style>
                .mySwiperThree .swiper-wrapper {

                    width: 100%;
                    height: 100%;
                    z-index: 1;
                    display: flex;
                    transition-property: transform;
                    transition-timing-function: var(--swiper-wrapper-transition-timing-function, initial);
                    box-sizing: content-box;

                    gap: 20px;

                    width: 700px;
                }

                /* .mySwiperThree .swiper-slide {

                    flex-shrink: 0;
                    width: 100%;
                    height: 100%;
                    position: relative
                } */

                .mySwiperThree .swiper-slide {
                    text-align: center;
                    font-size: 18px;
                    background: #fff;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    gap: 30px;
                    border-radius: 10px;
                }

                .mySwiperThree .swiper-slide {

                    flex-shrink: 0;
                    width: 100%;
                    height: 100%;
                    position: relative
                }

                .mySwiperThree .swiper-slide img {
                    display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-radius: 5px;
                }

                .swiper-slide.genderOne {
                    gap: 0;
                    cursor: pointer;
                }
            </style>


        </div>
    </div>
    <div class="bottomScroll_section kid">
        <div class="menSection">

            <div class="genderPhoto">
                <img src="/images/kid.jpg" alt="men">
                <div class="genderText">
                    <h1>"Born to sparkle"</h1>
                    <a href="/allJewelry"><button>See more</button></a>
                </div>
            </div>
            <div class="iconPosition swiper mySwiperThree">
                <div class="swiper-wrapper">
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/kid1.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Velvet Ember Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/kid2.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Crimson Silk Chain</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/kid3.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Golusu</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/kid4.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Golden Dune</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide genderOne">
                        <div class="genderScroll">
                            <img src="/images/gender/kid5.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>SMystic Thread</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                </div>

                <div class="scroll_icon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>

            </div>

        </div>
    </div>
</div>




<div id="merchant" class="bottomBanner ">

    <div class="headingThree border-hover-box">
        <h1>Build something that’s yours</h1>

    </div>
    <div class="bannerBottom">
        <div class="bottomImage">
            <img src="/images/sellbg3.png" alt="banner bottom">

            <div class="bottomImageText">
                <h1>Start <span style="background-color: #fff;"> your dream, right here </span>
                    Click to launch your store today</h1>
                <a href="/packages"><button>Explore more</button></a>
            </div>

        </div>

    </div>
</div>






<div class="newLaunch" id="goLaunch">
    <div class="genderHeadings">
        <h1>
            Jewellery Guides
        </h1>
        <p>Check out our ready made guides to make your buying process easier</p>
    </div>

    <div class="launchBanner">
        <div class="launchImage"><img src="/images/banner.jpg" alt="Launched_Banner"></div>

        <div class="launchedDetails">
            <div class="launchedHeadings">
                <h4>NEW LAUNCHED ! !</h4>
                <h1>From Screen to Store</h1>
                <p> We’re now in your neighborhood! Discover our <br> exclusive in-store collection</p>
            </div>
            <div class="timingSection">
                <div class="remaining">
                    <h2>Day’s</h2>
                    <div class="day">00</div>
                </div>
                <div class="remaining">
                    <h2>Hours</h2>
                    <div class="Hour">00</div>
                </div>
                <div class="remaining">
                    <h2>Min</h2>
                    <div class="Min">00</div>
                </div>
                <div class="remaining">
                    <h2>Sec</h2>
                    <div class="sec">00</div>
                </div>
            </div>

            <div class="launchedBtn"><button>EXPLORE NOW</button></div>
        </div>
    </div>
</div>


<div class="modalOverlay">
    <div class="launchModal ">
        <h1>Grand Open! You’re Invited</h1>
        <p>Be part of our milestone moment and shop our debut physical collection</p>
        <div class="launchImageTwo">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
        </div>



        <button class="closeModal">Close</button>
    </div>
</div>
<style>
    .launchImageTwo {
        width: 70%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .closeModal {
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


    iframe {
        border: none;
        border-radius: 10px;
    }


    .launchModal {
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


    .mobileRes {
        display: none;
    }

    .modalOverlay {
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

    .modalActive {
        opacity: 1;
        visibility: visible;
    }

    .modalActive .launchModal {
        transform: scale(1);
    }
</style>







<script>
    const lanchModal = document.querySelector('.launchedBtn');
    const modalOverlay = document.querySelector('.modalOverlay');
    lanchModal.addEventListener('click', () => {
        console.log("its click");

        modalOverlay.classList.add('modalActive');


    })

    const closeModal = document.querySelector('.closeModal');
    closeModal.addEventListener('click', () => {
        modalOverlay.classList.remove('modalActive');
    })
</script>












<div class="accord">
    <div class="genderHeadings">
        <h1>Here You can Find The Answers</h1>
    </div>

    <div class="faqs">
        <div class="accordionContent">
            <div class="head">
                <span class="title">What kind of jewelry do you have?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis" style="height: 0px;">You’ll find gold, silver, diamond, and gemstone jewelry here including rings, necklaces, earrings, bangles, chains, and more</p>

        </div>
        <div class="accordionContent">
            <div class="head">
                <span class="title">Can I trust the quality of your jewelry?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis">Yes. All gold jewelry is BIS hallmarked, and diamonds come with certifications like IGI or GIA. You’ll always get genuine, certified products</p>

        </div>
        <div class="accordionContent">
            <div class="head">
                <span class="title">Can I pay in installments?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis">Yes, they offer EMI options and flexible payment plans through partnered banks or finance services.</p>

        </div>
        <div class="accordionContent">
            <div class="head">
                <span class="title">How do I register as a seller/merchant on the app?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis">You can register as a seller directly through the app by submitting a valid ID, bank details, and product photos for verification.
                <a href="#merchant" id="startLink">Start</a>

            </p>

        </div>
        <div class="accordionContent">
            <div class="head">
                <span class="title"> What payment methods do you accept?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis">We accept credit/debit cards, net banking, UPI, and cash on delivery (COD) in selected areas.</p>

        </div>
        <div class="accordionContent">
            <div class="head">
                <span class="title"> Can I visit your physical store?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis">Absolutely! You can visit our store at Thevaram, Theni After we opening owr shop.
                <a href="#goLaunch" id="goLaunchBtn">Learn More</a>

            </p>

        </div>
    </div>
</div>

<style>
    @media (min-width: 576px) and (max-width: 991.98px) {


        .genderText {

            padding: 10px 20px;
        }



        .bannerText h1,
        .bannerText1 h1,
        .bannerText3 h1,
        .bannerText4 h1 {
            font-family: "WindSong", cursive;
            font-size: 30px;
            color: #ffff;
            font-weight: 200;
        }

        .heroBanner {
            display: flex;
            flex-direction: column;
            width: 100%;
            min-height: 0;
            position: relative;
            top: 0px;
        }

        .cardSection {
            margin-top: 0;
            display: grid;
            gap: 20px;
            z-index: 0;
        }

        .card .cardImage {
            width: 221px;
            height: 275px;
        }

        .setTwo {
            width: 24%;
        }

        .logoImage {
            width: 9%;
        }

        .searchNav {
            width: 150px;
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

        .bannerImg {
            width: 60%;
        }

        .bannerImage {
            min-height: 100%;
        }

        .frontBackIcon {
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: #fff;
            width: 100%;
            height: inherit;
            gap: 600px;
        }

        .navBar {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            gap: 0px;
            padding-top: 15px;
            position: absolute;
            z-index: 100;
        }

        .services {
            display: flex;
            width: 70%;
            justify-content: space-evenly;
            gap: 0px;
        }

        .services h3 {
            font-size: 16px;
        }

        .iconsRL {
            position: absolute;
            width: 100%;
            height: 0px;
        }


        .bannerText h3,
        .bannerText1 h3,
        .bannerText2 h3,
        .bannerText3 h3,
        .bannerText4 h3 {
            font-size: 34px;
            color: #ffff;
            text-align: center;
            line-height: 115%;
        }

        .bannerText {
            width: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0rem;
            margin-top: 0rem;
        }

        .bannerText .text,
        .bannerText1 .text,
        .bannerText2 .text,
        .bannerText4 .text {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .bannerText button,
        .bannerText1 button,
        .bannerText2 button,
        .bannerText3 button,
        .bannerText4 button {
            width: 141px;
            height: 33px;
            background-color: transparent;
            color: #FFF;
            font-size: 19px;
            border: 2px solid #fff;
            border-radius: 5px;
        }

        .bannerText1 {
            width: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 0rem;
            margin-top: 0rem;
        }

        .hideOne {
            display: none !important;
        }

        .cardsTwo_details {
            display: grid;
            grid-template-columns: auto auto auto;
            align-items: center;
            justify-content: center;
            gap: 26px;
        }

        .buyingCards .cards {
            width: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            gap: 22px;
        }

        .menSection {
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .genderPhoto {
            width: 80%;
            border-radius: 10px;
            box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.75);
            display: flex;
            position: relative;
            z-index: 8;
            left: 2rem;
            background-color: white;
            display: flex;
            align-items: end;
            justify-content: center;
        }

        .genderScroll {
            width: auto;
            height: auto;
        }


        .mySwiperThree .swiper-wrapper {
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            transition-timing-function: var(--swiper-wrapper-transition-timing-function, initial);
            box-sizing: content-box;
            gap: 20px;
            width: 700px;
            align-items: center;
        }

        .launchImage {
            width: 75%;
            height: auto;
        }

        .timingSection {
            display: grid;
            grid-template-columns: auto auto auto auto;
            align-items: center;
            justify-content: space-around;
            width: 100%;
        }

        .launchedDetails {
            width: 45%;
            gap: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }


        .launchImage {
            width: 50%;
            height: auto;
        }

        .launchBanner {
            display: flex;

            align-items: center;
            gap: 0px;
            width: 100%;
            justify-content: space-evenly;
        }

        .footerDetails {
            width: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        .footerText p {
            font-size: 20px;
            color: aliceblue;
        }

        .scroll_icon {
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-around;
            z-index: 100;
            bottom: 9rem;
        }
    }


    .highlight {
        transition: background-color 0.3s ease;

    }




    @media only screen and (max-width: 480px) {


        .deskTopSize {
            display: none;
        }

        .mobileRes {
            display: flex;
        }

        .frontBackIcon {
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: #fff;
            width: 100%;
            height: inherit;
            gap: 60%;
        }

        .iconsRL {
            position: absolute;
            width: 100%;
            height: auto;
        }

        .bannerText {
            width: 100%;
            position: absolute;
            display: flex;
            align-items: end;
            justify-content: end;
            margin-right: 0;
            margin-top: auto;
        }

        .bannerText h1,
        .bannerText1 h1,
        .bannerText3 h1,
        .bannerText4 h1 {
            font-family: "WindSong", cursive;
            font-size: 34px;
            color: #ffff;
            font-weight: 200;
        }

        .bannerText {
            width: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0;
            margin-top: auto;
        }

        .bannerText h3,
        .bannerText1 h3,
        .bannerText2 h3,
        .bannerText3 h3,
        .bannerText4 h3 {
            font-size: 54px;
            color: #ffff;
            text-align: center;
            line-height: 115%;
        }

        .bannerText button,
        .bannerText1 button,
        .bannerText2 button,
        .bannerText3 button,
        .bannerText4 button {
            width: 143px;
            height: 39px;
            background-color: transparent;
            color: #FFF;
            font-size: 19px;
            border: 2px solid #fff;
            border-radius: 5px;
        }

        .services .serviceList h3 {
            line-height: 100%;
            text-align: center;
        }

        .services .serviceList {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;

            flex-direction: column;
        }


        .services h3 {
            font-size: 15px;
        }

        .services {
            display: flex;
            width: 22%;
            height: auto;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.75);
            gap: 38px;
            background-color: #ffffff;

            flex-direction: column;
            padding: 20px;

            border-radius: 10px;
        }


        .ourServices {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            bottom: 85px;
            z-index: 1;
            margin-top: 50px;
        }

        .cardSection {
            margin-top: auto;
            display: grid;
            gap: 55px;
            z-index: 0;
        }

        .cardSection .heading h1 {
            font-size: 28px;
            padding-left: 40px;
            color: #5F1107;
            font-weight: normal;
            text-align: start;
        }

        .buyingCards .cards {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            gap: 32px;
            flex-direction: column;
        }

        .card .cardImage {
            width: 227px;
            height: auto;
        }

        .heading {
            text-align: center;
            width: 100%;
            align-items: center;
            display: contents;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }


        .mobileHide {
            display: none;
        }

        .cardsTwo_details {
            display: grid;
            grid-template-columns: auto;
            align-items: center;
            justify-content: center;
            gap: 40px;
        }

        .cardSection_two {
            margin-top: auto;
            display: grid;
            gap: 70px;
        }

        .sectionTwo_heading {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cardSection_two .sectionTwo_heading h1 {
            font-size: 33px;

            color: #5F1107;
            font-weight: normal;
            padding-left: 0px;
        }

        .cardSection_two {
            margin-top: auto;
            display: grid;
            gap: 35px;
        }

        .headingThree h1 {
            font-size: 24px;
            color: #5F1107;
            font-weight: normal;
            text-align: start;
        }

        .bottomBanner {
            margin-top: 40px;
            display: flex;
            gap: 35px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .border-hover-box {
            position: relative;
            padding: 11px;
            color: #000;
            border: 2px solid transparent;
            transition: all 0.4s ease;
            line-height: 30px;
        }

        .bottomImage img {
            border-radius: 5px;


        }

        .bottomImageText h1 {
            font-size: 16px;
            color: #5F1107;
            font-weight: 200;
        }

        .launchBanner {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .launchImage {
            width: 85%;
            height: auto;
        }


        .launchedHeadings h4 {
            font-size: 33px;
            font-weight: normal;
            color: #5F1107;
        }

        .launchedHeadings h1 {
            font-size: 24px;
        }

        .genderHeadings {

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-left: 0px;
        }

        .genderHeadings p {
            text-align: center;
        }

        .newLaunch {
            margin-top: 100px;
            display: grid;
            gap: 40px;
        }

        .genderHeadings h1 {
            font-size: 35px;
            color: #5F1107;
            font-weight: normal;
            text-align: center;

        }

        .faqs {
            margin-left: 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }


        .bannerText1 {
            width: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: start;
            margin-left: 0;
            margin-top: 0;
        }


        .bannerText2 {
            width: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: start;
            margin-left: 0;
            margin-top: 0;
            padding: 5px;
        }


    }
</style>

<script>
    document.getElementById('startLink').addEventListener('click', function(e) {
        e.preventDefault();

        const target = document.getElementById('merchant');


        target.scrollIntoView({
            behavior: 'smooth'
        });


        target.classList.add('highlight');

        setTimeout(() => {
            target.classList.remove('highlight');
        }, 2000);
    });


    document.getElementById('goLaunchBtn').addEventListener('click', function(e) {
        e.preventDefault();

        const target = document.getElementById('goLaunch');


        target.scrollIntoView({
            behavior: 'smooth'
        });


        target.classList.add('highlight');

        setTimeout(() => {
            target.classList.remove('highlight');
        }, 2000);
    });
</script>















@endsection
