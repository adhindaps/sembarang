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
                                    <th scope="col">Logo</th>
                                    <th scope="col">Subjudul</th>
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
                                    <td>  <img alt=" " src="foto/{{ $ex->logo }}"width="100px"> </td>
                                    <td>{{ $ex->subjudul }}</td>
                                    <td>{{ $ex->extra }}</td>
                                    <td>{!! $ex->deskripsi !!}</td>
                                    <td>
                                    <a href="/extraedit/{{ $ex->id }}" class="btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger deleteextra"
                                        data-id="{{ $ex->id }}" data-extra="{{ $ex->extra }}">
                                        <i class=" fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
</div>
</div>
@include('admin.footeradmin')

<script>
    $('.deleteextra').click(function() {
        var extraid = $(this).attr('data-id');
        var extra = $(this).attr('data-extra');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus extra " + extra + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deleteextra/" + extraid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + extra + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>

@endsection