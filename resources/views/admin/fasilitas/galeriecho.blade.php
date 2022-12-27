@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">GALERI ECHO</h4>
                    <h6 class="card-subtitle">
                        <a href="/galeriechocreate" class="btn btn-primary" >Tambah </a> 
                        <a href="https://datatables.net/"></a></h6>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama kegiatan</th>
                                    <th scope="col">Foto</th>
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
                                    <td>{{ $data->namakegiatan }}</td>
                                    <td>  <img alt=" " src="echo/{{ $data->foto11 }}"width="100px" > </td>
                                    <td><a href="/galeriechoedit/{{ $data->id }}" class="btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i></a>
                                    
                                        <a href="#" class="btn btn-danger deleteguru"
                                        data-id="{{ $data->id }}"
                                        data-echo="{{ $data->namakegiatan }}">
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
    $('.deleteguru').click(function() {
        var guruid = $(this).attr('data-id');
        var guru = $(this).attr('data-echo');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus Galeri Echo " + guru + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletegaleriecho/" + guruid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + guru + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>
@endsection