@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah</h4>
                    <form action="/aboutupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Icon</label>
                              <img class="img mb-3" src="{{ asset('jur/' . $data->icon) }}" alt="" style="width: 100px;">
                              <input type="file" name="icon" class="form-control" id="icon" aria-describedby="emailHelp" value="{{ $data->icon }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Judul</label>
                                <input type="text" name="judul" class="form-control" id="inputPassword4" value="{{ $data->judul }}"  placeholder="">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="inputPassword4" value="{{ $data->deskripsi }}"  placeholder="">
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

