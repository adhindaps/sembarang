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
                                    <td><a href="/bkkedit/{{ $bk->id }}" class="btn btn-warning">Ubah</a>
                                    <a href="/bkkhapus/{{$bk->id}}" class="btn btn-danger">Hapus</a></td>
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
@endsection