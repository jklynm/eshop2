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
                            <li class="breadcrumb-item active">Change Password </li>
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
                                <h3 class="card-title">Change Password&nbsp; &nbsp;</h3>
                            </div>

                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="class col-md-6">
                                <form method="post" action="{{route('user.getChangePassword')}}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputPassowrd">Old Password</label>
                                            <input type="text" id="currentpassword" class="form-control @error('oldpassword') is-invalid @enderror" value="" name="oldpassword" placeholder="Enter Current Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassowrd">New Password</label>
                                            <input type="text" id="pwdInput" class="form-control @error('password') is-invalid @enderror" value="" name="newpassword" placeholder="New Password">
                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassowrd">Confirm Password</label>
                                            <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password">
                                            @error('password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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
