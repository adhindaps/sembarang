@extends('admin.indexadmin')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <body>
                <div class="container">
                    <div class="content-wrapper">
                        <!--breadcrumb-->
                        <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                            <div class="breadcrumb-title pe-3">User Profile</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                                        </li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!--end breadcrumb-->
                        <div class="user-profile-page">
                            <div class="card radius-15">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 border-right mb-4">
                                            <div class="d-md-flex align-items-center">
                                                <div class="mb-md-0 mb-3">
                                                    <img src="foto/smklogo.jpg "
                                                        class="rounded-circle shadow" width="130" height="130"
                                                        alt="" />
                                                </div>
                                                <div class="ms-md-4 flex-grow-1">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h4 class="mb-0">{{ Auth::user()->username }}</h4>
                                                        <p class="mb-0 ms-auto"></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-5">
                                            <table class="table table-sm table-borderless mt-md-0 mt-3">
                                                <tbody>
                                                    <tr>
                                                        <th>Nama  :</th>
                                                        <td>{{ Auth::user()->name }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email :</th>
                                                        <td>{{ Auth::user()->email }}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <ul class="nav nav-pills">
                                                <a href="/gantipass" class="btn btn-outline-primary mr-2 ">Ganti Password</a>
                                            </ul>
        
                                        </div>
                                    </div>

                                    <!--end row-->
                                   
                                </div>
                            </div>
                        </div>
    </div>
    @include('admin.footeradmin')
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
@endsection
