@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Galeri Axio</h4>
                    <form action="/galeriaxiostore" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Nama kegiatan</label>
                              <input type="text" name="namakegiatan" class="form-control" id="inputPassword4"  placeholder="">
                              @error('namakegiatan')
                              <div class="alert alert-danger" role="alert">
                                  <strong>{{ $message }}</strong> 
                              </div>
                               @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <input type="file" id="foto1" name="foto1" class="form-control" >
                                <i style="float: left;font-size:12px;color:red">ukuran Foto Harus 200px x 200 px</i>
                             
                                @error('foto1')
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

