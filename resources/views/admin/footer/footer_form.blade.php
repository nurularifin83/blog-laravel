@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">{{ __('Update Footer') }}</h4>
                        
                        <form action="{{ route('update.footer') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $footer->id }}">

                            <div class="row mb-3">
                                <label for="number" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" min="0" name="number" id="number" value="{{ $footer->number }}">
                                    @error('number')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="short_description" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" name="short_description" id="short_description">{{ $footer->short_description }}</textarea>
                                    @error('short_description')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="address" id="address" value="{{ $footer->address }}">
                                    @error('address')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="copyright" class="col-sm-2 col-form-label">Copyright</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="copyright" id="copyright" value="{{ $footer->copyright }}">
                                    @error('copyright')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" id="email" value="{{ $footer->email }}">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->
                            
                            <div class="row mb-3">
                                <label for="facebook" class="col-sm-2 col-form-label">Facebook URL</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="url" name="facebook" id="facebook" value="{{ $footer->facebook }}">
                                    @error('facebook')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="twitter" class="col-sm-2 col-form-label">Twitter URL</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="url" name="twitter" id="twitter" value="{{ $footer->twitter }}">
                                    @error('twitter')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="linkedin" class="col-sm-2 col-form-label">Linkedin URL</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="url" name="linkedin" id="linkedin" value="{{ $footer->linkedin }}">
                                    @error('linkedin')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="instagram" class="col-sm-2 col-form-label">Instagram URL</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="url" name="instagram" id="instagram" value="{{ $footer->instagram }}">
                                    @error('instagram')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
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