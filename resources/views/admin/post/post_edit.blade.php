@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mb-4">{{ __('Edit Post') }}</h4>

                        <form action="{{ route('update.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <input type="hidden" name="id" value="{{ $post->id }}">

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" name="post_title" value="{{ $post->post_title }}"
                                     id="post_title" placeholder="Enter Title Here">
                                    @error('post_title')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <textarea name="post_content" id="input_tinymce" class="form-control">{{ $post->post_content }}</textarea>
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
                                            <option {{ $author->id == $post->post_author ? 'selected' : '' }} value="{{ $author->id }}">{{ $author->name }} ({{ $author->username }})</option>
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

                        <div class="row">
                            <div class="col-sm-12">
                                <p>Status: <strong>{{ ucwords($post->post_status) }}</strong>
                                    <a href="#" class="text-danger ms-1" id="edit_post_status_button"><u>Edit</u></a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary ms-4">Preview Changes</a>
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3" style="display: none" id="card_publish_button_edit">
                            <div class="col-sm-8">
                                <select name="post_status" class="form-select" aria-label="post_status">
                                    <option {{ $post->post_status == 'draft' ? 'selected' : '' }} value="draft">Draft</option>
                                    <option {{ $post->post_status == 'published' ? 'selected' : '' }} value="published">Published</option>
                                </select>
                            </div>
                            <a href="#" for="cancel" class="col-sm-4 col-form-label text-info" id="cancel_post_status_button_edit"><u>Cancel</u></label>
                        </div>

                        <a href="{{ route('delete.post', $post->id) }}" class="text-danger"><u>{{ _('Move to Trash') }}</u></a>
                        <button type="submit" class="btn btn-info btn-sm space-between ms-2">{{ _('Update') }}</button>

                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-2">{{ __('Categories') }}</h4>
                        <hr>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <select class="form-select" name="blog_category_id" aria-label="blog_category_id">
                                    @php
                                        $categories = App\Models\BlogCategory::all()->sortBy(['id','desc']);
                                    @endphp
                                    @foreach ($categories as $category)
                                        <option {{ $category->id == $post->blog_category_id ? 'selected' : '' }} 
                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="text-info mt-2" id="link-add-new-1" style="cursor: pointer"><strong><u>+ Add New Category</u></strong></span>
                            <span class="text-info mt-2" id="link-add-new-2" style="display: none;cursor: pointer"><strong><u>+ Add New Category</u></strong></span>
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
                                    <input type="submit" class="btn btn-outline-secondary btn-sm waves-effect" form="add_category" value="Add New Category" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card" id="featured-image-post-edit">
                    <div class="card-body">

                        <h4 class="card-title mb-2">{{ __('Featured Image') }}</h4>
                        <hr>

                        <a href="#" class="text-info mt-2" id="set-featured-image-link-edit" style="display: none"><u>Set featured image</u>
                            <input class="featured_image" type='file' name="post_image" id="image" style="width: 200px"/>
                        </a>

                        <div class="row mb-3" id="display-featured-image-edit">
                            <div class="col-sm-12">
                                <a href="#" id="set-featured-image-display">
                                    <input class="img-fluid featured_image_select" style="" type='file' name="post_image" id="image-image" style="width: 200px"/>
                                <img id="showImage" src="{{ !empty($post->post_image) ? url($post->post_image) : url('upload/post/default.jpg')   }}" 
                                alt="avatar-5" class="img-fluid rounded">
                                </a>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <a href="#" class="text-danger mt-2" id="remove-featured-image-edit"><u>Remove featured image</u></a>
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

<script type="text/javascript">
const editPostStatusButton = document.getElementById('edit_post_status_button');
const cardPublishButton = document.getElementById('card_publish_button_edit');
const cancelPostStatusButtonEdit = document.getElementById('cancel_post_status_button_edit');
const removeFeaturedImageEdit = document.getElementById('remove-featured-image-edit');
const displayFeaturedImageEdit = document.getElementById('display-featured-image-edit');
const setFeaturedImageLinkEdit = document.getElementById('set-featured-image-link-edit');

editPostStatusButton.addEventListener('click', e => {
    editPostStatusButton.style.display = 'none';
    cardPublishButton.style.display = 'block';
});

cancelPostStatusButtonEdit.addEventListener('click', e => {
    editPostStatusButton.style.display = 'block';
    cardPublishButton.style.display = 'none';
});

removeFeaturedImageEdit.addEventListener('click', e => {
    displayFeaturedImageEdit.style.display = 'none';
    removeFeaturedImageEdit.style.display = 'none';
    setFeaturedImageLinkEdit.style.display = 'block';
});

setFeaturedImageLinkEdit.addEventListener('click', e => {
    displayFeaturedImageEdit.style.display = 'block';
    setFeaturedImageLinkEdit.style.display = 'none';
    removeFeaturedImageEdit.style.display = 'block';
});

// Display image
$('#image').change(function(e) {
    var reader = new FileReader();
    reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
});

$('#image-image').change(function(e) {
    var reader = new FileReader();
    reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
});
</script>
@endsection