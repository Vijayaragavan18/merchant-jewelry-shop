@extends('/layouts/master')

@section('center')


<div class="blogDetails">



    <div class="showBlog">
        <div class="headContent">
            <h1>{{$showBlogs->name}}</h1>
            <h6>{{$showBlogs->updated_at}}</h6>
        </div>
        <div class="blogImage"><img src="/uploads/{{$showBlogs->image}}" alt="blog one"></div>


        <p>{{$showBlogs->description}}</p>

        <form method="get" action="/blog/{{$showBlogs->id}}/editPage">

            <button type="submit">Edit</button>
        </form>

        <form method="post" action="">
            @csrf
            @method("DELETE")
            <input type="text" value="Delete">
        </form>

    </div>

</div>


<style>
    .headContent {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }


    .showBlog h1 {
        text-align: initial;
        font-size: 32px;

    }



    .blogDetails {
        display: grid;
        align-items: center;
        justify-content: center;
    }



    .showBlog {
        width: 600px;
        display: grid;
        align-items: self-start;
        justify-content: start;
        padding: 40px 0px 40px 0px;
        gap: 20px;
    }

    .showBlog p {
        text-align: justify;
    }



    .navBar {

        padding-top: 15px;
        padding-bottom: 15px;
        background-color: #5F1107;
        position: static !important;
    }

    .blogImage {
        width: 500px;
    }
</style>











@endsection
