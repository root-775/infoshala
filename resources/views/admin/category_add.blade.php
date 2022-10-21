@extends('admin.include.master')

@section('content')
    @section('style')
    <link rel="stylesheet" href="{{ asset('admin/plugins/data-table/jquery.dataTables.min.css') }}">
    @endsection




    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {{-- main div --}}

            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('addCategory') }}" method="POST">@csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="category_status">Status</label>
                                    <input type="checkbox" name="category_status" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>





            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S. No.</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($category as $item)

                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->is_active == 1 ? 'Active' : 'Deactive' }}</td>
                                <td>
                                    <a class="pr-4" href="{{ route('editCategory', [$item->id]) }}"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('destroyCategory', [$item->id]) }}"><i class="fa fa-trash-alt text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>




            {{-- main div --}}
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

    @section('script')
        <script src="{{ asset('admin/plugins/data-table/jquery.dataTables.min.js') }}"></script>
        <script>
            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });


            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
    @endsection
@endsection
