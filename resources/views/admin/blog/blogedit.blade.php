@extends('admin.indexadmin')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ubah Blog</h4>
                            <form action="/blogupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Foto</label>
                                        <img class="img mb-3" src="{{ asset('blog/' . $data->foto) }}" alt=""
                                            style="width: 100px;">
                                        <input type="file" name="foto" class="form-control" id="foto"
                                            aria-describedby="emailHelp" value="{{ $data->foto }}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Judul</label>
                                        <input type="text" name="judul" class="form-control" id="inputPassword4"
                                            value="{{ $data->judul }}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="defaultFormControlInput" class="form-label">Kategori</label>
                                        <select class="form-control" name="id_kategori">
                                         @foreach($datakategori as $kat)
                                         <option value="{{ $kat->id }}" @if ($data->kategori->id == $kat->id) selected @endif>
                                         {{ $kat->kategori }}
                                     </option>
                                     @endforeach
                                        </select>
                                       </div>
                                    <div class="form-group col-md-12">
                                        <label for="editor">Deskripsi</label>
                                        <textarea name="deskripsi" id="editor">{!! $data->deskripsi !!}</textarea>
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
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
