@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Portfolio Tables</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Tables</h4>
                       
                        <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @php($i = 1)
                                @foreach ($messages as $message)
                                    <tr>
                                        <td class="sorting_1 dtr-control">{{ $i++ }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ empty($message->phone) ? '-' : $message->phone }}</td>
                                        <td>{{ Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('delete.message', $message->id) }}" 
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
@endsection