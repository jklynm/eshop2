@extends('layout.admin.master')
{{-- @section('additionaljs')
adasflaskdf
@endsection --}}
@section('dynamicContent')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Categories </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    @include('layout.alert')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add New Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$category->title}}" placeholder="Enter Title">
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Subtitle</label>
                                        <input type="text" class="form-control" name="subtitle" value="{{$category->subtitle}}" placeholder="Enter Subtitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputContact">Rank</label>
                                        <input type="number" class="form-control"  name="rank" value="{{$category->rank}}" placeholder="Enter Rank Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAddress">Font Icon</label>
                                        <input type="text" class="form-control" name="icon" value="{{$category->icon}}" placeholder="Enter Font Icon">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputImage">Image</label>
                                        <input type="file" class="form-control"  name="image" placeholder="Enter Image">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputStatus">Display on Menu</label> <br>
                                        <input type="radio" name="display" value="1" {{ ($category->status=="1")? "checked" : "" }}> Enable
                                        <input type="radio"  name="display" value="0" {{ ($category->status=="0")? "checked" : "" }} > Disable
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputStatus">Status</label> <br>
                                        <input type="radio" name="status" value="1" {{ ($category->status=="1")? "checked" : "" }}> Enable
                                        <input type="radio"  name="status" value="0" {{ ($category->status=="0")? "checked" : "" }} > Disable
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer" style="background-color: rgba(0,0,0,0);">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
