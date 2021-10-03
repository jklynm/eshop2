@extends('layout.admin.master')
@section('dynamicContent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Slider</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Slider </li>
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
                                <form method="post" action="{{route('slider.update',$sliders->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$sliders->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Caption</label>
                                            <input type="text" class="form-control" name="caption" placeholder="Enter Subtitle" value="{{$sliders->caption}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputContact">Rank</label>
                                            <input type="number" class="form-control"  name="rank" placeholder="Enter Rank Number" value="{{$sliders->rank}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputImage">Slider Image</label>
                                            <input type="file" class="form-control"  name="image" placeholder="Enter Image">
                                            @if(file_exists('storage/'.$sliders->image) && $sliders->image !== '' && $sliders->image !== null)
                                                <img src="{{asset('storage/'.$sliders->image)}}" height="80">

                                            @else
                                                <img src="{{asset('frontend/images/dummy.jpg')}}" style="border:solid 1px #ddd;">

                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Status</label> <br>
                                            <input type="radio" name="status" value="1" {{ ($sliders->status=="1")? "checked" : "" }}> Enable
                                            <input type="radio"  name="status" value="0" {{ ($sliders->status=="0")? "checked" : "" }} > Disable
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
