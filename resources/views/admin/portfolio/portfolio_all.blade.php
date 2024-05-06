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
                                <th>Portfolio Name</th>
                                <th>Title</th>
                                <th>Portfolio Image</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($allportfolio as $key => $item)
                                    <tr>
                                        <td class="sorting_1 dtr-control">{{ $key+1 }}</td>
                                        <td>{{ StringHelper::truncate($item->portfolio_name, 30) }}</td>
                                        <td>{{ StringHelper::truncate($item->portfolio_title, 45) }}</td>
                                        <td><img class="rounded avatar-lg" src="{{ ($item->portfolio_image === NULL) ? url('upload/no_image.jpg') 
                                        : url($item->portfolio_image) }}" alt="">
                                         </td>
                                         <td><?php echo substr_replace(strip_tags($item->portfolio_description), "...", 100) ?></td>
                                        <td>
                                            <a href="{{ route('edit.portfolio', $item->id) }}" class="btn btn-outline-secondary btn-sm" title="Edit">
                                                <i class="fas fa-pencil-alt" title="Edit"></i>
                                            </a>
                                            <a href="{{ route('delete.portfolio', $item->id) }}" 
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