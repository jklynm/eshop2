@extends('layout.admin.master')
@section('datatablecss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@section('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
@section('dynamicContent')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manage Pages </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @include('layout.alert')
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Manage Page &nbsp; &nbsp; <a href="{{route('page.create')}}"><button class="btn btn-success"><i class="fa fa-pen"></i> Add Page</button></a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $index=>$val)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$val->title}}
                            </td>
                            <td>{{$val->subtitle}}</td>
                            <td>
                                @if(file_exists('storage/'.$val->image) && $val->image !== '' && $val->image !== null)
                                    <img src="{{asset('storage/'.$val->image)}}" height="70">

                                @else
                                    <img src="{{asset('frontend/images/dummy.jpg')}}" style="border:solid 1px #ddd;">

                                @endif
                            </td>
                            <td>@if($val->status == 0)
                                    <button class="btn btn-danger">Disable</button>
                                @else <button class="btn btn-success">Enable</button>
                                @endif</td>
                            {{-- <td><a class="btn btn-info" href="{{route('category.edit',$val->slug)}}"><i class="fa fa-edit"></i></a> &nbsp; <a href="#" class="btn btn-danger"><i class="fa fa-times" data-toggle="modal" data-target="#exampleModal-{{$index}}"></i></a></td>--}}
                            <td><a class="btn btn-info" href="{{route('page.edit',$val->id)}}"><i class="fa fa-edit"></i></a> &nbsp; <a href="#" class="btn btn-danger"><i class="fa fa-times" data-toggle="modal" data-target="#exampleModal-{{$index}}"></i></a></td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    @foreach($pages as $index=>$val)
        <div class="modal fade" id="exampleModal-{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Page</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to delete this Page?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('page.index')}}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
                        <a href="{{route('page.delete',$val->id)}}"><button type="button" class="btn btn-primary">Delete</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
