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
                            <a href="/footercreate" type="button" class="btn btn-primary">Tambah+</a> 
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
                                                              <a href="#" class="btn btn-danger deletefooterlink"
                                        data-id="{{ $footer->id }}" data-footerlink="{{ $footer->footerlink }}">
                                        <i class=" fas fa-trash"></i></a>
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
                $('.deletefooterlink').click(function() {
                    var footerlinkid = $(this).attr('data-id');
                    var footerlink = $(this).attr('data-footerlink');
                    Swal.fire({
                        title: 'Apakah Kamu yakin?',
                        text: "Menghapus footerlink " + footerlink + "",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "/deletefooterlink/" + footerlinkid + ""
                            Swal.fire(
                                'Terhapus!',
                                'data ' + footerlink + ' terhapus',
                                'success'
                            )
                        }
                    })
                });
            </script>
        @endsection
