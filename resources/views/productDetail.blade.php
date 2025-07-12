@extends('/layouts/master')

@section('center')

<div class="product">

    @if ($errors->any())
    <div class="errorsList">
        <h1>Errors:</h1>
        <div class="alertError">
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    @endif

    <style>
        .errorList {
            display: grid;

        }
    </style>


    <div class="formBlog">




        <form class="blogForm" method="POST" action="/wish/store" enctype="multipart/form-data">


            @csrf

            <input type="text" name="wishName" value="{{ old('wishName') }}" placeholder="Enter The Title">
            <input type="text" name="wishPrice" value="{{ old('wishPrice') }}" placeholder="Enter The grams">
            <input type="text" name="wishDes" value="{{ old('wishDes') }}" placeholder=" Enter The Description">

            <select name="Gender">
                <option value="">Select Gender</option>
                <option value="All" {{ old('Gender')=='All'?'Selected':'' }}>All</option>
                <option value="Male" {{ old('Gender')=='Male'?'Selected':'' }}>Male</option>
                <option value="Female" {{ old('Gender')=='Female'?'Selected':'' }}>Female</option>
                <option value="Kids" {{ old('Gender')=='Kids'?'Selected':'' }}>Kids</option>

            </select>

            <select name="Material">
                <option value="">Select Material</option>
                <option value="Gold" {{old('Material')=='Gold'?'Selected':''}}>Gold</option>
                <option value="Diamond {{ old('Material')=='Diamond'?'Selected':'' }}">Diamond</option>
                <option value="Platinum {{ old('Material')=='Platinum'?'Selected':'' }}">Platinum</option>
            </select>

            <select name="TypeOfJewel" required>
                <option value="">Select Jewelry Type</option>
                <option value="Ring" {{ old('TypeOfJewel') == 'Ring' ? 'selected' : '' }}>Ring</option>
                <option value="Chain" {{ old('TypeOfJewel') == 'Chain' ? 'selected' : '' }}>Chain</option>
                <option value="Necklace" {{ old('TypeOfJewel') == 'Necklace' ? 'selected' : '' }}>Necklace</option>
                <option value="Earrings" {{ old('TypeOfJewel') == 'Earrings' ? 'selected' : '' }}>Earrings</option>
                <option value="Others" {{ old('TypeOfJewel') == 'Others' ? 'selected' : '' }}>Others</option>
            </select>

            <input type="file" name="addWishImg">
            <button class="productDetailAddBtn" type="submit">Submit</button>














            <style>
                .imageCol {
                    width: 325px;

                }

                .imageCol img {
                    border-radius: 10px;
                    box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.18);
                }



                .blogForm .blogDesc textarea {
                    width: 90%;
                    height: 20vh;
                    resize: none;
                    border: none;
                    border-radius: 7px;
                    outline: none;
                    font-size: 18px;
                    color: #ffff;
                    font-weight: 200;
                    padding: 10px;
                    background-color: #5F1107;
                }

                textarea::-webkit-scrollbar {
                    width: 0px;
                }

                input[type=file] {
                    width: 300px;
                    border: none;
                }

                .productDetailAddBtn {
                    width: 120px;
                    border: none;
                    padding: 7px 10px;
                    background-color: #5F1107;
                    color: #ffff;
                    border-radius: 5px;
                }

                input[type=text] {
                    background-color: #5F1107;
                    width: 300px;
                    padding: 10px;
                    color: #ffff;
                    border: none;
                    border-radius: 7px;
                    outline: none;
                    font-size: 18px;

                    font-weight: 200;
                }
            </style>





        </form>


        <div class="imageCol productAddDisplay">
            <img src="/images/logimg.jpg" alt="login Image">
        </div>


    </div>

</div>











<style>
    .navBar {

        padding-top: 15px;
        padding-bottom: 15px;
        background-color: #5F1107;
        position: static !important;
    }

    .blogForm {

        gap: 10px;
        display: grid;




    }

    .formBlog {
        background-color: #b0602229;
        gap: 10px;
        display: grid;
        width: 70%;
        padding: 20px;
        border-radius: 10px;
        grid-template-columns: auto auto;
        align-items: center;
        justify-content: space-around;
        margin: 30px;
    }

    .product {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 60vh;
    }

    @media (min-width: 576px) and (max-width: 991.98px) {
        .formBlog {
            background-color: #b0602229;
            gap: 10px;
            display: grid;
            width: auto;
            padding: 20px;
            border-radius: 10px;
            grid-template-columns: auto auto;
            align-items: center;
            justify-content: space-around;
            margin: 30px;
        }
    }



    @media only screen and (max-width: 480px) {

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
            color: #FFF !important;
        }

        input[type="file"] {
            width: auto;
            border: none;
        }

        input[type="text"] {
            background-color: #5F1107;
            width: auto;
            padding: 10px;
            color: #ffff;
            border: none;
            border-radius: 7px;
            outline: none;
            font-size: 18px;
            font-weight: 200;
        }

        .productAddDisplay {
            display: none;
        }
    }
</style>



@endsection
