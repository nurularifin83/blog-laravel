@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">{{ __('Edit Portfolio') }}</h4>

                        <form action="{{ route('update.protfolio') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <input type="hidden" value="{{ $editPortfolio->id }}" name="id">

                            <div class="row mb-3">
                                <label for="portfolio_name" class="col-sm-2 col-form-label">Portfolio Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="portfolio_name" id="portfolio_name" value="{{ $editPortfolio->portfolio_name }}">
                                    @error('portfolio_name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="portfolio_title" class="col-sm-2 col-form-label">Portfolio Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="portfolio_title" id="portfolio_title" value="{{ $editPortfolio->portfolio_title }}">
                                    @error('portfolio_title')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="portfolio_image" class="col-sm-2 col-form-label">Portfolio Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="portfolio_image" id="image">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="portfolio_image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" src="{{ $editPortfolio->portfolio_image === NULL ? url('upload/no_image.jpg') : url($editPortfolio->portfolio_image) }}" 
                                    alt="avatar-5" class="rounded avatar-lg">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="portfolio_description" class="col-sm-2 col-form-label">Portfolio Description</label>
                                <div class="col-sm-10">
                                    <textarea name="portfolio_description" id="input_tinymce" class="form-control">{{ $editPortfolio->portfolio_description }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <hr>
                            <button type="submit" class="btn btn-info">{{ _('Update') }}</button>

                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>
@endsection