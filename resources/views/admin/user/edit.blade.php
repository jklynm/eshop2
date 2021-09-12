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
                            <li class="breadcrumb-item active">Edit Users </li>
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
                                <h3 class="card-title">Edit User &nbsp; &nbsp; <a href="{{route('user.create')}}"><button class="btn btn-success"><i class="fa fa-plus"></i> Create User</button></a></h3>
                            </div>

                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="class col-md-6">
                                <form method="post" action="{{route('user.update',$users->id)}}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name}}" placeholder="Enter Name">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email}}" placeholder="Enter Email">
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassowrd">Password</label>
                                            <input type="password" id="pwdInput" class="form-control @error('password') is-invalid @enderror" value="{{$users->password}}" name="password" placeholder="Enter Password">
                                            <input type="checkbox" id="checkbox" onclick="pwdFunction()"> Show Password
                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
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
                                        <div class="form-group">
                                            <label for="exampleInputContact">Contact</label>
                                            <input type="text" class="form-control" value="{{$users->contact}}" name="contact" placeholder="Enter Contact">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Address</label>
                                            <input type="text" class="form-control" name="address" value="{{$users->address}}" placeholder="Enter Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputImage">Image</label>
                                            <input type="file" class="form-control" name="image" placeholder="Enter Image">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Status</label> <br>
                                            <input type="radio"  name="status" value="0" {{ ($users->status=="0")? "checked" : "" }} > Disable
                                            <input type="radio" name="status" value="1" {{ ($users->status=="1")? "checked" : "" }}> Enable
                                        </div>
                                        <div class="form-group">
                                            <label>Select Role</label>
                                            @foreach($roles as $role)
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="role[]" value="{{$role->id}}" {{in_array($role->id,$checkedroles)?'checked':''}}>
                                                        {{$role->name}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Approve</label> <br>
                                            <input type="radio"  name="approve" value="0" {{ ($users->approve=="0")? "checked" : "" }}> Disable
                                            <input type="radio" name="approve" value="1" {{ ($users->approve=="1")? "checked" : "" }}> Enable
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
