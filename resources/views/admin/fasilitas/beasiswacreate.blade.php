@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BEASISWA</h4>
                    <form action="/beasiswastore" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Judul</label>
                              <input type="text" name="name" class="form-control" id="inputPassword4"  placeholder="">
                              @error('name')
                              <div class="alert alert-danger" role="alert">
                                  <strong>{{ $message }}</strong> 
                              </div>
                               @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <input type="file" id="foto" name="foto" class="form-control" >
                                <i style="float: left;font-size:12px;color:red">ukuran Foto Harus 400px x 200 px</i>
                             
                                @error('foto')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </div>
                                 @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="editor">Deskripsi</label>
                                <textarea name="desk" id="editor"></textarea>
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