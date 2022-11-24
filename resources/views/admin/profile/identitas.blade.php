@extends('admin.indexadmin')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updateprofile" method="post" enctype="multipart/form-data">
                                @csrf
                                <h4 class="card-title">Profile Sekolah</h4>
                                <input type="text" value="{{ $data->id }}" name="id" class="form-control"
                                    id="inputPassword4" placeholder="" hidden>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Nama Sekolah</label>
                                        <input type="text" value="{{ $data->nama }}" name="nama"
                                            class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Status</label>
                                        <input type="text" value="{{ $data->status }}" name="status"
                                            class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">NPNS</label>
                                        <input type="text" value="{{ $data->NPNS }}" name="NPNS"
                                            class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Akreditasi</label>
                                        <input type="text" value="{{ $data->akreditasi }}" name="akreditasi"
                                            class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">NSS</label>
                                        <input type="text" value="{{ $data->NSS }}" name="NSS"
                                            class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <h4 class="card-title">Alamat Sekolah</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Alamat Sekolah</label>
                                        <input type="text" value="{{ $data->alamat }}" name="alamat"
                                            class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Kode</label>
                                        <input type="text" value="{{ $data->kode }}" name="kode"
                                            class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">No Tlpn</label>
                                        <input type="text" value="{{ $data->no }}" name="no"
                                            class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Email</label>
                                        <input type="text" value="{{ $data->email }}" name="email"
                                            class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footeradmin')
@endsection
