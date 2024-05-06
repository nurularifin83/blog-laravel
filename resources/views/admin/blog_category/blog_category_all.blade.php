@extends('admin.admin_master')
@section('admin')
@php
    $route = Route::current()->getName();

    $categories = App\Models\BlogCategory::orderBy('created_at', 'desc')->get()
@endphp
<div class="page-content">
    <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Blog Categories</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">

                        @if ($route == 'edit.blog.category')
                            <h4 class="card-title">Edit Category</h4>
                            <hr>

                            <form action="{{ route('update.blog.category', $categoryEdit->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <input type="hidden" name="id" value="{{ $categoryEdit->id }}">

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Portfolio Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{ $categoryEdit->name }}" id="name">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->
                                <hr>
                                <button type="submit" class="btn btn-info">{{ _('Update') }}</button>
                            </form>
                        @else
                            <h4 class="card-title">Add New Category</h4>
                            <hr>

                            <form action="{{ route('store.blog.category') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Portfolio Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" id="name">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->
                                <hr>
                                <button type="submit" class="btn btn-info">{{ _('Add New Category') }}</button>
                            </form>
                        @endif

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Tables</h4>
                       
                        <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <td class="sorting_1 dtr-control">{{ $key + 1 }}</td>
                                        <td>{{ StringHelper::truncate($category->name, 30) }}</td>
                                        <td>
                                            <a href="{{ route('edit.blog.category', $category->id) }}" class="btn btn-outline-secondary btn-sm" title="Edit">
                                                <i class="fas fa-pencil-alt" title="Edit"></i>
                                            </a>
                                            <a href="{{ route('delete.blog.category', $category->id) }}" 
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