<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Welcome {{\Illuminate\Support\Facades\Auth::user()->name}}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            CATEGORY
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">{{$categories->count()}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @php $user = Auth::user();@endphp

                       @if($user->can('create-category'))
                        <li class="nav-item">
                            <a href="{{route('category.create')}}" class="nav-link">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        @endif
                        @if($user->can('view-category'))
                        <li class="nav-item">
                            <a href="{{route('category')}}" class="nav-link">
                                <i class="fa fa-pen nav-icon"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p>
                            PRODUCT
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">{{$products->count()}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @php $user = Auth::user();@endphp

                        @if($user->can('create-category'))
                            <li class="nav-item">
                                <a href="{{route('product.create')}}" class="nav-link">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                        @endif
                        @if($user->can('view-category'))
                            <li class="nav-item">
                                <a href="{{route('product')}}" class="nav-link">
                                    <i class="fa fa-pen nav-icon"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-image"></i>
                        <p>
                            SLIDER
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">{{$users->count()}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('slider.create')}}" class="nav-link">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('slider.index')}}" class="nav-link">
                                <i class="fa fa-pen nav-icon"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-image"></i>
                        <p>
                            PAGE
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">{{$users->count()}}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('page.create')}}" class="nav-link">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('page.index')}}" class="nav-link">
                                <i class="fa fa-pen nav-icon"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>
                            CONTACTS
                        </p>
                    </a>
                </li>

{{--               @if($user->can('manage-userroles'))--}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-edit"></i>
                            <p>
                                USER
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{$users->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('user.create')}}" class="nav-link">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('user')}}" class="nav-link">
                                    <i class="fa fa-pen nav-icon"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-lock"></i>
                            <p>
                                ROLE
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{$roles->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('role.create')}}" class="nav-link">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('role')}}" class="nav-link">
                                    <i class="fa fa-pen nav-icon"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-key"></i>
                            <p>
                                PERMISSION
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{$permissions->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('permission.create')}}" class="nav-link">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('permission')}}" class="nav-link">
                                    <i class="fa fa-pen nav-icon"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="nav-item">
                    <a href="{{route('configration.setting')}}" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            SITE CONFIGRATION
                        </p>
                    </a>
                </li>
                    <li class="nav-item">
                    <a href="{{route('user.getChangePassword')}}" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>
                            CHANGE PASSWORD
                        </p>
                    </a>
                </li>
{{--                @endif--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
