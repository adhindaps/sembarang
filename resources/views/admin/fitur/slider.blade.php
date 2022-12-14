@extends('admin.indexadmin')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Slider</h4>
                            <h6 class="card-subtitle">
                            </h6>
                            <a href="/slidercreate" type="button" class="btn btn-primary">Tambah+</a>
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
                                            <th scope="col">Judul</th>
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
                                                <td>{{ $row->judul }}</td>
                                                <td style="word-break:break-word;">{!! $row->deskripsi !!}</td>
                                                <td>
                                                    <a href="/slideredit/{{ $row->id }}" class="btn btn-warning"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger deleteslider"
                                                        data-id="{{ $row->id }}" data-slider="{{ $row->nama }}"><i
                                                            class=" fas fa-trash"></i></a>
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
            <script>
                $(document).ready(function() {
                    $('#id_table').DataTable();
                });
            </script>
            <script>
                $('.deleteslider').click(function() {
                    var sliderid = $(this).attr('data-id');
                    var slider = $(this).attr('data-slider');
                    Swal.fire({
                        title: 'Apakah Kamu yakin?',
                        text: "Menghapus slider " + slider + "",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "/deleteslider/" + sliderid + ""
                            Swal.fire(
                                'Terhapus!',
                                'data ' + slider + ' terhapus',
                                'success'
                            )
                        }
                    })
                });
            </script>
        @endsection
