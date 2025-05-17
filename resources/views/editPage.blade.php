@extends('/layouts/master')

@section('center')


<div class="formBlog">
    <form class="blogForm" method="POST" action="/blog/{{$create->id}}" enctype="multipart/form-data">
        @csrf
        @method("PATCH")

        <!-- Blog Name -->
        <input type="text" name="blogName" value="{{$create->name}}" placeholder="Enter The Title">

        <!-- Blog Description -->
        <div class="blogDesc">
            <textarea name="blogDes" minlength="40" placeholder="Description">{{$create->description}}</textarea>
        </div>

        <!-- Current Image -->
        @if($create->image)
        <img src="{{ asset('/uploads/'. $create->image) }}" alt="Current Image" style="max-width: 200px;">
        @endif

        <!-- New Image Upload -->
        <input type="file" name="blogImage">

        <!-- Submit Button -->
        <button type="submit">Submit</button>
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

    button[type=submit] {
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
</style>





</form>
</div>












@endsection
