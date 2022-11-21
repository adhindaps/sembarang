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
                                    <td><a href="/guruedit/{{ $data->id }}" class="btn btn-warning">Ubah</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
</div>
</div>
@endsection