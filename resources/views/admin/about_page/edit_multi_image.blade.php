@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">{{ __('Update Multi Image') }}</h4>
                        
                        <form action="{{ route('update.multi.image') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <input type="hidden" name="id" value="{{ $editMultiImage->id }}">

                            <div class="row mb-3">
                                <label for="multi_image" class="col-sm-2 col-form-label">About Multi Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="multi_image" id="image">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="about_image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" src="{{ ($editMultiImage->multi_image === NULL) ? url('upload/no_image.jpg')
                                    : url($editMultiImage->multi_image) }}" 
                                    alt="avatar-5" class="rounded avatar-lg">
                                </div>
                            </div>
                            <!-- end row -->
                            <hr>
                            <button type="submit" class="btn btn-info">{{ _('Update Multi Image') }}</button>

                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>
@endsection