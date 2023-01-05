@extends('superadmin.superadmin_master')
@section('superadmin')

<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color:#ffc107;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('assets/images/logo_poliwangi.png')}}" alt="TI POLIWANGI"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TI POLIWANGI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{Auth::user()->profile_photo_url}}" class="img-circle elevation-2"
                    alt="{{Auth::user()->name }}">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name }}
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-center" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('super.dashboard')}}" class="nav-link active text-dark" style="background:yellow;">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.view')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Jumlah User
                        </p>
                    </a>
                </li>
                <li class="nav-item fixed-bottom">
                    <a href="{{route('logout')}}" class="nav-link bg-secondary" style="margin-left: 6px;">
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper" style="background: grey;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background: #ffc107;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="content" style="text-colour: black;">Tambah User</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid pt-4 px-4">
            <div class="row">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <form method="post" action="{{route('users.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Roles</label>
                                    <select name="selectUser" id="selectUser" class="form-select mb-3"
                                        aria-label="Default select example">
                                        <option selected="">Pilih Roles </option>
                                        <option value="Super Admin">Super Admin</option>
                                        <option value="Admin Jurusan">Admin Jurusan</option>
                                        <option value="Kajur">Kajur</option>
                                        <option value="Kaprodi">Kaprodi</option>
                                        <option value="Dosen">Dosen</option>
                                    </select>
                                </div>
                            </div>
                            <span class="text-danger text-bold">*</span> (<span class="text-warning text-bold">Wajib
                                dipilih salah satu!</span>)
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputName" class="form-label">Username</label>
                                    <div>
                                        <input type="text" name="textNama" class="form-control" placeholder="Nama User"
                                            aria-label="textNama" aria-describedby="basic-addon1" required>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email
                                                    </label>
                                                    <input type="email" name="email" class="form-control" id="email"
                                                        aria-describedby="emailHelp" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
