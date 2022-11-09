
@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- basic table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Siswa Berprestasi</h4>
                    
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Juara</th>
                                    <th>Bidang</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Queen Shanaya</td>
                                    <td>Juara 3</td>
                                    <td>Matematika</td>
                                    <td>2011/04/25</td>
                                    <td><a href="" >Hapus</a></td>
                                </tr>
                               
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Medali </td>
                                    <td>Karate</td>
                                    <td>2011/01/25</td>
                                    <td><a href="" >Hapus</a></td>
                                </tr>
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection