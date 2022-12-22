@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BURSA KERJA KHUSUS</h4>
                    <h6 class="card-subtitle">
                        <a href="/bkkcreate" class="btn btn-primary" >Tambah </a></h6>
                   <div class="row">
                    <table class="table table-bordered" id="id_table">
                        <thead>
                                <tr>
                                    <th >No</th>
                                    <th >Foto</th>
                                    <th >Perusahaan</th>
                                    <th >Judul</th>
                                    <th >Deskripsi</th>
                                    <th >Alamat</th>
                                    <th >Deskripsi Perusahaan</th>
                                    <th >Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $bk)
                                <tr>
                                    <td scope="bk">{{ $no++ }}</td>
                                    <td> <img alt=" " src="foto/{{ $bk->fotobk }}"width="100px"></td>
                                    <td>{{ $bk->perusahaan }}</td>
                                    <td>{{ $bk->judul }}</td>
                                    <td style="word-break:break-word;">{!! $bk->deskripsi !!}</td>
                                    <td>{{ $bk->alamat }}</td>
                                    <td style="word-break:break-word;">{!! $bk->deskperusahaan !!}</td>
                                    
                                    <td>
                                    <a href="/bkkedit/{{ $bk->id }}" class="btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger deletebkk"
                                        data-id="{{ $bk->id }}" data-bkk="{{ $bk->bkk }}">
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
    $('.deletebkk').click(function() {
        var bkkid = $(this).attr('data-id');
        var bkk = $(this).attr('data-bkk');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus bkk " + bkk + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletebkk/" + bkkid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + bkk + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>

@endsection