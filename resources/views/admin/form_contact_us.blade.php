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
                        <li class="breadcrumb-item active">Tag</li>
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


            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S. No.</th>
                            <th>Name</th>
                            <th>Email-ID</th>
                            <th>Phone Number</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($contactUs as $item)

                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->subject }}</td>
                                <td>{{ $item->message }}</td>
                                <td>{{ $item->add_date }}</td>
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
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
    @endsection
@endsection
