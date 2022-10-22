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
                        <li class="breadcrumb-item active">Blog</li>
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
                            <h3 class="card-title">Create Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('addBlog') }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="category_id" value="{{ $blog->id }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" value="{{ $blog->title }}" name="title" placeholder="Title...">
                                </div>
                                <div class="form-group">
                                    <label for="blog_by">Blog By</label>
                                    <input type="text" class="form-control" id="blog_by" name="blog_by" value="{{ $blog->blog_by }}" placeholder="Blog By...">
                                </div>
                                <div class="form-group">
                                    <label for="short_desc">Short Desc</label>
                                    <textarea class="form-control" id="short_desc" name="short_desc" value="{{ $blog->short_desc }}" placeholder="short Desc..." rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="long_desc">Long Desc</label>
                                    <textarea class="form-control" id="long_desc" name="long_desc" value="{{ $blog->long_desc }}" placeholder="Long Desc..." rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="{{ $blog->category->id }}">-- {{ $blog->category->name }} --</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tag_id">Tags</label>
                                    <select name="tag_id" id="tag_id" class="form-control">
                                        <option value="{{ $blog->tag->id }}">-- {{ $blog->tag->name }} --</option>
                                        @foreach ($tags as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" >
                                </div>
                                <div class="form-group">
                                    <label for="category_status">Status</label>
                                    <input type="checkbox" name="is_active" {{ $blog->is_active == 1 ? 'checked' : '' }} data-bootstrap-switch data-off-color="danger" data-on-color="success">
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
                            <th>Title</th>
                            <th>Added By</th>
                            <th>Short Desc</th>
                            <th>Long Desc</th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($blogs as $item)

                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->blog_by }}</td>
                                <td>{{ $item->short_desc }}</td>
                                <td>{{ $item->long_desc }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->tag_id }}</td>

                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->is_active == 1 ? 'Active' : 'Deactive' }}</td>
                                <td>
                                    <a class="pr-4" href="{{ route('editBlog', [$item->id]) }}"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('destroyBlog', [$item->id]) }}"><i class="fa fa-trash-alt text-danger"></i></a>
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
