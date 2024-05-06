@extends('frontend.main_master')
@section('main')
@section('title')
Blog - {{config('app.name', 'Laravel') }}
@endsection
<!-- breadcrumb-area -->
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Recent Article</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            @php
            $multi_images = App\Models\MultiImage::orderBy('created_at','desc')->take(6)->get();
            @endphp
            @foreach ($multi_images as $multi_image)
                <li><img src="{{ empty($multi_image->multi_image) ? url('upload/no_image.jpg') : url($multi_image->multi_image) }}" alt=""></li>
            @endforeach
        </ul>
    </div>
</section>
<!-- breadcrumb-area-end -->


<!-- blog-area -->
<section class="standard__blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($posts as $post)
                <div class="standard__blog__post">
                    <div class="standard__blog__thumb">
                        <a href="{{ route('blog.details', $post->id) }}"><img src="{{ empty($post->post_image) ? url('upload/post/default.jpg') : url($post->post_image) }}" alt="{{ $post->post_title }}" alt=""></a>
                        <a href="{{ route('blog.details', $post->id) }}" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <div class="standard__blog__content">
                        <div class="blog__post__avatar">
                            <div class="thumb"><img src="{{ empty($post->profile_image) ? url('upload/no_image.jpg') : url('upload/admin_images/'.$post->profile_image) }}" alt=""></div>
                            <span class="post__by">By : <a href="#">{{ $post->user_name }}</a></span>
                        </div>
                        <h2 class="title"><a href="{{ route('blog.details', $post->id) }}">{{ $post->post_title }}</a></h2>
                        <p>{!! Str::limit($post->post_content, 200) !!}</p>
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</li>
                            <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (08)</a></li>
                            <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach

                <div class="pagination-wrap">
                    {{ $posts->links('vendor.pagination.custome'); }}
                </div>
                
            </div>
            <div class="col-lg-4">
                <aside class="blog__sidebar">
                    <div class="widget">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Recent Blog</h4>
                        <ul class="rc__post">
                            @foreach ($allblogs as $allblog)
                            <li class="rc__post__item">
                                <div class="rc__post__thumb">
                                    <a href="{{ route('blog.details', $allblog->id) }}">
                                        <img src="{{ empty($allblog->post_image) ? url('upload/post/default.jpg') : url($allblog->post_image) }}" alt="{{ $allblog->post_title }}" alt=""></a>
                                </div>
                                <div class="rc__post__content">
                                    <h5 class="title"><a href="{{ route('blog.details', $allblog->id) }}">{{ $allblog->post_title }}</a></h5>
                                    <span class="post-date"><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($allblog->created_at)->diffForHumans() }}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="sidebar__cat">
                            @php
                                $categories = App\Models\BlogCategory::orderBy('id', 'desc')->get();
                            @endphp
                            @foreach ($categories as $category)
                                <li class="sidebar__cat__item"><a href="{{ route('category.blog', $category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Recent Comment</h4>
                        <ul class="sidebar__comment">
                            <li class="sidebar__comment__item">
                                <a href="blog-details.html">Rasalina Sponde</a>
                                <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Popular Tags</h4>
                        <ul class="sidebar__tags">
                            <li><a href="blog.html">Business</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->
@endsection