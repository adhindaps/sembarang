@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Fasilitas</h4>
                    <form action="/fasilitasupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <img class="img mb-3" src="{{ asset('foto/' . $data->foto) }}" alt="" style="width: 100px;">
                                <input type="file" name="foto" class="form-control" id="foto" aria-describedby="emailHelp" value="{{ $data->foto }}">
                              </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputPassword4" value="{{ $data->nama }}"  placeholder="">
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
