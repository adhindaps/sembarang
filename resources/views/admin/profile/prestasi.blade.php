@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Prestasi</h4>
                    <h6 class="card-subtitle">
                        <a href="/prestasicreate" class="btn btn-primary" >Tambah </a></h6>
                   <div class="row">
                    <table class="table table-bordered" id="id_table" style="border-right: 1px solid #E5E7E9">
                        <thead>
                                <tr>
                                    <th >No</th>
                                    <th >Foto</th>
                                    <th >Judul</th>
                                    <th >Deskripsi</th>
                                    <th >Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $pres)
                                <tr>
                                    <td scope="pres">{{ $no++ }}</td>
                                    <td> <img alt=" " src="foto/{{ $pres->fotopres }}"width="100px"></td>
                                    <td>{{ $pres->judul }}</td>
                                    <td style="word-break:break-word;">{!! $pres->deskripsi !!}</td>
                                    <td>
                                    <a href="/prestasiedit/{{ $pres->id }}" class="btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger deletepres"
                                        data-id="{{ $pres->id }}" data-pres="{{ $pres->pres }}">
                                        <i class=" fas fa-trash"></i></a>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('admin.footeradmin')

<script>
    $(document).ready(function() {
        $('#id_table').DataTable();
    });
</script>

<script>
    $('.deletepres').click(function() {
        var presid = $(this).attr('data-id');
        var pres = $(this).attr('data-pres');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus pres " + pres + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletepres/" + presid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + pres + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>

@endsection