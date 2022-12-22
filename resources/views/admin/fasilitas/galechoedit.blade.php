@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah galeri</h4>
                    <form action="/galeriechoupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Nama kegiatan</label>
                                <input type="text" name="namakegiatan" class="form-control" id="inputPassword4" value="{{ $data->namakegiatan }}"  placeholder="">
                                @error('namakegiatan')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </div>
                                 @enderror
                            </div>
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <img class="img mb-3" src="{{ asset('echo/' . $data->foto11) }}" alt="" style="width: 100px;">
                                <input type="file" name="foto11" class="form-control" id="foto11" aria-describedby="emailHelp" value="{{ $data->foto11 }}">
                                @error('foto11')
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

