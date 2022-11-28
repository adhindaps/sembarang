@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah</h4>
                    <form action="/kajurupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Foto</label>
                              <img class="img mb-3" src="{{ asset('foto/' . $data->fotokajur) }}" alt="" style="width: 100px;">
                              <input type="file" name="fotokajur" class="form-control" id="fotokajur" aria-describedby="emailHelp" value="{{ $data->fotokajur }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputPassword4" value="{{ $data->nama }}"  placeholder="">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">NIP</label>
                                <input type="text" name="nip" class="form-control" id="inputPassword4" value="{{ $data->nip }}"  placeholder="">
                              </div>
                              <div class="form-group col-md-12">
                               <label for="defaultFormControlInput" class="form-label">Jabatan</label>
                               <select class="form-control" name="id_jurusan">
                                @foreach($datajurusan as $dj)
                                <option value="{{ $dj->id }}" @if ($data->jurusan->id == $dj->id) selected @endif>
                                {{ $dj->jurusan }}
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
{{-- 
@section('ck-editor')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script> --}}

