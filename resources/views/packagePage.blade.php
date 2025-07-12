@extends('layouts.master')
@section('center')


<div class="packages">





    <div class="packageSection">
        <div class="packagePlans">
            <h1>Launch your jewellery business with a platform that grows with you</h1>
            <p>
                "Whether you're a designer, a maker, or a dreamer, our platform helps you turn your passion for jewellery into a thriving online business. Easy to set up, beautiful to showcase, and built to grow your store starts here."
            </p>
        </div>
        <div class="userPlans">
            <div class="packPlans">
                <h1>Platinum Plan</h1>
                <h3>Perfect for beginners launching their first store</h3>
                <div class="plans">
                    <ol>
                        <li>&bull; Add to Cart functionality</li>
                        <li>&bull; Simple product listing and checkout</li>
                        <li>&bull; No blog support features</li>

                    </ol>
                </div>
                <h4>$1999/-</h4>
                <div class="packageBtn">
                    <a href="{{ route('package.buy', ['planId' => 1,'package'=>"Platinum"]) }}">
                        <button class="dashPage">Buy</button>
                    </a>
                </div>
            </div>
            <div class="packPlans">
                <h1>Gold Plan</h1>
                <h3>For growing businesses with more custom needs</h3>
                <div class="plans">
                    <ol>
                        <li>&bull; Add to Cart functionality </li>
                        <li>&bull; Add Blogs to share updates</li>

                        <li>&bull; Priority Support</l1>
                    </ol>
                </div>
                <h4>$3999/-</h4>
                <div class="packageBtn">
                    <a href="{{ route('package.buy', ['planId' => 2,'package'=>"Gold"]) }}">
                        <button class="dashPage">Buy</button>
                    </a>


                </div>
            </div>
            <div class="packPlans">
                <h1>Diamond Plan</h1>
                <h3>Best for serious sellers ready to scale fast</h3>
                <div class="plans">
                    <ol>
                        <li>&bull; Add to Cart functionality</li>
                        <li>&bull; Add Blogs for better SEO and customer connection</li>
                        <li>&bull; Technical assistance</li>

                    </ol>
                </div>
                <h4>$7999/-</h4>
                <div class="packageBtn">

                    <a href="{{ route('package.buy', ['planId' => 3,'package'=>"Diamond"]) }}">
                        <button class="dashPage">Buy</button>
                    </a>


                </div>
            </div>
        </div>
    </div>








    <script type="module">
        import {
            animate,
            hover
        } from "https://cdn.jsdelivr.net/npm/motion@12.7.5/+esm"

        hover(".packPlans", (element) => {
            animate(element, {
                scale: 1.1
            })

            return () => animate(element, {
                scale: 1
            })
        })
    </script>




</div>



<style>
    .packagePlans {
        position: relative;
        padding: 20px;

        border: 2px solid transparent;
        transition: all 0.4s ease;
        text-align: center;
    }

    .packagePlans::after {
        content: "";
        position: absolute;
        inset: 0;
        border-bottom: 2px solid #5F1107;
        transform: scaleX(0);
        transform-origin: center;
        transition: transform 0.4s ease;

    }

    .packagePlans:hover::after {
        transform: scaleX(1);
    }







    .packagePlans h1 {
        font-size: 25px;
        color: #242424;
    }

    .packagePlans {
        width: 70%;
    }


    .packageSection {
        display: flex;
        flex-direction: column;
        width: 100%;
        min-height: 80vh;
        align-items: center;
        justify-content: center;
        gap: 50px;
        margin: 30px 0px 80px;
    }


    .packPlans h4 {
        font-size: 30px;
        color: #242424;
    }

    .userPlans {
        display: flex;
        width: 100%;
        align-items: self-start;
        justify-content: space-around;
    }



    .packPlans {
        width: 325px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.19);
    }

    .plans li {
        font-size: 14px;

    }






    .packPlans h3 {
        font-size: 14px;
        color: #242424;
    }

    .packageBtn button {
        color: rgb(255, 255, 255);
        background-color: #5F1107;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        font-size: 15px;
        font-weight: 600;

        border: none;
        width: 120px;
        border-radius: 0.5rem;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        text-decoration: none;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
    }




    .footerText p {
        font-size: 18px;
        color: aliceblue;
    }

    .linkImage {
        width: 170px;
    }

    .navBar {
        padding: 15px 0px 8px 0px;
        background-color: #242424;
        position: static !important;
    }

    .footerDetails {

        padding: 10px !important;
    }


    .footerContents {

        min-height: 5vh !important;
    }

    .copyRightText {

        padding: 2px !important;
    }

    .footerContents {

        background-color: #242424 !important;


    }



    .packages {
        width: 100%;

    }


    @media (min-width: 576px) and (max-width: 991.98px) {
        .footerDetails {
            width: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        .footerText p {
            font-size: 23px;
            color: aliceblue;
        }

        .packPlans {
            width: 234px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.19);
        }

        .packPlans {
            width: 234px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.19);
            height: 280px;
        }
    }




    @media only screen and (max-width: 480px) {

        .navBarMobile {
            padding-top: 7px;
            padding-bottom: 5px;
            background-color: #242424;
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



        .userPlans {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
            gap: 20px;
        }

        .packPlans {
            width: 185px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.19);
        }

        .packagePlans h1 {
            font-size: 20px;
            color: #242424;
        }

        .packagePlans p {
            font-size: 15px;
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
    }
</style>

@endsection
