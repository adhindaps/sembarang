@extends('admin.indexadmin')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Events</h4>
                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
                            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                            <form action="/eventstore" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Foto</label>
                                        <input type="file" id="foto" name="foto" class="form-control">
                                        <i style="float: left;font-size:12px;color:red">ukuran Foto Harus 200px x 200 px</i>
                             
                                        @error('foto')
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong> 
                                        </div>
                                         @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Nama Event</label>
                                        <input type="text" name="namaevent" class="form-control" id="inputPassword4"
                                            placeholder="">
                                            @error('namaevent')
                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong> 
                                            </div>
                                             @enderror
                                        </div>
                                    <div class="form-group col-md-12">
                                        <label for="editor">Tempat Event</label>
                                        <input type="text" name="tempat" class="form-control" id="inputPassword4"
                                            placeholder="">
                                            @error('tempat')
                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong> 
                                            </div>
                                             @enderror
                                        </div>
                                    <div class="form-group col-md-12">
                                        <label for="editor">Tanggal Event</label>
                                        <input type="date" name="tanggalevent" class="form-control" id="inputPassword4"
                                            placeholder="">
                                            @error('tanggalevent')
                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong> 
                                            </div>
                                             @enderror
                                        </div>
                                    <div class="form-group col-md-12">
                                        <label for="editor">Jam Event</label>
                                        <input type="time" name="jamevent" class="form-control" id="inputPassword4"
                                            placeholder="">
                                            @error('jamevent')
                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong> 
                                            </div>
                                             @enderror
                                        </div>
                                    <div class="form-group col-md-12">
                                        <label for="editor">Deskripsi</label>
                                        <textarea name="deskripsi" id="editor"></textarea>
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
    <script>
        config={
            minDate:"today",
        }
        flatpickr("input[type=date]",config);
     </script>
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
