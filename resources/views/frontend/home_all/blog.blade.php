<section class="blog">
    <div class="container">
        <div class="row gx-0 justify-content-center">
            @php
                $posts = DB::table('posts')
                        ->join('users', 'posts.post_author', '=', 'users.id')
                        ->join('blog_categories', 'posts.blog_category_id', '=', 'blog_categories.id')
                        ->select('posts.*', 'users.name as user_name', 'blog_categories.name as category_name')
                        ->orderBy('created_at', 'desc')
                        ->take(3)
                        ->get();
            @endphp
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="blog__post__item">
                    <div class="blog__post__thumb">
                        <a href="{{ route('blog.details', $post->id) }}"><img src="{{ empty($post->post_image) ? url('upload/post/default.jpg') : url($post->post_image) }}" alt="{{ $post->post_title }}"></a>
                        <div class="blog__post__tags">
                            <a href="blog.html">{{ $post->category_name }}</a>
                        </div>
                    </div>
                    <div class="blog__post__content">
                        <span class="date">{{ date('d M Y', strtotime($post->created_at)); }}</span>
                        <h3 class="title"><a href="{{ route('blog.details', $post->id) }}">{{ $post->post_title }}</a></h3>
                        <a href="{{ route('blog.details', $post->id) }}" class="read__more">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="blog__button text-center">
            <a href="#" class="btn">more blog</a>
        </div>
    </div>
</section>