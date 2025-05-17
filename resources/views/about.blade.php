@extends('layouts/master')
@section('center')

<div class="aboutOneSectionOne">
    <div class="aboutHead">
        <h1>About us!</h1>
    </div>
    <div class="aboutOneSection">
        <div class="aboutOneText">
            <h1>Selling online made easy ?</h1>
            <p>Inspired by South Indian temple art, this antique gold-finished jewelry set brings tradition and elegance together. Ideal for weddings, classical performances, and festive occasions.Inspired by South Indian temple art, this antique gold-finished jewelry set brings tradition and elegance together. Ideal for weddings, classical performances, and festive occasions.</p>
        </div>
        <div class="aboutOne">
            <img src="/images/aboutOne.jpg" alt="aboutOneImage">
        </div>
    </div>

</div>


<div class="aboutThreeText">
    <h1>Serving independent online
        brands for 10+ years</h1>
    <p>Your business is at the heart of what we do. We exist to serve D2C brands, MSMEs and startups. We want to make sure.</p>
</div>

<div class="aboutTwoSection">
    <div class="aboutTwo"><img src="/images/aboutTwo.jpg" alt="aboutTwoImage"></div>

    <div class="aboutTwoText">
        <h1>Why businesses love us?
            Because we care.</h1>
        <p>Small businesses and eCommerce startups have been at the core of our journey. While our product changed over time, our customers and audience have been at the core of our purpose. Social media sellers and D2C brands love us because:</p>
    </div>


</div>


<div class="aboutThreeText">
    <h1>Investors & Advisors</h1>
    <p>Advising us are some of the best angel investors and venture capitalists.
        We are easy to use. We are reliable. We are always there</p>
</div>


