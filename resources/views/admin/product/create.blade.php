@extends('layout.admin.master')
@section('dynamicContent')
@section('additionalcss')
    <style>.row.cardform{margin-bottom:1em !important;}</style>
@endsection
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Products </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    {{--   @if ($errors->any())
     <div class="alert alert-danger">
       <ul>
          @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
     </div>
   @endif --}}
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header" style="background: #fff;color:#333">
                                <h3 class="card-title">Add New Product &nbsp; &nbsp; <a href="{{route('user')}}"><button class="btn btn-success"><i class="fa fa-pen"></i> Manage Products</button></a></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="class col-md-8">
                                <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row cardform">
                                            <div class="col-md-6">
                                            <label>Select Category</label>
                                            <select class="form-control" name="category_id" required="">
                                                @foreach($categories as $key=>$value)
                                                    <option value="{{$value->id}}">{{$value->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputName">Product Title</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Product Title">
                                                @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row cardform">
                                            <div class="col-md-6">
                                                <label for="exampleInputName">Product Subtitle</label>
                                                <input type="text" class="form-control" name="subtitle" placeholder="Product Subtitle">
                                            </div>
                                            <div class="col-md-6">
                                            <label for="exampleInputEmail1">Product Code</label>
                                            <input type="text" class="form-control" name="code" placeholder="Enter Product Code">
                                           </div>
                                        </div>
                                        <div class="row cardform">
                                            <div class="col-md-6">
                                                <label for="exampleInputName">Product Price</label>
                                                <input type="number" class="form-control" name="price" placeholder="Enter Product Price">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Product Offer Price</label>
                                                <input type="number" class="form-control  name="offer_price" placeholder="Enter Product Offer Price">
                                            </div>
                                        </div>
                                        <div class="row cardform">
                                            <div class="col-md-6">
                                                <label for="exampleInputName">Offer Text</label>
                                                <input type="text" class="form-control" name="offer_text" placeholder="Enter Offer Text">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Product Quantity</label>
                                                <input type="text" class="form-control"  name="qty" placeholder="Enter Product Quantity">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputImage">Product Description</label>
                                            <textarea name="description"  class="form-control"  id="" cols="30" rows="10"></textarea>
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputImage">Image</label>
                                            <input type="file" class="form-control"  name="image" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Status</label> <br>
                                            <input type="radio"  name="status" value="0"> Disable
                                            <input type="radio" name="status" value="1"> Enable
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

