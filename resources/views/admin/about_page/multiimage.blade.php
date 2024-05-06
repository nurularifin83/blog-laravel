@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">{{ __('Add Multi Image') }}</h4>
                        
                        <form action="{{ route('store.multi.image') }}" id="multiimageForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')

                            <div class="row mb-3">
                                <label for="multi_image" class="col-sm-2 col-form-label">About Multi Image</label>
                                <div class="form-group col-sm-10">
                                    <input class="form-control" type="file" name="multi_image[]" multiple="" id="image">
                                    @error('multi_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="about_image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" src="{{url('upload/no_image.jpg')}}" 
                                    alt="avatar-5" class="rounded avatar-lg">
                                </div>
                            </div>
                            <!-- end row -->
                            <hr>
                            <button type="submit" class="btn btn-info">{{ _('Add Multi Image') }}</button>

                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>
@endsection