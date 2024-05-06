@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Posts <a href="{{ route('add.post') }}" class="btn btn-outline-secondary btn-sm ms-2 waves-effect">Add New</a></h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- <h4 class="card-title">Posts</h4> --}}
                       
                        <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Categories</th>
                                <th><i class="ri-chat-3-fill"></i></th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->post_title }}</td>
                                        <td>{{ $post->user_name }}</td>
                                        <td>{{ $post->category_name }}</td>
                                        <td><a href="#">{{ _('0') }}</a></td>
                                        <td>{{ ucwords($post->post_status) }}<br>{{ date('Y/m/d', strtotime($post->created_at)); }} at {{ date('H:i a', strtotime($post->created_at)); }}</td>
                                        <td>
                                            <a href="{{ route('edit.post', $post->id) }}" class="btn btn-outline-secondary btn-sm" title="Edit">
                                                <i class="fas fa-pencil-alt" title="Edit"></i>
                                            </a>
                                            <a href="{{ route('delete.post', $post->id) }}" 
                                                class="btn btn-outline-danger btn-sm" 
                                                id="delete" title="Delete">
                                                <i class="fas fa-trash-alt" title="Delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection