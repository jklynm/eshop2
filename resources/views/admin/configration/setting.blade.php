@extends('layout.admin.master')
@section('dynamicContent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Site Configration</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Site Configration</li>
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
                        @include('layout.alert')
                        <!-- /.card-header -->
                            <!-- form start -->
                            <div class="class col-md-6">
                                <form method="post" action="{{route('configration.update',$setting->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Title</label>
                                            <input type="text" class="form-control" name="site_title" placeholder="Enter Site Title"}}" value="{{$setting->site_title ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Site Logo</label>
                                            <input type="file" class="form-control" name="logo">
                                                <img src="{{asset('storage/'.$setting->logo ?? "")}}" height="80">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$setting->email ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Additional Email</label>
                                            <input type="email" class="form-control" name="email2" placeholder="Enter Email" value="{{$setting->email2 ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputContact">Phone</label>
                                            <input type="text" class="form-control"  name="phone" placeholder="Enter Phone Number" value="{{$setting->phone ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputContact">Mobile</label>
                                            <input type="text" class="form-control"  name="mobile" placeholder="Enter Mobile Number" value="{{$setting->mobile ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputContact">Address</label>
                                            <textarea name="address" class="form-control" cols="20" placeholder="Enter Address"> {{$setting->address ?? ""}} </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Site Info</label>
                                            <textarea name="site_info" class="form-control" cols="30" placeholder="Enter Site Information"> {{$setting->site_info ?? ""}} </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Facebook URL</label>
                                            <input type="text" class="form-control" name="facebook" placeholder="Enter Facebook URL" value="{{$setting->facebook ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Twitter URL</label>
                                            <input type="text" class="form-control" name="twitter" placeholder="Enter Twitter URL" value="{{$setting->twitter ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Youtube Channel URL</label>
                                            <input type="text" class="form-control" name="youtube" placeholder="Enter Youtube Channel URL" value="{{$setting->youtube ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Instagram URL</label>
                                            <input type="text" class="form-control" name="instagram" placeholder="Enter Instagram URL" value="{{$setting->instagram ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Meta Title</label>
                                            <input type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title" value="{{$setting->meta_title ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Meta Keyword</label>
                                            <input type="text" class="form-control" name="meta_keyword" placeholder="Enter Meta Keyword" value="{{$setting->meta_keyword ?? ""}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputContact">Meta Description</label>
                                            <textarea name="meta_description" rows="7" class="form-control"  placeholder="Enter Meta Description">  {{$setting->meta_description ?? ""}} </textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer" style="background-color: rgba(0,0,0,0);">
                                        <button type="submit" class="btn btn-primary">UPDATE</button>
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
