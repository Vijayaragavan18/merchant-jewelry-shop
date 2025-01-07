@extends('/layouts/master')

@section('center')

<x-guest-layout>
    <div class="logDetails">
        <div class="loginForm">
            <div class="loginForm2">
                <div class="formDetails">
                    <h2>Sign Up</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->

                        <div class="passSec">
                            <div class="validTags">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="emailInput" type="text" name="name" :value="old('name')" required autocomplete="name" />
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="errorClr" />
                        </div>


                        <!-- Email Address -->

                        <div class="passSec">
                            <div class="validTags">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="emailInput" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="errorClr" />
                        </div>

                        <!-- Password -->
                        <div class="passSec">

                            <div class="validTags">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="emailInput"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="errorClr" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="passSec">

                            <div class="validTags">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" class="emailInput"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="errorClr" />

                        </div>

                        <div class="regSec">
                            <a class="" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-primary-button class="logBtn">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
                <div class="logImg"><img src="/images/logimg.jpg" alt="login Image"></div>
            </div>
        </div>
    </div>
</x-guest-layout>






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

        align-items: flex-end;
        justify-content: space-between;
        gap: 20px;

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
</style>



@endsection