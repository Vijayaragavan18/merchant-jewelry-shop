@extends('/layouts/master')

@section('center')


<div class="formBlog">
    <form class="blogForm" method="POST" action="/blog/{{$create->id}}" enctype="multipart/form-data">
        @csrf
        @method("PATCH")


        <input type="text" name="blogName" value="{{$create->name}}" placeholder="Enter The Title">


        <div class="blogDesc">
            <textarea name="blogDes" minlength="40" placeholder="Description">{{$create->description}}</textarea>
        </div>


        @if($create->image)
        <img src="{{ asset('/uploads/'. $create->image) }}" alt="Current Image" style="max-width: 200px;">
        @endif


        <input type="file" name="blogImage">

        <button class="editBtnBlog" type="submit">Submit</button>
    </form>
</div>



<style>
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
        resize: none;
    }

    textarea::-webkit-scrollbar {
        width: 0px;
    }

    input[type=file] {
        width: 300px;
        border: none;
    }

    .editBtnBlog {
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


    .navBar {

        padding-top: 15px;
        padding-bottom: 15px;
        background-color: #5F1107;
        position: static !important;
    }

    .blogForm {
        background-color: #b0602229;
        gap: 10px;
        display: grid;
        width: 70%;
        padding: 20px;
        border-radius: 10px;
    }

    .formBlog {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 60vh;
    }


    @media (min-width: 576px) and (max-width: 991.98px) {
        .footerDetails {
            width: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        .blogForm {
            background-color: #b0602229;
            gap: 10px;
            display: grid;
            width: 70%;
            padding: 20px;
            border-radius: 10px;
            margin: 25px;

        }

        .blogForm .blogDesc textarea {
            width: 97%;
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
            resize: none;
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


        .blogForm .blogDesc textarea {
            width: 90%;
            height: 20vh;
            resize: none;
            border: none;
            border-radius: 7px;
            outline: none;
            font-size: 15px;
            color: #ffff;
            font-weight: 200;
            padding: 10px;
            background-color: #5F1107;
            resize: none;
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
            font-size: 15px;
            font-weight: 200;
        }

        .blogForm {
            background-color: #b0602229;
            gap: 10px;
            display: grid;
            width: auto;
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
        }
    }
</style>





</form>
</div>












@endsection
