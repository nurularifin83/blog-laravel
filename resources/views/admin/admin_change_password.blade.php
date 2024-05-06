@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">{{ __('Update Password Page') }}</h4>

                        @if(count($errors))
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-alert-outline me-2"></i> {{ $error }}
                                </p>
                            @endforeach
                        @endif
                        
                        <form action="{{ route('update.password') }}" method="post">
                            @csrf
                            @method('put')

                            <div class="row mb-3">
                                <label for="current_password" class="col-sm-2 col-form-label">{{ __('Current Password') }}</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="current_password" id="current_password" autocomplete="current-password">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label">{{ __('New Password') }}</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password" id="password" autocomplete="new-password">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="password_confirmation" class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>
                            <!-- end row -->
                            <hr>

                            <button type="submit" name="update_password" class="btn btn-info">{{ __('Save') }}</button>

                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>
@endsection