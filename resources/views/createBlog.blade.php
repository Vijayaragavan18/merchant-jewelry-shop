@extends('/layouts/master')

@section('center')

<div class="formBlog">



    <form class="blogForm" method="POST" action="/blog/stores" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        <div class="errorMessage">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <input type="text" name="blogName" placeholder="Enter The Title" value="{{ old('blogName') }}">
        <div class="blogDesc">
            <textarea name="blogDes" id="editor1" minlength="40" placeholder="Description">{{ old('blogDes') }}</textarea>
        </div>
        <input type="file" name="blogImage">
        <button class="createBtn" type="submit">Submit</button>
        <style>
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

            .createBtn {
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
                    width: auto;
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

                input[type="file"] {
                    width: auto;
                    border: none;
                }

                .blogForm {
                    background-color: #b0602229;
                    gap: 10px;
                    display: grid;
                    width: auto;
                    padding: 20px;
                    border-radius: 10px;
                }
            }
        </style>





    </form>




</div>














@endsection