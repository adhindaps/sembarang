@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Kerjasama</h4>
                    <form action="/patnerstore" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputPassword4" placeholder="">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Link</label>
                                <input type="text" name="link" class="form-control" id="inputPassword4"  placeholder="">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <input type="file" name="fotopatner" class="form-control" id="fotopatner" aria-describedby="emailHelp">
                                <i style="float: left;font-size:12px;color:red">ukuran Foto Harus 150px x 500 px</i>
                             
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