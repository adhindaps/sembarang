@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">EXTRAKULIKULER</h4>
                    <h6 class="card-subtitle">
                      </h6>
                      <a href="/extracreate" class="btn btn-primary" >Tambah </a> 

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Extra</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $ex)
                                <tr>
                                    <th scope="ex">{{ $no++ }}</th>
                                    <td>  <img alt=" " src="foto/{{ $ex->fotoex }}"width="100px"> </td>
                                    <td>{{ $ex->extra }}</td>
                                    <td>{!! $ex->deskripsi !!}</td>
                                    <td><a href="/extraedit/{{ $ex->id }}" class="btn btn-warning">Ubah</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
</div>
</div>
@endsection