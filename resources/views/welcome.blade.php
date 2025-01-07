@extends('layouts/master')
@section('center')

<div class="swiper mySwiper heroBanner">

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
    <div class="swiper-wrapper  ">

        <div class="swiper-slide bannerImage">
            <img src="/images/heroBanner/bannerOne.png" alt="bannerImage">
            <div class="bannerText">
                <div class="text">
                    <h1>glam Days</h1>
                    <h3>Wide variety of daily
                        <br>wear jewelry
                    </h3>
                    <button type="button">Learn More</button>
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
            <img src="/images/heroBanner/bannerTwo.png" alt="bannerImage">
            <div class="bannerText">
                <div class="text">
                    <h1>glam Days</h1>
                    <h3>Wide variety of daily
                        <br>wear jewelry
                    </h3>
                    <button type="button">Learn More</button>
                </div>
            </div>
            <div class="iconsRL">
                <div class="frontBackIcon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>


        <!-- <style>
            .text :nth-child(3) {
                background-color: black;
            }
        </style> -->



        <div class="swiper-slide bannerImage">
            <img src="/images/heroBanner/bannerThree.png" alt="bannerImage">
            <div class="bannerText">
                <div class="text">
                    <h1>glam Days</h1>
                    <h3>Wide variety of daily
                        <br>wear jewelry
                    </h3>
                    <button type="button">Learn More</button>
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
            <img src="/images/heroBanner/bannerFour.png" alt="bannerImage">
            <div class="bannerText">
                <div class="text">
                    <h1>glam Days</h1>
                    <h3>Wide variety of daily
                        <br>wear jewelry
                    </h3>
                    <button type="button">Learn More</button>
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
            <img src="/images/heroBanner/bannerFive.png" alt="bannerImage">
            <div class="bannerText">
                <div class="text">
                    <h1>glam Days</h1>
                    <h3>Wide variety of daily
                        <br>wear jewelry
                    </h3>
                    <button type="button">Learn More</button>
                </div>
            </div>
            <div class="iconsRL">
                <div class="frontBackIcon">
                    <i class="prev fa-solid fa-angle-left"></i>
                    <i class="next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="paginationIcon">
        <div class="swiper-pagination "></div>
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

<div class="cardSection">

    <div class="heading">
        <h1>Shop By <span style="font-weight:bolder;">Collection</span>
        </h1>
    </div>


    <div class="buyingCards">
        <div class="cards">
            <div class="card">
                <div class="cardImage"><img src="/images/card1.png" alt="cardImage"></div>
                <div class="brandTitle">
                    <h1>Necklace</h1>
                </div>
            </div>
            <div class="card">
                <div class="cardImage"><img src="/images/card2.png" alt="cardImage"></div>
                <div class="brandTitle">
                    <h1>Necklace</h1>
                </div>
            </div>
            <div class="card">
                <div class="cardImage"><img src="/images/card3.png" alt="cardImage"></div>
                <div class="brandTitle">
                    <h1>Necklace</h1>
                </div>
            </div>
            <div class="card">
                <div class="cardImage"><img src="/images/card4.png" alt="cardImage"></div>
                <div class="brandTitle">
                    <h1>Necklace</h1>
                </div>
            </div>
            <div class="card">
                <div class="cardImage"><img src="/images/card5.png" alt="cardImage1"></div>
                <div class="brandTitle">
                    <h1>Necklace</h1>
                </div>
            </div>
            <div class="card">
                <div class="cardImage"><img src="/images/card6.png" alt="cardImage"></div>
                <div class="brandTitle">
                    <h1>Necklace</h1>
                </div>
            </div>
            <div class="card">
                <div class="cardImage"><img src="/images/card7.png" alt="cardImage"></div>
                <div class="brandTitle">
                    <h1>Necklace</h1>
                </div>
            </div>
            <div class="card">
                <div class="cardImage"><img src="/images/card8.png" alt="cardImage"></div>
                <div class="brandTitle">
                    <h1>Necklace</h1>
                </div>
            </div>


        </div>
        <div class="cardIcon">
            <i class="fa-solid fa-angle-left"></i>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </div>


</div>


