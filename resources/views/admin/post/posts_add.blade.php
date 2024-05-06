@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mb-4">{{ __('Add New Post') }}</h4>

                        <form action="{{ route('store.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" name="post_title" value="<?php echo isset($_POST['post_title']) ? $_POST['post_title'] : '' ?>"
                                     id="post_title" placeholder="Enter Title Here">
                                    @error('post_title')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <textarea name="post_content" id="input_tinymce" class="form-control"><?php echo isset($_POST['post_content']) ? $_POST['post_content'] : '' ?></textarea>
                                    @error('post_content')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->
                            <hr>

                            <div class="mb-3">
                                <h4 class="card-title mb-2">Author</h4>
                                <hr>
                                <div class="col-sm-3">
                                    <select class="form-select" name="post_author" aria-label="Name">
                                        @php
                                            $authors = App\Models\User::all();
                                        @endphp
                                        @foreach ($authors as $author)
                                            <option {{ Auth::user()->id == $author->id ? 'selected' : '' }} value="{{ $author->id }}">{{ $author->name }} ({{ $author->username }})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-3">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-2">{{ __('Publish') }}</h4>
                        <hr>

                        <button type="submit" name="draft" class="btn btn-outline-secondary btn-sm waves-effect">{{ _('Save Draft') }}</button>
                        <button type="submit" name="publish" class="btn btn-info btn-sm">{{ _('Publish') }}</button>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-2">{{ __('Categories') }}</h4>
                        <hr>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <select class="form-select" name="blog_category_id" aria-label="Name">
                                    @php
                                        $categories = App\Models\BlogCategory::all()->sortBy(['id','desc']);
                                    @endphp
                                    @foreach ($categories as $category)
                                        <option selected="" value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <a href="#" class="text-info mt-2" id="link-add-new-1"><strong><u>+ Add New Category</u></strong></a>
                            <a href="#" class="text-info mt-2" id="link-add-new-2" style="display: none"><strong><u>+ Add New Category</u></strong></a>
                        </div>
                        <!-- end row -->

                        <div id="categories_right_side" style="display: none">
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" form="add_category">
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-sm-12">
                                    {{-- <button type="submit" class="btn btn-outline-secondary btn-sm waves-effect" form="post">Add New Category</button> --}}
                                    <input type="submit" class="btn btn-outline-secondary btn-sm waves-effect" form="add_category" value="Add New Category" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card" id="featured-image-post">
                    <div class="card-body">

                        <h4 class="card-title mb-2">{{ __('Featured Image') }}</h4>
                        <hr>

                        <a href="#" class="text-info mt-2" id="set-featured-image-link"><u>Set featured image</u>
                            <input class="featured_image" type='file' name="post_image" id="image" style="width: 200px"/>
                        </a>

                        <div class="row mb-3" style="display: none" id="display-featured-image">
                            <div class="col-sm-12">
                                <img id="showImage" src="{{ (url('upload/post/default.jpg')) }}" 
                                alt="avatar-5" class="img-fluid rounded">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <a href="#" class="text-danger mt-2" style="display: none" id="remove-featured-image"><u>Remove featured image</u></a>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div> <!-- end col -->
        </div>
    </form>

    </div>
</div>
<form action="{{ route('store.blog.category') }}" method="post" id="add_category">
    @csrf
</form>
@endsection