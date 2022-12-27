@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat Datang Kembali {{ Auth::user()->name }}!</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Beranda</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            {{-- <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 19</option>
                        <option value="1">July 19</option>
                        <option value="2">Jun 19</option>
                    </select>
                </div>
            </div> --}}
        </div>
    </div>
<div class="container-fluid">
    
    <!-- *************************************************************** -->
    <!-- Start First Cards -->
    <!-- *************************************************************** -->
    <div class="card-group">
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">{{ $jumlahguru }}</h2>
                            </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Guru</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">{{ $jumlahjurusan }}</h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jurusan
                        </h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">{{ $jumlahberita }}</h2>
                           </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Berita</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 font-weight-medium">{{ $jumlahmitra }}</h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Kerjasama</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End First Cards -->
         {{-- <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kompetensi Keahlian</h4>
                                <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                                <ul class="list-style-none mb-0">
                                    <li>
                                        <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                        <span class="text-muted">SIJA</span>
                                        <span class="text-dark float-right font-weight-medium">6</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                        <span class="text-muted">TKJ</span>
                                        <span class="text-dark float-right font-weight-medium">6</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                        <span class="text-muted">MM</span>
                                        <span class="text-dark float-right font-weight-medium">7</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">kegiatan</h4>
                                <div class="net-income mt-4 position-relative" style="height:294px;"></div>
                          
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Earning by Location</h4>
                            
                                <div class="row mb-3 align-items-center mt-1 mt-5">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">India</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">28%</span>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">USA</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 60%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">18%</span>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">USA</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 60%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">18%</span>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">USA</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 60%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">18%</span>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">UK</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 74%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">21%</span>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">USA</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 60%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">18%</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">China</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">12%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
    <!-- *************************************************************** -->
  
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-3 border-right pr-0">
                                <div class="card-body border-bottom">
                                    <h4 class="card-title mt-2">Drag & Drop Event</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="calendar-events" class="">
                                                <div class="calendar-events mb-3" data-class="bg-info"><i
                                                        class="fa fa-circle text-info mr-2"></i>Event One</div>
                                                <div class="calendar-events mb-3" data-class="bg-success"><i
                                                        class="fa fa-circle text-success mr-2"></i> Event Two
                                                </div>
                                                <div class="calendar-events mb-3" data-class="bg-danger"><i
                                                        class="fa fa-circle text-danger mr-2"></i>Event Three
                                                </div>
                                                <div class="calendar-events mb-3" data-class="bg-warning"><i
                                                        class="fa fa-circle text-warning mr-2"></i>Event Four
                                                </div>
                                            </div>
                                            <!-- checkbox -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="drop-remove">
                                                <label class="custom-control-label" for="drop-remove">Remove
                                                    after drop</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="card-body b-l calender-sidebar">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">Top Leaders</h4>
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                    id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                    <a class="dropdown-item" href="#">Insert</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted">Team Lead
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Project
                                    </th>
                                     <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                        Status
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                        Weeks
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Budget</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-top-0 px-2 py-4">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="mr-3"><img
                                                    src="assets/images/users/widget-table-pic1.jpg"
                                                    alt="user" class="rounded-circle" width="45"
                                                    height="45" /></div>
                                            <div class="">
                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                    Gover</h5>
                                                <span class="text-muted font-14">hgover@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-top-0 text-muted px-2 py-4 font-14">Elite Admin</td>
                                    
                                    <td class="border-top-0 text-center px-2 py-4"><i
                                            class="fa fa-circle text-primary font-12" data-toggle="tooltip"
                                            data-placement="top" title="In Testing"></i></td>
                                    <td
                                        class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                        35
                                    </td>
                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">$96K
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-4">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="mr-3"><img
                                                    src="assets/images/users/widget-table-pic2.jpg"
                                                    alt="user" class="rounded-circle" width="45"
                                                    height="45" /></div>
                                            <div class="">
                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">Daniel
                                                    Kristeen
                                                </h5>
                                                <span class="text-muted font-14">Kristeen@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-muted px-2 py-4 font-14">Real Homes WP Theme</td>
                                   
                                    <td class="text-center px-2 py-4"><i
                                            class="fa fa-circle text-success font-12" data-toggle="tooltip"
                                            data-placement="top" title="Done"></i>
                                    </td>
                                    <td class="text-center text-muted font-weight-medium px-2 py-4">32</td>
                                    <td class="font-weight-medium text-dark px-2 py-4">$85K</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-4">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="mr-3"><img
                                                    src="assets/images/users/widget-table-pic3.jpg"
                                                    alt="user" class="rounded-circle" width="45"
                                                    height="45" /></div>
                                            <div class="">
                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">Julian
                                                    Josephs
                                                </h5>
                                                <span class="text-muted font-14">Josephs@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-muted px-2 py-4 font-14">MedicalPro WP Theme</td>
                                   
                                    <td class="text-center px-2 py-4"><i
                                            class="fa fa-circle text-primary font-12" data-toggle="tooltip"
                                            data-placement="top" title="Done"></i>
                                    </td>
                                    <td class="text-center text-muted font-weight-medium px-2 py-4">29</td>
                                    <td class="font-weight-medium text-dark px-2 py-4">$81K</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-4">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="mr-3"><img
                                                    src="assets/images/users/widget-table-pic4.jpg"
                                                    alt="user" class="rounded-circle" width="45"
                                                    height="45" /></div>
                                            <div class="">
                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">Jan
                                                    Petrovic
                                                </h5>
                                                <span class="text-muted font-14">hgover@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-muted px-2 py-4 font-14">Hosting Press HTML</td>
                                  
                                    <td class="text-center px-2 py-4"><i
                                            class="fa fa-circle text-danger font-12" data-toggle="tooltip"
                                            data-placement="top" title="In Progress"></i></td>
                                    <td class="text-center text-muted font-weight-medium px-2 py-4">23</td>
                                    <td class="font-weight-medium text-dark px-2 py-4">$80K</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
    <!-- *************************************************************** -->
    <!-- End Top Leader Table -->
    <!-- *************************************************************** -->
</div>
@include('admin.footeradmin')
@endsection