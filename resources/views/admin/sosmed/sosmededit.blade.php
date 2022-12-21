@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Sosmed</h4>
                    <form action="/sosmedupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Icon</label>
                                <img class="img mb-3" src="{{ asset('foto/' . $data->icon) }}" alt="" style="width: 100px;">
                                <input type="file" name="icon" class="form-control" id="icon" aria-describedby="emailHelp" value="{{ $data->icon }}">
                                @error('icon')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </div>
                                 @enderror
                              </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Sosmed</label>
                                <input type="text" name="sosmed" class="form-control" id="inputPassword4" value="{{ $data->sosmed }}"  placeholder="">
                                @error('sosmed')
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

