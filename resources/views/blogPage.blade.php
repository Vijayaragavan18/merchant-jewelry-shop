@extends('/layouts/master')

@section('center')
<div class="blogBanner">
    <img src="/images/blogs/blog.png" alt="blog banner">
</div>


<a href="/blog/createBlog">Create a blog</a>



<div class="blogContents">
    @foreach ($showBlog as $myBlogs )
    <a href="/blog/{{$myBlogs->id}}/showBlog">

        <div class="blogPost">
            <div class="blogImage"><img src="/uploads/{{$myBlogs->image}}" alt="blogOne"></div>
            <div class="blogPost_content">
                <h1>
                    {{$myBlogs->name}}
                </h1>
                <h5>{{$myBlogs->updated_at}}</h5>
                <p>{{$myBlogs->description}}</p>
            </div>
        </div>
    </a>
    @endforeach
</div>
<a href="/dashboard">dashboard</a>

@endsection

<style>
    a {
        text-decoration: none;
    }


    .blogContents {
        display: grid;
        grid-template-columns: auto auto;
        align-items: center;
        justify-content: space-evenly;
        padding: 80px 0px 80px 0px;
        gap: 70px;

    }


    .blogPost_content h5 {
        padding-top: 20px;

    }


    .blogPost_content {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        flex-direction: column;
        text-align: center;

    }

    .blogPost_content h1 {
        font-size: 32px;
        color: #5F1107;
    }

    .blogPost_content h5 {
        font-size: 14px;
        color: #5F1107;
    }

    .blogPost_content p {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-size: 20px;
        color: #5F1107;
    }

    .blogPost .blogImage {
        width: 347px;
        height: 376px;
        display: flex;
        align-items: center;

    }

    .blogPost {
        width: 555px;

        display: grid;
        align-items: center;
        justify-content: center;
        background-color: antiquewhite;
        border-radius: 10px;
        padding-bottom: 20px;
        box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.75);
    }

    .blogImage img {
        border-radius: 10px;
    }


    .navBar {

        padding-top: 15px;
        padding-bottom: 15px;
        background-color: #5F1107;
        position: static !important;
    }
</style>
