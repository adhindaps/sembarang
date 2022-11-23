@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">VISI MISI SEKOLAH</h4>
                    <h6 class="card-subtitle">
                      </h6>
                      <a href="/createvisi" class="btn btn-primary" >Tambah </a> 

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col md 6">Deskripsi</th>
                                    <th scope="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $vm)
                                <tr>
                                    <th scope="vm">{{ $no++ }}</th>
                                    <td>{{ $vm->nama }}</td>
                                    <td style="word-break: break-word !important">{!! $vm->deskripsi !!}</td>
                                    <td><a href="/editvisi/ {{ $vm->id }}" class="btn btn-warning">Ubah</a></td>
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
@endsection