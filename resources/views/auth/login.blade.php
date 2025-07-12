@extends('/layouts/master')

@section('center')


<div class="logDetails">

    <div class="loginForm">





        <div class="loginForm2">
            <div class="formDetails">
                <h2>Login</h2>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="emailSec">
                        <div class="validTags">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="emailInput" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>
                        <!-- tags -->
                        <!-- autofocus -->



                        <x-input-error :messages="$errors->get('email')" class="errorClr" />
                    </div>
                    <!-- Password -->
                    <div class="passSec">
                        <div class="validTags">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="emailInput"
                                type="password"
                                name="password" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="errorClr" />
                    </div>
                    <!-- Remember Me -->
                    <div class="logSec">
                        <div class="remember">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="" name="remember">
                                <span class="">{{ __('Remember me') }}</span>
                            </label>
                            @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                        @endif
                        <x-primary-button class="logBtn">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                    <div class="regSec">
                        <h4>Don't have an account you?</h4>
                        <a href="/register">Sign up</a>
                    </div>
                </form>
            </div>

            <div class="logImg"><img src="/images/logimg.jpg" alt="login Image"></div>
        </div>

    </div>

</div>





<style>
    .errorClr li {
        color: red !important;
        font-size: 12px;

        margin: 10px 15px 0px;
    }


    .formDetails h2,
    h4,
    label {
        color: #5F1107;
    }



    .validTags {
        width: 100%;
        display: flex;

        align-items: center;
        justify-content: space-between;

    }

    .formDetails a {
        color: #b06022;
        text-decoration: none;
    }


    .emailInput {
        border: none;
        background-color: transparent;
        border-bottom: solid .5px #b06022;
        color: #5F1107;
        font-size: 18px;
        font-weight: 600;


    }

    .emailInput:focus {
        outline: none;

    }





    .logBtn {
        border: none;
        padding: 10px 30px;
        border-radius: 25px;
        background-color: #5f1107;
        color: aliceblue;
        cursor: pointer;
    }

    .remember {
        display: flex;

        align-items: center;
        justify-content: space-between;
        width: 330px;
    }


    .regSec {
        display: flex;
        padding-top: 20px;
        gap: 10px;
        align-items: center;
        justify-content: center;

    }

    .logImg {
        width: 325px;

    }

    .logImg img {
        border-radius: 10px;
        box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.18);
    }


    form {
        display: flex;
        flex-direction: column;

        gap: 20px;
    }



    .logSec {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 40px;
    }


    .emailSec,
    .passSec {
        display: flex;
        flex-direction: column;
        align-items: self-start;
        justify-content: space-between;
    }






    .formDetails {

        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        min-height: 50vh;

    }



    .Login h2 {

        font-size: 20px;

    }

    .loginForm {



        width: 80%;
        min-height: 60vh;
        background-color: #fff0;
        padding: 10px 0px;
        border-radius: 7px;
        box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.48)
    }

    .loginForm2 {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    /*
    .emailInput,
    .passInput {} */


    .logDetails {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 76vh;

    }


    .navBar {
        padding: 15px 0px 15px 0px;
        background-color: #5F1107;
        position: static !important;
    }

    @media (min-width: 576px) and (max-width: 991.98px) {
        .footerDetails {
            width: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }


        .loginForm2 {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 20px;
        }

        .validTags {
            width: 100%;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 21px;
        }

        h4 {
            font-size: 20px;
        }

        .remember {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .loginForm {
            width: 80%;
            min-height: 60vh;
            background-color: #fff0;
            padding: 0px 0px;
            border-radius: 7px;
            box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.48);
            margin: 30px;
        }
    }



    @media only screen and (max-width: 480px) {
        .logImg {
            display: none;
        }

        h4 {
            font-size: 14px;
            font-weight: normal;
            color: #5F1107;
        }

        .validTags {
            width: 100%;
            display: flex;
            align-items: start;

            flex-direction: column;
            gap: 5px;
        }

        .formDetails h2,
        h4,
        label {
            color: #5F1107;
            font-size: 14px;
        }

        .formDetails a {
            color: #b06022;
            text-decoration: none;
            font-size: 12px;
        }

        .remember {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }


        .navBarMobile {

            padding-top: 7px;
            padding-bottom: 5px;
            background-color: #5F1107;
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
            color: #FFF;
        }

        .logSec {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 18px;
        }

        .regSec {
            display: flex;
            padding-top: 1px;
            gap: 10px;
            align-items: center;
            justify-content: center;
        }

    }
</style>



@endsection