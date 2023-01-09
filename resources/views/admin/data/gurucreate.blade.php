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
                                <i style="float: left;font-size:12px;color:red">ukuran Foto Harus 200px x 200 px</i>
                                @error('fotoguru')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </div>
                                 @enderror

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
                                      <select class="form-control" name="status_id">
                                        @foreach ($status as $st )
<option value="{{$st->id}}">{{$st->status}}</option>
                                            
                                        @endforeach
                                      </select>
                                      @error('status_id')
                                      <div class="alert alert-danger" role="alert">
                                          <strong>{{ $message }}</strong> 
                                      </div>
                                       @enderror
                                    </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Jabatan</label>
                                <select class="form-control" name="jabatan_id">
                                    @foreach ($jabatan as $jt )
                                    <option value="{{$jt->id}}">{{$jt->jabatan}}</option>
                                                                                
                                                                            @endforeach
                                </select>
                                @error('jabatan_id')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </div>
                                 @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4"> Sub Jabatan</label>
                                <select class="form-control" name="subjabatan_id">
                                    @foreach ($subjabatan as $stb )
<option value="{{$stb->id}}">{{$stb->subjabatan}}</option>
                                            
                                        @endforeach
                                </select>
                                {{-- @error('subjabatan')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </div>
                                 @enderror --}}
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
