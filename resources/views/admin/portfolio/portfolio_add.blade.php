@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">{{ __('Add New Portfolio') }}</h4>
                        
                        <form action="{{ route('store.portfolio') }}" method="POST" id="portfolioForm" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="portfolio_name" class="col-sm-2 col-form-label">Portfolio Name</label>
                                <div class="form-group col-sm-10">
                                    <input class="form-control" type="text" name="portfolio_name" id="portfolio_name">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="portfolio_title" class="col-sm-2 col-form-label">Portfolio Title</label>
                                <div class="form-group col-sm-10">
                                    <input class="form-control" type="text" name="portfolio_title" id="portfolio_title">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="portfolio_image" class="col-sm-2 col-form-label">Portfolio Image</label>
                                <div class="form-group col-sm-10">
                                    <input class="form-control" type="file" name="portfolio_image" id="image">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="portfolio_image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" src="{{ (url('upload/no_image.jpg')) }}" 
                                    alt="avatar-5" class="rounded avatar-lg">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="portfolio_description" class="col-sm-2 col-form-label">Portfolio Description</label>
                                <div class="col-sm-10">
                                    <textarea name="portfolio_description" id="input_tinymce" class="form-control"></textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <hr>
                            <button type="submit" class="btn btn-info">{{ _('Save') }}</button>

                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>
@endsection