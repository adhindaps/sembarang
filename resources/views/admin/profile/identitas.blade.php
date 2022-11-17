@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/identitas" method="post" enctype="multipart/form-data">
                        @csrf
                    <h4 class="card-title">Profile Sekolah</h4>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Nama Sekolah</label>
                              <input type="text" name="nama" class="form-control" id="inputPassword4"  placeholder="">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Status</label>
                              <input type="text" name="status" class="form-control" id="inputEmail4"  placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">NPNS</label>
                              <input type="text" name="NPNS" class="form-control" id="inputPassword4"  placeholder="">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Akreditasi</label>
                              <input type="text" name="akreditasi" class="form-control" id="inputEmail4" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">NSS</label>
                              <input type="text" name="NSS" class="form-control" id="inputPassword4" placeholder="">
                            </div>
                          </div>
                          <h4 class="card-title">Alamat Sekolah</h4>
                          <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Alamat Sekolah</label>
                                <input type="text" name="alamat" class="form-control" id="inputPassword4" placeholder="">
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label for="inputPassword4">Kode</label>
                                  <input type="text" name="kode" class="form-control" id="inputPassword4" placeholder="">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label for="inputPassword4">No Tlpn</label>
                                  <input type="text" name="no" class="form-control" id="inputPassword4" placeholder="">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label for="inputPassword4">Email</label>
                                  <input type="text" name="email" class="form-control" id="inputPassword4" placeholder="">
                                </div>
                              </div>
                          <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    </div>
@endsection