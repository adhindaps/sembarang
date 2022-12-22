@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">GURU</h4>
                    <form action="/gurustore" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <input type="file" id="fotoguru" name="fotoguru" class="form-control" >

                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Nama</label>
                              <input type="text" name="nama" class="form-control" id="inputPassword4"  placeholder="">
                              @error('nama')
                              <div class="alert alert-danger" role="alert">
                                  <strong>{{ $message }}</strong> 
                              </div>
                               @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">NIP</label>
                            <input type="text" name="nip" class="form-control" id="inputPassword4"  placeholder="">
                            @error('nip')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong> 
                            </div>
                             @enderror
                        </div>
                              
                              <div class="form-group col-md-6">
                                  <label for="inputPassword4">TMP Lahir</label>
                                  <input type="text" name="tmplahir" class="form-control" id="inputPassword4"  placeholder="">
                                  @error('tmplahir')
                                  <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong> 
                                  </div>
                                   @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">TGL Lahir</label>
                                    <input type="text" name="tgllahir" class="form-control" id="inputPassword4"  placeholder="">
                                    @error('tgllahir')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </div>
                                     @enderror
                                </div>
                                  <div class="form-group col-md-6">
                                      <label for="inputPassword4">Status</label>
                                      <input type="text" name="status" class="form-control" id="inputPassword4"  placeholder="">
                                      @error('status')
                                      <div class="alert alert-danger" role="alert">
                                          <strong>{{ $message }}</strong> 
                                      </div>
                                       @enderror
                                    </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="inputPassword4"  placeholder="">
                                @error('jabatan')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </div>
                                 @enderror
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                             
                            </div>
                        </div>
                    </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    </div>
    
@include('admin.footeradmin')
@endsection
