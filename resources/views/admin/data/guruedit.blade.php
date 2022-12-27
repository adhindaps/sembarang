@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">GURU</h4>
                    <form action="/guruupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <img class="img mb-3" src="{{ asset('guru/' . $data->fotoguru) }}" alt="" style="width: 100px;">
                                <input type="file" name="fotoguru" class="form-control" id="fotoguru" aria-describedby="emailHelp" value="{{ $data->fotoguru }}">
                                <i style="float: left;font-size:12px;color:red">Abaikan Jika Tidak Merubah Foto</i>
                             
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Nama</label>
                              <input type="text" name="nama" class="form-control" id="inputPassword4" value="{{ $data->nama }}" placeholder="">
                              @error('nama')
                              <div class="alert alert-danger" role="alert">
                                  <strong>{{ $message }}</strong> 
                              </div>
                               @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">NIP</label>
                                <input type="text" name="nip" class="form-control" id="inputPassword4" value="{{ $data->nip }}" placeholder="">
                                @error('nip')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </div>
                                 @enderror
                            </div>
                              <div class="form-group col-md-6">
                                  <label for="inputPassword4">TMP Lahir</label>
                                  <input type="text" name="tmplahir" class="form-control" id="inputPassword4" value="{{ $data->tmplahir }}" placeholder="">
                                  @error('tmplahir')
                                  <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong> 
                                  </div>
                                   @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">TGL Lahir</label>
                                    <input type="text" name="tgllahir" class="form-control" id="inputPassword4" value="{{ $data->tgllahir }}" placeholder="">
                                    @error('tgllahir')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </div>
                                     @enderror
                                </div>
                                  <div class="form-group col-md-6">
                                      <label for="inputPassword4">Status</label>
                                      <select class="form-control" name="status_id">
                                        @foreach($guru as $dj)
                                        <option value="{{ $dj->id }}" @if ($data->status->id == $dj->id) selected @endif>
                                        {{ $dj->status }}
                                    </option>
                                    @endforeach
                                       </select>
                                    </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Jabatan</label>
                                <select class="form-control" name="jabatan_id">
                                    @foreach($jabatan as $dj)
                                    <option value="{{ $dj->id }}" @if ($data->jabatan->id == $dj->id) selected @endif>
                                    {{ $dj->jabatan }}
                                </option>
                                @endforeach
                                   </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Sub Jabatan</label>
                                <select class="form-control" name="subjabatan_id">
                                    @foreach($subjabatan as $dj)
                                    <option value="{{ $dj->id }}" @if ($data->subjabatan->id == $dj->id) selected @endif>
                                    {{ $dj->subjabatan }}
                                </option>
                                @endforeach
                                   </select>
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
