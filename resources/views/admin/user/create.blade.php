@extends('layout.admin.master')
@section('dynamicContent')
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
                            <li class="breadcrumb-item active">Create Users </li>
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
                                <h3 class="card-title">Add New User &nbsp; &nbsp; <a href="{{route('user')}}"><button class="btn btn-success"><i class="fa fa-pen"></i> Manage User</button></a></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="class col-md-6">
                                <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email">
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassowrd">Password</label>
                                            <input type="password" id="pwdInput" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                                            <input type="checkbox" id="checkbox" onclick="pwdFunction()"> Show Password

                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassowrd">Confirm Password</label>
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password">
                                            @error('password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputContact">Contact</label>
                                            <input type="text" class="form-control"  name="contact" placeholder="Enter Contact">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputImage">Image</label>
                                            <input type="file" class="form-control"  name="image" placeholder="Enter Image">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Status</label> <br>
                                            <input type="radio"  name="status" value="0"> Disable
                                            <input type="radio" name="status" value="1"> Enable
                                        </div>
                                        <div class="form-group">
                                            <label>Select Role</label>
                                                @foreach($roles as $key=>$value)
                                                &nbsp;  &nbsp;<input type="checkbox" name="role[]" id="" value="{{$value->id}}">
                                               &nbsp; {{$value->name}} @endforeach

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputStatus">Approve</label> <br>
                                            <input type="radio"  name="approve" value="0"> Disable
                                            <input type="radio" name="approve" value="1"> Enable
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
@section('scripts')
    <script>
        function pwdFunction() {
            var x = document.getElementById("pwdInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection
