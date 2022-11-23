@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA GURU</h4>
                    <h6 class="card-subtitle">
                      </h6>
                      <a href="/gurucreate" class="btn btn-primary" >Tambah </a> 

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $data)
                                <tr>
                                    <th scope="data">{{ $no++ }}</th>
                                    <td>  <img alt=" " src="foto/{{ $data->fotoguru }}"width="100px" > </td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{!! $data->jabatan !!}</td>
                                    <td><a href="/guruedit/{{ $data->id }}" class="btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i></a>
                                    
                                        <a href="#" class="btn btn-danger deleteguru"
                                        data-id="{{ $data->id }}"
                                        data-guru="{{ $data->guru }}">
                                        <i class=" fas fa-trash"></i></a></td>
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
    $('.deleteguru').click(function() {
        var guruid = $(this).attr('data-id');
        var guru = $(this).attr('data-guru');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus data guru " + guru + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/gurudelete/" + guruid + ""
                Swal.fire(
                    'Terhapus!',
                    'Data guru ' + guru + ' terhapus',
                    'success'
                )
            }
        })
    });
    </script>
@endsection