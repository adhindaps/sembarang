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
                        <a href="/bkkcreate" class="btn btn-primary" >Tambah </a> 
                        <a href="https://datatables.net/"></a></h6>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th >No</th>
                                    <th >Foto</th>
                                    <th >Perusahaan</th>
                                    <th >Deskripsi</th>
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
                                    <td style="word-break:break-all;">{!! $bk->deskripsi !!}</td>
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