<div class="cardSection_two">
    <div class="sectionTwo_heading">
        <h1>Our <span style="font-weight:bolder;">Categories</span></h1>
    </div>
    <div class="cardsTwo_details">
        <div class="cardTwo">
            <div class="cardTwo_image"><img src="/images/card1.png" alt="card1"></div>
            <p>let your gold earnings shines
                as bright as your reputation</p>
            <h1>GOLD NECKLACE</h1>
        </div>
        <div class="cardTwo">
            <div class="cardTwo_image"><img src="/images/card3.png" alt="card1"></div>
            <p>let your gold earnings shines
                as bright as your reputation</p>
            <h1>GOLD NECKLACE</h1>
        </div>
        <div class="cardTwo">
            <div class="cardTwo_image"><img src="/images/card5.png" alt="card1"></div>
            <p>let your gold earnings shines
                as bright as your reputation</p>
            <h1>GOLD NECKLACE</h1>
        </div>
        <div class="cardTwo">
            <div class="cardTwo_image"><img src="/images/card4.png" alt="card1"></div>
            <p>let your gold earnings shines
                as bright as your reputation</p>
            <h1>GOLD NECKLACE</h1>
        </div>
        <div class="cardTwo">
            <div class="cardTwo_image"><img src="/images/card7.png" alt="card1"></div>
            <p>let your gold earnings shines
                as bright as your reputation</p>
            <h1>GOLD NECKLACE</h1>
        </div>
        <div class="cardTwo">
            <div class="cardTwo_image"><img src="/images/card6.png" alt="card1"></div>
            <p>let your gold earnings shines
                as bright as your reputation</p>
            <h1>GOLD NECKLACE</h1>
        </div>
        <div class="cardTwo">
            <div class="cardTwo_image"><img src="/images/card8.png" alt="card1"></div>
            <p>let your gold earnings shines
                as bright as your reputation</p>
            <h1>GOLD NECKLACE</h1>
        </div>
        <div class="cardTwo">
            <div class="cardTwo_image"><img src="/images/card2.png" alt="card1"></div>
            <p>let your gold earnings shines
                as bright as your reputation</p>
            <h1>GOLD NECKLACE</h1>
        </div>
    </div>
</div>
<div class="bottomBanner">

    <div class="headingThree">
        <h1>Pick Up Where You Left Off!</h1>
        <p>Our products tend to sell out quickly, so don't delay in completing your purchase.</p>
    </div>
    <div class="bannerBottom">
        <div class="bottomImage">
            <img src="/images/bannerBottom.png" alt="banner bottom">
        </div>
        <a href=""><button>Explore more</button></a>
    </div>
</div>
<div class="sectionFour">
    <div class="headFour">
        <h1>Top Sellers</h1>
        <p>Love the most to bought the most</p>
    </div>
    <div class="cardFour_section ">
        <div class="slidIcon" id="leftIcon"><i class="prev fa-solid fa-angle-left"></i></div>

        <div class="swiper cardFour mySwiperTwo">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/images/card2.png" alt="card_one">
                    <div class="cardDesc">
                        <h3>Soft Flower Diamond Ring</h3>
                        <div class="priceTags">
                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h4>
                            <del>
                                <h5><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h5>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/images/card2.png" alt="card_one">
                    <div class="cardDesc">
                        <h3>Soft Flower Diamond Ring</h3>
                        <div class="priceTags">
                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h4>
                            <del>
                                <h5><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h5>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/images/card2.png" alt="card_one">
                    <div class="cardDesc">
                        <h3>Soft Flower Diamond Ring</h3>
                        <div class="priceTags">
                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h4>
                            <del>
                                <h5><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h5>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/images/card2.png" alt="card_one">
                    <div class="cardDesc">
                        <h3>Soft Flower Diamond Ring</h3>
                        <div class="priceTags">
                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h4>
                            <del>
                                <h5><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h5>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/images/card2.png" alt="card_one">
                    <div class="cardDesc">
                        <h3>Soft Flower Diamond Ring</h3>
                        <div class="priceTags">
                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h4>
                            <del>
                                <h5><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h5>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/images/card2.png" alt="card_one">
                    <div class="cardDesc">
                        <h3>Soft Flower Diamond Ring</h3>
                        <div class="priceTags">
                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h4>
                            <del>
                                <h5><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h5>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/images/card2.png" alt="card_one">
                    <div class="cardDesc">
                        <h3>Soft Flower Diamond Ring</h3>
                        <div class="priceTags">
                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h4>
                            <del>
                                <h5><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h5>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/images/card2.png" alt="card_one">
                    <div class="cardDesc">
                        <h3>Soft Flower Diamond Ring</h3>
                        <div class="priceTags">
                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h4>
                            <del>
                                <h5><i class="fa-solid fa-indian-rupee-sign"></i> 53500</h5>
                            </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slidIcon nxt" id="rightIcon"><i class="next  fa-solid fa-angle-right"></i></div>
    </div>
