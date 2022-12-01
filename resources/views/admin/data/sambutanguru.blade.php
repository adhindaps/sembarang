@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/smbtnguruupdate" method="POST" enctype="multipart/form-data" >  
                        @csrf
                    <h4 class="card-title">Sambutan Guru</h4>
                    <input type="text" value="{{$data->id}}" name="id" class="form-control" id="inputPassword4" placeholder="" hidden>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputPassword4">Judul</label>
                              <input type="text" value="{{$data->nama}}" name="nama" class="form-control" id="inputPassword4"  placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="editor">Deskripsi</label>
                                <textarea name="katakata" id="editor">{!! $data->katakata !!}</textarea>
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