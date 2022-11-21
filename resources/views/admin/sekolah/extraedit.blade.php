@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Extrakulikuler</h4>
                    <form action="/extraupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Foto</label>
                              <img class="img mb-3" src="{{ asset('foto/' . $data->fotoex) }}" alt="" style="width: 100px;">
        <input type="file" name="fotoex" class="form-control" id="fotoex" aria-describedby="emailHelp" value="{{ $data->fotoex }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Extra</label>
                                <input type="text" name="extra" class="form-control" id="inputPassword4" value="{{ $data->extra }}"  placeholder="">
                              </div>
                            <div class="form-group col-md-12">
                                <label for="editor">Deskripsi</label>
                                <textarea name="deskripsi" id="editor">{!!  $data->deskripsi !!}</textarea>
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
@endsection

@section('ck-editor')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection