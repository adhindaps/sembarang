@extends('admin.indexadmin')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Footer</h4>
                            <form action="/footerupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">logo</label>
                                        <img class="img mb-3" src="{{ asset('foto/' . $data->logo) }}" alt="" style="width: 100px;">
                                        <input type="file" name="logo" class="form-control" id="logo"
                                        aria-describedby="emailHelp" value="{{ $data->logo }}">
                                       
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Nama Sekolah</label>
                                        <input type="text" name="namasekolah" class="form-control" id="inputPassword4" value="{{ $data->namasekolah }}"
                                            placeholder="">
                                            @error('namasekolah')
                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong> 
                                            </div>
                                             @enderror
                                        </div>
                                    <div class="form-group col-md-12">
                                        <label for="editor">Deskripsi</label>
                                        <textarea name="deskripsi" id="editor" {!! $data->deskripsi !!}></textarea>
                                        @error('deskripsi')
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong> 
                                        </div>
                                         @enderror
                                    </div>

                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>

                                        </div>
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
