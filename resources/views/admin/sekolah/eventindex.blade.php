@extends('admin.indexadmin')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Event</h4>
                            <h6 class="card-subtitle">
                            </h6>
                            <a href="/eventscreate" type="button" class="btn btn-primary">Tambah+</a>
                            <div class="row">

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ $message }}
                                    </div>
                                @endif

                                <table class="table table-bordered" id="id_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama Event</th>
                                            <th scope="col">Tempat</th>
                                            <th scope="col">Tanggal Events</th>
                                            <th scope="col">Jam Event</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($data as $row)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td> <img alt=" " src="foto/{{ $row->foto }}"width="100px"></td>
                                                <td>{{ $row->namaevent }}</td>
                                                <td>{{ $row->tempat }}</td>
                                                <td>{{ $row->tanggalevent }}</td>
                                                <td>{{ $row->jamevent }}</td>
                                                <td>{!! $row->deskripsi !!}</td>
                                                <td>
                                                    <a href="/eventedit/{{ $row->id }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $row->id }}"
                                                        data-nama="{{ $row->nama }}">Hapus</a>
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
            @endsection