</div>
<style>
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

<div class="genderDetails">
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
            </div>
            <div class="iconPosition swiper mySwiperThree">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="genderScroll">
                            <img src="/images/men1.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/men2.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/men2.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/men1.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/men1.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/men1.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/men1.webp" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
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
    <div class="bottomScroll_section women">
        <div class="menSection">

            <div class="genderPhoto">
                <img src="/images/Woman.webp" alt="men">
            </div>
            <div class="iconPosition swiper mySwiperThree">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/women1.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/women2.jpg" alt=" card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/women3.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/women4.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/women5.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
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
            </style>


        </div>
    </div>
    <div class="bottomScroll_section kid">
        <div class="menSection">

            <div class="genderPhoto">
                <img src="/images/kid.jpg" alt="men">
            </div>
            <div class="iconPosition swiper mySwiperThree">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/kid1.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/kid2.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/kid3.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/kid4.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
                            <h1><i class="fa-solid fa-indian-rupee-sign"></i> 83500</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="genderScroll">
                            <img src="/images/gender/kid5.jpg" alt="card5">
                        </div>
                        <div class="genderScroll_details">
                            <h5>Stylish Cluster Ring</h5>
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




<div class="newLaunch">
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
                <h1>Wedding Jewellery</h1>
                <p>Stunning Wedding Jewellery Crafted to Celebrate The Glory <br> Of Every Indian bride</p>
            </div>
            <div class="timingSection">
                <div class="remaining">
                    <h2>Day’s</h2>
                    <div>00</div>
                </div>
                <div class="remaining">
                    <h2>Hours</h2>
                    <div>00</div>
                </div>
                <div class="remaining">
                    <h2>Min</h2>
                    <div>00</div>
                </div>
                <div class="remaining">
                    <h2>Sec</h2>
                    <div>00</div>
                </div>
            </div>

            <div class="launchedBtn"><button>EXPLORE NOW</button></div>
        </div>
    </div>
</div>

<div class="accord">
    <div class="genderHeadings">
        <h1>Here You can Find The Answers</h1>
    </div>

    <div class="faqs">
        <div class="accordionContent">
            <div class="head">
                <span class="title">What is accordion?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis" style="height: 0px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, animi!
                Voluptatum.Doloribus beatae assumenda necessitatibus aspernatur! Architecto eaque ut
                perspiciatis sed dolor vel illum eligendi. Doloribus beatae assumenda necessitatibus aspernatur!
                Architecto eaque ut perspiciatis sed.</p>

        </div>
        <div class="accordionContent">
            <div class="head">
                <span class="title">What is accordion?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, animi!
                Voluptatum.Doloribus beatae assumenda necessitatibus aspernatur! Architecto eaque ut
                perspiciatis sed dolor vel illum eligendi. Doloribus beatae assumenda necessitatibus aspernatur!
                Architecto eaque ut perspiciatis sed.</p>

        </div>
        <div class="accordionContent">
            <div class="head">
                <span class="title">What Lorem ipsum dolor sit rdion?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, animi!
                Voluptatum.Doloribus beatae assumenda necessitatibus aspernatur! Architecto eaque ut
                perspiciatis sed dolor vel illum eligendi. Doloribus beatae assumenda necessitatibus aspernatur!
                Architecto eaque ut perspiciatis sed.</p>

        </div>
        <div class="accordionContent">
            <div class="head">
                <span class="title">What Lorem ipsum dolor sit is accordion?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, animi!
                Voluptatum.Doloribus beatae assumenda necessitatibus aspernatur! Architecto eaque ut
                perspiciatis sed dolor vel illum eligendi. Doloribus beatae assumenda necessitatibus aspernatur!
                Architecto eaque ut perspiciatis sed.</p>

        </div>
        <div class="accordionContent">
            <div class="head">
                <span class="title">What is accordion?</span>
                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="dis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, animi!
                Voluptatum.Doloribus beatae assumenda necessitatibus aspernatur! Architecto eaque ut
                perspiciatis sed dolor vel illum eligendi. Doloribus beatae assumenda necessitatibus aspernatur!
                Architecto eaque ut perspiciatis sed.</p>

        </div>
    </div>
</div>



<script>

</script>















@endsection