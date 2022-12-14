@extends('admin.indexadmin')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Footer Link </h4>
                            <h6 class="card-subtitle">
                            </h6>
                            {{-- <a href="/slidercreate" type="button" class="btn btn-primary">Tambah+</a> --}}
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
                                            <th scope="col">Halaman</th>
                                            <th scope="col">Link</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($data as $footer)
                                            <tr>
                                                <th scope="footer">{{ $no++ }}</th>
                                                <td>{{ $footer->halaman }}</td>
                                                <td>{!! $footer->link !!}</td>
                                                <td>
                                                    <a href="/footerlinkedit/{{ $footer->id }}" class="btn btn-warning"><i
                                                            class="fas fa-pencil-alt"></i></a>
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
