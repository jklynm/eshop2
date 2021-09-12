@extends('layout.admin.master')
@section('dynamicContent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Category </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header" style="background: #fff;color:#333">
                                <h3 class="card-title">Add New Category &nbsp; &nbsp; <a href="{{route('category')}}"><button class="btn btn-success"><i class="fa fa-pen"></i> Manage Category</button></a></h3>
                            </div>
                        @include('layout.alert')
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="class col-md-6">
                                <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Title</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Title">
                                            @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Subtitle</label>
                                            <input type="text" class="form-control" name="subtitle" placeholder="Enter Subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputContact">Rank</label>
                                            <input type="number" class="form-control"  name="rank" placeholder="Enter Rank Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Font Icon</label>
                                            <input type="text" class="form-control" name="icon" placeholder="Enter Font Icon">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputImage">Image</label>
                                            <input type="file" class="form-control"  name="image" placeholder="Enter Image">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Display on Menu</label> <br>
                                            <input type="radio" name="approve" value="1" checked> Enable
                                            <input type="radio"  name="approve" value="0"> Disable
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Status</label> <br>
                                            <input type="radio" name="status" value="1" checked> Enable
                                            <input type="radio"  name="status" value="0"> Disable
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer" style="background-color: rgba(0,0,0,0);">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
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
