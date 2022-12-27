@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Kajur</h4>
                    <form action="/kajurstore" method="POST" enctype="multipart/form-data" >  
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Foto</label>
                              <input type="file" name="fotokajur" class="form-control" id="fotokajur" aria-describedby="emailHelp" value="">
                              <i style="float: left;font-size:12px;color:red">ukuran Foto Harus 450px x 350 px</i>
                             
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputPassword4" value=""  placeholder="">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">NIP</label>
                                <input type="text" name="nip" class="form-control" id="inputPassword4" value=""  placeholder="">
                              </div>
                              <div class="form-group col-md-12">
                               <label for="exampleInputEmail1" class="form-label">Kajur</label>
                               <select class="form-control" name="id_jurusan">
                                @foreach($datajurusan as $dj)
                                <option value="{{ $dj->id }}" >
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
</script> 

@endsection--}}