<div class="contactInfo">

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    <div class="aboutHead">
        <h1>GET IN TOUCH!</h1>
    </div>
    <div class="contact_us_green">
        <div class="responsive-container-block big-container">
            <div class="responsive-container-block container">
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 wk-ipadp-10 line" id="i69b-2">
                    <form class="form-box" method="POST" action="{{ route('contact.sendEnquiry') }}">
                        @csrf
                        <div class="container-block form-wrapper">
                            <div class="head-text-box">
                                <p class="text-blk contactus-head">Contact us</p>
                                <p class="text-blk contactus-subhead">Please describe your issue...</p>
                            </div>

                            <div class="responsive-container-block">
                                <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt-6">
                                    <p class="text-blk input-title">FIRST NAME</p>
                                    <input class="input" id="ijowk-6" name="name">
                                </div>

                                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                                    <p class="text-blk input-title">EMAIL</p>
                                    <input class="input" id="ipmgh-6" name="email" type="email">
                                </div>

                                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-6">
                                    <p class="text-blk input-title">WHAT DO YOU HAVE IN MIND</p>
                                    <textarea class="textinput" id="i5vyy-6" name="messageContent" placeholder="Please enter query..."></textarea>
                                </div>
                            </div>

                            <div class="btn-wrapper">
                                <button class="submit-btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-5 wk-ipadp-10" id="ifgi">
                    <div class="container-box">
                        <div class="text-content">
                            <p class="text-blk contactus-head">
                                Contact us
                            </p>
                            <p class="text-blk contactus-subhead">
                                Please describe your issue or request in detail. Include any relevant information such as order number, steps to reproduce a problem, or your suggestions
                            </p>
                        </div>
                        <div class="workik-contact-bigbox">
                            <div class="workik-contact-box">
                                <div class="phone text-box">
                                    <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET21.jpg">
                                    <a href="tel:8270241319" class="contact-text">
                                        +91 8270241319
                                    </a>
                                </div>
                                <div class="address text-box">
                                    <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET22.jpg">
                                    <a href="mailto:Alua@gmail.com" class="contact-text">
                                        Alua@gmail.com
                                    </a>
                                </div>
                                <div class="mail text-box">
                                    <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET23.jpg">
                                    <a href="javascript:void(0)" class="contact-text">
                                        102 street, y cross 485656
                                    </a>
                                </div>
                            </div>
                            <div class="social-media-links">
                                <a href="">
                                    <img class="social-svg" id="is9ym" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                                </a>
                                <a href="">
                                    <img class="social-svg" id="i706n" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                                </a>
                                <a href="">
                                    <img class="social-svg" id="ib9ve" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                                </a>
                                <a href="">
                                    <img class="social-svg" id="ie9fx" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .contact_us_green .responsive-container-block {
        min-height: 75px;
        height: fit-content;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        margin-top: 0px;
        margin-right: auto;
        margin-bottom: 60px;
        margin-left: auto;
    }

    .contactInfo {
        margin-top: 80px;
    }

    .contact_us_green input:focus {
        outline-color: initial;
        outline-style: none;
        outline-width: initial;
    }

    .contact_us_green textarea:focus {
        outline-color: initial;
        outline-style: none;
        outline-width: initial;
    }

    .contact_us_green .text-blk {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        line-height: 25px;
    }

    .contact_us_green .responsive-cell-block {
        min-height: 75px;
    }

    .contact_us_green .responsive-container-block.container {
        max-width: 1320px;
        margin-top: 60px;
        margin-right: auto;
        margin-bottom: 60px;
        margin-left: auto;
    }

    .contact_us_green .responsive-container-block.big-container {
        padding-top: 0px;
        padding-right: 50px;
        padding-bottom: 0px;
        padding-left: 50px;
    }

    .contact_us_green .text-blk.contactus-head {
        font-size: 40px;
        line-height: 50px;
        font-weight: 700;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 10px;
        margin-left: 0px;
        color: #5F1107;
    }

    .contact_us_green .text-blk.contactus-subhead {
        max-width: 385px;
        color: rgba(95, 17, 7, 0.63);
        font-size: 18px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 50px;
        margin-left: 0px;
    }

    .contact_us_green .contact-svg {
        padding-top: 0px;
        padding-right: 25px;
        padding-bottom: 0px;
        padding-left: 0px;
        width: 65px;
        height: 40px;
    }

    .contact_us_green .social-media-links {
        margin-top: 80px;
        margin-right: auto;
        margin-bottom: 0px;

        width: 250px;
        display: flex;
        justify-content: space-evenly;
    }

    .contact_us_green .social-svg {
        width: 35px;
        height: 35px;
    }

    .contact_us_green .text-box {
        display: flex;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 50px;
        margin-left: 0px;
        align-items: center;
    }

    .contact_us_green .contact-text {
        color: #5F1107;
    }

    .contact_us_green .input {

        border: solid 1px #5F1107;
        border-image-source: initial;
        border-image-slice: initial;
        border-image-width: initial;
        border-image-outset: initial;
        border-image-repeat: initial;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        font-size: 16px;
        padding-top: 5px;
        padding-right: 15px;
        padding-bottom: 5px;
        padding-left: 15px;
    }

    .contact_us_green .textinput {
        resize: none;
        height: 200px;
        width: 75%;
        border: solid 1px #5F1107;
        border-image-source: initial;
        border-image-slice: initial;
        border-image-width: initial;
        border-image-outset: initial;
        border-image-repeat: initial;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        font-size: 16px;
        padding-top: 20px;
        padding-right: 30px;
        padding-bottom: 20px;
        padding-left: 20px;
    }

    .contact_us_green .submit-btn {
        min-width: 290px;
        height: 60px;
        background-color: #5F1107;
        font-size: 18px;
        font-weight: 700;
        color: white;
        border: none;
        border-image-source: initial;
        border-image-slice: initial;
        border-image-width: initial;
        border-image-outset: initial;
        border-image-repeat: initial;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        margin-top: 0px;
        margin-right: auto;
        margin-bottom: 0px;
        margin-left: auto;
        cursor: pointer;
    }

    .contact_us_green .btn-wrapper {
        display: flex;
        justify-content: flex-start;

        width: fit-content;
    }

    .contact_us_green .text-blk.input-title {
        font-size: 18px;
        font-weight: 600;
        line-height: 28px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 15px;
        margin-left: 0px;
        color: #5F1107;
    }

    .contact_us_green .responsive-cell-block.wk-ipadp-6.wk-tab-12.wk-mobile-12.wk-desk-6 {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 30px;
        margin-left: 0px;
    }

    .contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-5.wk-ipadp-10 {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 60px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contact_us_green .head-text-box {
        display: none;
    }

    .contact_us_green .line {
        border-right-width: 1.8px;
        border-right-style: solid;
        border-right-color: #a2a2a2;
    }

    .contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-7.wk-ipadp-10.line {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    @media (max-width: 1024px) {
        .contact_us_green .responsive-container-block.container {
            justify-content: center;
        }

        .contact_us_green .text-blk.contactus-subhead {
            max-width: 90%;
        }

        .contact_us_green .head-text-box {
            display: block;
        }

        .contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-7.wk-ipadp-10.line {
            padding-top: 0px;
            padding-right: 20px;
            padding-bottom: 60px;
            padding-left: 0px;
        }

        .contact_us_green .line {
            border-right-width: initial;
            border-right-style: none;
            border-right-color: initial;
            border-bottom-width: 1.8px;
            border-bottom-style: solid;
            border-bottom-color: #a2a2a2;
        }

        .contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-5.wk-ipadp-10 {
            margin-top: 60px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }

        .contact_us_green .workik-contact-bigbox {
            display: flex;
        }

        .contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-5.wk-ipadp-10 {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }
    }

    @media (max-width: 768px) {
        .contact_us_green .text-content {
            display: none;
        }

        .contact_us_green .input {
            width: 100%;
        }

        .contact_us_green .textinput {
            width: 100%;
            resize: none;
        }

        .contact_us_green .text-blk.contactus-head {
            font-size: 30px;
        }
    }

    @media (max-width: 500px) {
        .contact_us_green .responsive-container-block.big-container {
            padding-top: 0px;
            padding-right: 20px;
            padding-bottom: 0px;
            padding-left: 20px;
        }

        .contact_us_green .workik-contact-bigbox {
            display: block;
        }

        .contact_us_green .text-blk.input-title {
            font-size: 16px;
        }

        .contact_us_green .text-blk.contactus-head {
            font-size: 26px;
        }

        .contact_us_green .text-blk.contactus-subhead {
            font-size: 16px;
            line-height: 23px;
        }

        .contact_us_green .input {
            height: 45px;
        }

        .contact_us_green .responsive-cell-block.wk-ipadp-6.wk-tab-12.wk-mobile-12.wk-desk-6 {
            margin: 0 0 25px 0;
        }
    }

    *,
    *:before,
    *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        margin: 0;
    }

    .wk-desk-1 {
        width: 8.333333%;
    }

    .wk-desk-2 {
        width: 16.666667%;
    }

    .wk-desk-3 {
        width: 25%;
    }

    .wk-desk-4 {
        width: 33.333333%;
    }

    .wk-desk-5 {
        width: 41.666667%;
    }

    .wk-desk-6 {
        width: 43%;
    }

    .wk-desk-7 {
        width: 58.333333%;
    }

    .wk-desk-8 {
        width: 66.666667%;
    }

    .wk-desk-9 {
        width: 75%;
    }

    .wk-desk-10 {
        width: 83.333333%;
    }

    .wk-desk-11 {
        width: 91.666667%;
    }

    .wk-desk-12 {
        width: 100%;
    }

    @media (max-width: 1024px) {
        .wk-ipadp-1 {
            width: 8.333333%;
        }

        .wk-ipadp-2 {
            width: 16.666667%;
        }

        .wk-ipadp-3 {
            width: 25%;
        }

        .wk-ipadp-4 {
            width: 33.333333%;
        }

        .wk-ipadp-5 {
            width: 41.666667%;
        }

        .wk-ipadp-6 {
            width: 50%;
        }

        .wk-ipadp-7 {
            width: 58.333333%;
        }

        .wk-ipadp-8 {
            width: 66.666667%;
        }

        .wk-ipadp-9 {
            width: 75%;
        }

        .wk-ipadp-10 {
            width: 83.333333%;
        }

        .wk-ipadp-11 {
            width: 91.666667%;
        }

        .wk-ipadp-12 {
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .wk-tab-1 {
            width: 8.333333%;
        }

        .wk-tab-2 {
            width: 16.666667%;
        }

        .wk-tab-3 {
            width: 25%;
        }

        .wk-tab-4 {
            width: 33.333333%;
        }

        .wk-tab-5 {
            width: 41.666667%;
        }

        .wk-tab-6 {
            width: 50%;
        }

        .wk-tab-7 {
            width: 58.333333%;
        }

        .wk-tab-8 {
            width: 66.666667%;
        }

        .wk-tab-9 {
            width: 75%;
        }

        .wk-tab-10 {
            width: 83.333333%;
        }

        .wk-tab-11 {
            width: 91.666667%;
        }

        .wk-tab-12 {
            width: 100%;
        }
    }

    @media (max-width: 500px) {
        .wk-mobile-1 {
            width: 8.333333%;
        }

        .wk-mobile-2 {
            width: 16.666667%;
        }

        .wk-mobile-3 {
            width: 25%;
        }

        .wk-mobile-4 {
            width: 33.333333%;
        }

        .wk-mobile-5 {
            width: 41.666667%;
        }

        .wk-mobile-6 {
            width: 50%;
        }

        .wk-mobile-7 {
            width: 58.333333%;
        }

        .wk-mobile-8 {
            width: 66.666667%;
        }

        .wk-mobile-9 {
            width: 75%;
        }

        .wk-mobile-10 {
            width: 83.333333%;
        }

        .wk-mobile-11 {
            width: 91.666667%;
        }

        .wk-mobile-12 {
            width: 100%;
        }
    }







    .getIn {
        display: grid;
        align-items: center;
        justify-content: center;
        margin-top: 45px;
        gap: 20px;

    }

    .getOne,
    .getTwo,
    .getThree {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .getOne h2,
    .getTwo h2,
    .getThree h2 {
        font-size: 20px;
    }

    .getOne a,
    .getTwo a,
    .getThree a {
        text-decoration: none;
        font-size: 16px;
        color: #5F1107;
    }


    .getInIcon i {
        font-size: 45px;
        color: #5F1107;
    }

    .getInCon {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-top: 20px;
    }

    .getIn h1 {
        font-size: 45px;

        color: #5F1107;
    }

    .getInIcon {
        display: flex;
        align-items: start;
        justify-content: space-between;
        width: 630px;
    }

    .aboutThreeText {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        flex-direction: column;
        margin-top: 45px;

    }

    .aboutThreeText h1 {
        font-size: 45px;
        width: 710px;
        color: #5F1107;
        line-height: 58px;
    }





    .aboutThreeText {
        position: relative;
        padding: 20px;
        color: #000;
        border: 2px solid transparent;
        transition: all 0.4s ease;

    }

    .aboutThreeText::after {
        content: "";
        position: absolute;
        inset: 0;
        border-bottom: 2px solid #5F1107;
        transform: scaleX(0);
        transform-origin: center;
        transition: transform 0.4s ease;

    }

    .aboutThreeText:hover::after {
        transform: scaleX(1);
    }



    .aboutThreeText p {
        font-size: 26px;
        width: 980px;
        color: #5F1107;
        text-align: center;
    }

    .aboutTwo {
        width: 495px;
        height: 627px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .aboutOneSectionOne {
        margin-bottom: 75px;
        margin-top: 45px;
    }



    .aboutTwoText {
        width: 595px;
        text-align: start;
        display: flex;
        align-items: start;
        justify-content: start;
        flex-direction: column;
        gap: 8px;
    }



    .aboutTwoSection {
        display: flex;
        align-items: center;
        justify-content: center;
    }












    .aboutOne {
        width: 530px;


    }



    .aboutOneText p,
    .aboutTwoText p {
        font-size: 26px;
        text-align: justify;
        color: #5F1107;
    }


    .aboutOneText h1,
    .aboutTwoText h1 {
        font-size: 50px;
        line-height: 58px;
        text-align: start;
        color: #5F1107;
    }

    .aboutHead h1 {
        font-size: 50px;
        line-height: 58px;
        text-align: start;
        color: #5F1107;
        border-bottom: 1px solid #af6022;
    }

    .aboutOneText {
        width: 580px;
        text-align: start;
        display: flex;
        align-items: start;
        justify-content: start;
        flex-direction: column;
        gap: 8px;
    }

    .aboutOne img,
    .aboutTwo img {
        border-radius: 15px;
    }

    .navBar {

        padding-top: 7px;
        padding-bottom: 5px;
        background-color: #5F1107;
        position: static !important;
    }

    .aboutOneSection {
        display: grid;
        grid-template-columns: auto auto;
        align-items: center;
        justify-content: space-around;
    }

    .aboutHead {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-left: 70px;
    }


    .aboutTwoSection {
        display: grid;
        grid-template-columns: auto auto;
        align-items: center;
        justify-content: space-around;
        margin-top: 25px;
    }
</style>


@endsection
