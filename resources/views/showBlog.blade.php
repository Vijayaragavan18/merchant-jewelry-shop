@extends('/layouts/master')

@section('center')


<div class="blogDetails">



    <div class="showBlog">
        <div class="headContent">
            <h1>{{$showBlogs->name}}</h1>
            <h6>Created At: {{ $showBlogs->updated_at->format('d M Y') }}</h6>

        </div>
        <div class="blogImage"><img src="/uploads/{{$showBlogs->image}}" alt="blog one"></div>


        <p>{{$showBlogs->description}}</p>




        @if ($packageUser && in_array($packageUser->plan_id, [2, 3]))




        <div class="formEdits">
            <form method="get" action="/blog/{{$showBlogs->id}}/editPage">
                <button class="inputEdits" type="submit">Edit</button>
            </form>
            <!-- <form method="post" action="/blog/{{$showBlogs->id}}/deletePage">
                @csrf
                @method("DELETE")
                <input type="submit" value="Delete">
            </form> -->

            <form action="{{ route('blog.destroy', $showBlogs->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>


        </div>

        @endif
    </div>

</div>


<style>
    .formEdits button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        background-color: #C00000;
        border: none;
        width: 120px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        text-decoration: none;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
    }

    .formEdits .inputEdits {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        background-color: #C07000;
        border: none;
        width: 120px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        text-decoration: none;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
    }



    .formEdits {
        display: flex;
        align-items: center;
        justify-content: start;
        gap: 20px;
    }

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
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .showBlog {
        display: grid;
        align-items: self-start;
        justify-content: start;
        padding: 40px 0px 40px 0px;
        gap: 20px;
        width: 90%;
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

        /* navEnd */
        .showBlog h1 {
            text-align: center;
            font-size: 20px;
        }

        .blogImage {
            width: 100%;
        }

        .showBlog {
            display: grid;
            align-items: center;
            justify-content: center;
            padding: 40px 0px 40px 0px;
            gap: 20px;
            width: 84%;
        }

        .headContent {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
        }

        .showBlog p {
            text-align: justify;
            font-size: 14px;
        }

    }
</style>











@endsection
