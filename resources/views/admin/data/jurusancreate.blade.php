@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">JURUSAN</h4>
                    <form action="/jurusanstore" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <input type="file" id="foto" name="foto" class="form-control" >
                              </div>
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Jurusan</label>
                              <input type="text" name="jurusan" class="form-control" id="inputPassword4"  placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="editor">Deskripsi</label>
                                <textarea name="deskripsi" id="editor"></textarea>
                              </div>
                              <div class="form-group col-md-12">
                                <div class="form-group">
                                    <label for="inputPassword4">Foto Guru</label>
                                    <label for="img1"><i class="fas fa-chart-area"
                                            style="font-size: 24px;border:1px solid black;padding:25px; margin-left: 10px;"></i></label>
                                    <input id="img1" type="file" name="filefoto"
                                        style="display: none">
                                    <label for="img2"><i class="fas fa-chart-area"
                                            style="font-size: 24px;border:1px solid black;padding:25px; margin-left: 10px;"></i></label>
                                    <input id="img2" type="file" name="filefoto"
                                        style="display: none">
                                    <label for="img3"><i class="fas fa-chart-area"
                                            style="font-size: 24px;border:1px solid black;padding:25px; margin-left: 10px;"></i></label>
                                    <input id="img3" type="file" name="filefoto"
                                        style="display: none">
                                </div>
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