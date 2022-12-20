@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SOSIAL MEDIA</h4>
                    <h6 class="card-subtitle">
                        <a href="/sosmedcreate" class="btn btn-primary" >Tambah </a></h6>
                   <div class="row">
                    <table class="table table-bordered" id="id_table">
                        <thead>
                                <tr>
                                    <th >No</th>
                                    <th >Foto</th>
                                    <th >Sosmed</th>
                                    <th >Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $data)
                                <tr>
                                    <td scope="data">{{ $no++ }}</td>
                                    <td><img alt=" " src="foto/{{ $data->icon }}"width="100px"></td>
                                    <td>{{ $data->sosmed }}</td>
                                    <td>
                                    <a href="/sosmededit/{{ $data->id }}" class="btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger deletesosmed"
                                        data-id="{{ $data->id }}" data-sosmed="{{ $data->sosmed }}">
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
    $('.deletesosmed').click(function() {
        var sosmedid = $(this).attr('data-id');
        var sosmed = $(this).attr('data-sosmed');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus sosmed " + sosmed + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletesosmed/" + sosmedid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + sosmed + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>

@endsection