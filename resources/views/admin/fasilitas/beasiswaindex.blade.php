@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BEASISWA</h4>
                    <h6 class="card-subtitle">
                        <a href="/beasiswacreate" class="btn btn-primary" >Tambah </a></h6>
                   <div class="row">
                    <table class="table table-bordered" id="id_table" style="border-right: 1px solid #E5E7E9">
                        <thead>
                                <tr>
                                    <th >No</th>
                                    <th >Judul</th>
                                    <th >Foto</th>
                                    <th >Deskripsi</th>
                                    <th >Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $bea)
                                <tr>
                                    <td scope="bea">{{ $no++ }}</td>
                                    <td>{{ $bea->name }}</td>
                                    <td> <img alt=" " src="foto/{{ $bea->foto }}"width="100px"></td>
                                    <td style="word-break:break-word;">{!! $bea->desk !!}</td>
                                    <td>
                                    <a href="/beasiswaedit/{{ $bea->id }}" class="btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger deletebeasiswa"
                                        data-id="{{ $bea->id }}" data-beasiswa="{{ $bea->beasiswa }}">
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
    $('.deletebeasiswa').click(function() {
        var beasiswaid = $(this).attr('data-id');
        var beasiswa = $(this).attr('data-beasiswa');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus beasiswa " + beasiswa + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletebeasiswa/" + beasiswaid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + beasiswa + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>

@endsection