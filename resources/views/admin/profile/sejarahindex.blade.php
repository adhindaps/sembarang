@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/updatesjr" method="POST" enctype="multipart/form-data" >  
                        @csrf
                    <h4 class="card-title">Sejarah sekolah</h4>
                    <input type="text" value="{{$data->id}}" name="id" class="form-control" id="inputPassword4" placeholder="" hidden>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Foto</label>
                                <img class="img mb-3" src="foto/{{ $data->fotosjr }}" alt="" style="width: 100px;">
                                 <input type="file" name="fotosjr" class="form-control" id="fotosjr" aria-describedby="emailHelp" value="{{ $data->fotosjr }}">
                              </div>
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Nama</label>
                              <input type="text" value="{{$data->nama}}" name="nama" class="form-control" id="inputPassword4"  placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="editor">Deskripsi</label>
                                <textarea name="deskripsi" id="editor">{!! $data->deskripsi !!}</textarea>
                              </div>
                          </div>
                          <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Update</button>
                             
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