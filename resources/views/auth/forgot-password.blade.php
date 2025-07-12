@extends('/layouts/master')

@section('center')
<x-guest-layout>
    <div class="loginForm">
        <div class="loginForm2">
            <div class="formDetails">
                <h2>Forget Password</h2>
                <div class="mb-4 text-sm text-gray-600 frText">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" class="forgetPass" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="passSec">
                        <div class="validTags">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" placeholder="Enter Mail here" class="block mt-1 w-full emailInput" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="logBtn">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
            <div class="logImg"><img src="/images/logimg.jpg" alt="login Image"></div>
        </div>
    </div>
</x-guest-layout>


<style>
    .forgetPass {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .logBtn {
        border: none;
        padding: 10px 30px;
        border-radius: 12px;
        background-color: #5f1107;
        color: aliceblue;
        cursor: pointer;
    }


    .emailInput:focus {
        outline: none;

    }

    .emailInput {
        border: none;
        background-color: transparent;
        border-bottom: solid .5px #b06022;
        color: #5F1107;
        font-size: 18px;
        font-weight: 600;


    }

    .validTags {
        width: 100%;
        display: flex;
        gap: 20px;
        align-items: center;
        justify-content: space-between;

    }

    .passSec {
        display: flex;
        flex-direction: column;
        align-items: self-start;
        justify-content: space-between;
    }


    .loginForm2 {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        padding: 40px;
    }

    .formDetails {
        display: flex;
        align-items: self-start;
        justify-content: space-between;
        flex-direction: column;
        width: 50%;
        gap: 10px;
    }

    .logImg {
        width: 325px;

    }

    .logImg img {
        border-radius: 10px;
        box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.18);
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
    }

    @media only screen and (max-width: 480px) {

        .logImg {
            display: none;
        }

        .formDetails {
            display: flex;
            align-items: self-start;
            justify-content: space-between;
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }

        .emailInput {
            border: none;
            border-bottom-width: medium;
            border-bottom-style: none;
            border-bottom-color: currentcolor;
            background-color: transparent;
            border-bottom: solid .5px #b06022;
            color: #5F1107;
            font-size: 14px;
            font-weight: 600;
        }

        .frText {
            text-align: justify;
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
    }
</style>



@endsection