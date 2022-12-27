@extends('admin.indexadmin')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Slider</h4>
                            <form action="/footerlinkstore" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Halaman</label>
                                        <input type="text" name="halaman" class="form-control" id="inputPassword4" 
                                            placeholder="">
                                            @error('halaman')
                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong> 
                                            </div>
                                             @enderror
                                        </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Link</label>
                                        <input type="text" name="link" class="form-control" id="inputPassword4" 
                                            placeholder="">
                                            @error('link')
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

