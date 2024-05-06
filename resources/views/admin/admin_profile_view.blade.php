@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <center>
                        <img src="{{ ($adminData->profile_image === NULL) ? url('upload/no_image.jpg'):url('upload/admin_images/'.$adminData->profile_image) }}"
                         alt="avatar-5" class="rounded-circle avatar-xl mt-5" data-holder-rendered="true">
                    </center>
                    <div class="card-body">
                        <h4 class="card-title">Name         : {{ $adminData->name }}</h4>
                        <hr>
                        <h4 class="card-title">User Email   : {{ $adminData->email }}</h4>
                        <hr>
                        <h4 class="card-title">User Name    : {{ $adminData->username }}</h4>
                        <hr>
                        <a href="{{ route('edit.profile') }}" class="btn btn-info">{{ _('Edit Profile') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection