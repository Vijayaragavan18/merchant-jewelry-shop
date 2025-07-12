@extends('/layouts/master')

@section('center')
<div class="blogBanner">
    <img src="/images/blogs/blog.png" alt="blog banner">
</div>


<!-- if (Auth::user()->email == "v123@gmail.com") {
            $showBlog = App\models\blog::all();
            return view('blogPage', compact('showBlog'));
        } -->




<div class="blogSection">

    <div class="blogHead">
        <h1>Behind the Shine</h1>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const dashboardContent = document.getElementById('newAdd');
                if (dashboardContent) {
                    dashboardContent.style.display = 'block';
                }
            });
        </script>



        @if ($packageUser && in_array($packageUser->plan_id, [2, 3]))
        <div class="createBlog">
            <a id="newAdd" class="newBlogBtn" href="/blog/createBlog">Create a blog</a>
        </div>
        @endif


    </div>
    @if ($showBlog->isEmpty())

    <h1>Welcome dude! You have no products here </h1>
    @else

    <div class="blogText">
        <h1>Investors & Advisors</h1>
        <p>Advising us are some of the best angel investors and venture capitalists.
            We are easy to use. We are reliable. We are always there</p>
    </div>
    <div class="blogContents">
        @foreach ($showBlog as $myBlogs )


        <div class="blogPost">
            <a href="/blog/{{$myBlogs->id}}/showBlog">
                <div class="blogCenter">
                    <div class="blogImage">
                        <img class="blogInnerImg" src="/uploads/{{$myBlogs->image}}" alt="blogOne">
                    </div>
                    <div class="blogPost_content">
                        <h1>
                            {{Str::limit ($myBlogs->name , 30)}}
                        </h1>
                        <h5>Created At: {{ $myBlogs->updated_at->format('d M Y') }}</h5>
                        <p>{{ Str::limit($myBlogs->description, 35) }}</p>
                    </div>
                </div>
            </a>
        </div>



        @endforeach






    </div>
    <div class="pagIcons">
        {{ $showBlog->links() }}
    </div>
    @endif
</div>


@endsection

<style>
    .limited-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Limit the number of lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 16px;
        /* Adjust font size as needed */
        color: #5F1107;
        /* Text color, adjust if needed */
    }



    .createBlog {

        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-left: 70px;

    }



    .blogBtn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2px;
        margin-top: 20px;
    }

    .newBlogBtn {
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





    .blogBtn button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        background-color: #5F1107;
        border: none;
        width: 120px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        text-decoration: none;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
    }


    .blogText {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        flex-direction: column;
        margin-top: 45px;

    }

    .blogText h1 {
        font-size: 45px;
        width: 710px;
        color: #5F1107;
        line-height: 58px;
    }



    .blogSection {
        margin-bottom: 75px;
        margin-top: 45px;
    }

    .blogCenter {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 10px;
    }




    a {
        text-decoration: none;
    }



    /* .blogPost_content h5 {
        padding-top: 20px;

    } */


    .blogPost_content {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        flex-direction: column;
        text-align: center;

    }

    .blogPost_content h1 {

        color: #5F1107;
    }

    .blogPost_content h5 {
        /* font-size: 14px; */
        color: #5F1107;
    }

    .blogPost_content p {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        /* font-size: 20px; */
        color: #5F1107;
    }

    .blogPost .blogImage {
        width: 347px;
        height: 376px;
        display: flex;
        align-items: center;


    }

    .blogPost {

        background-color: antiquewhite;
        border-radius: 10px;

        box-shadow: 0px 4px 28px 0px rgba(0, 0, 0, 0.3);
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





    }
</style>
