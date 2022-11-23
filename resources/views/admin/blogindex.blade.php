@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BLOG</h4>
                    <h6 class="card-subtitle">
                      </h6>
                      <a href="/blogcreate" class="btn btn-primary" >Tambah </a> 

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $row)
                                {{-- <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>  <img alt="" src="{{ $row->foto }}"width="100px"> </td>
                                    <td>{{ $row->judul }}</td>
                                    <td>{!! $row->deskripsi !!}</td>
                                    <td><a href="/blogedit/{{ $row->id }}" class="btn btn-warning">Ubah</a></td>
                                </tr> --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
</div>
</div>
@include('admin.footeradmin')
@endsection