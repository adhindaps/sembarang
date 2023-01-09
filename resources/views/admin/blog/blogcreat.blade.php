@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog</h4>
                    <form action="/blogstore" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <input type="file" id="foto" name="foto" class="form-control" >
                                <i style="float: left;font-size:12px;color:red">ukuran Foto Harus 350px x 700 px</i>
                             
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Judul</label>
                              <input type="text" name="judul" class="form-control" id="inputPassword4"  placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1" class="form-label">kategori</label>
                                <select class="form-control" name="id_kategori">
                                 @foreach($datakategori as $kat)
                                 <option value="{{ $kat->id }}" >
                                 {{ $kat->kategori }}
                             </option>
                             @endforeach
                                </select>
                               </div>
                            <div class="form-group col-md-12">
                                <label for="editor">Deskripsi</label>
                                <textarea name="deskripsi" id="editor"></textarea>
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