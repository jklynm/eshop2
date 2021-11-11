@extends('layout.admin.master')
@section('dynamicContent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Page </li>
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
                            <!-- form start -->
                            <div class="class col-md-6">
                                <form method="post" action="{{route('page.update',$pages->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$pages->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Subtitle</label>
                                            <input type="text" class="form-control" name="subtitle" placeholder="Enter Subtitle" value="{{$pages->subtitle}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputImage">Product Description</label>
                                            <textarea name="description"  class="form-control"  id="" cols="30" rows="10">{{$pages->description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputImage">Image</label>
                                            <input type="file" class="form-control"  name="image" placeholder="Enter Image">
                                            @if(file_exists('storage/'.$pages->image) && $pages->image !== '' && $pages->image !== null)
                                                <img src="{{asset('storage/'.$pages->image)}}" height="80">

                                            @else
                                                <img src="{{asset('frontend/images/dummy.jpg')}}" style="border:solid 1px #ddd;">

                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Status</label> <br>
                                            <input type="radio" name="status" value="1" {{ ($pages->status=="1")? "checked" : "" }}> Enable
                                            <input type="radio"  name="status" value="0" {{ ($pages->status=="0")? "checked" : "" }} > Disable
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer" style="background-color: rgba(0,0,0,0);">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
