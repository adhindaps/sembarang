@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">KERJASAMA</h4>
                    <h6 class="card-subtitle"></h6>
                    <a href="/patnercreate" type="button" class="btn btn-primary">Tambah+</a>
                    <div class="row">
                        <table class="table table-bordered" id="id_table">
                               <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Foto</th>
                                    <th scope="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $kerja)
                                <tr>
                                    <th scope="kerja">{{ $no++ }}</th>
                                    <td>{{ $kerja->nama }}</td>
                                    <td>{{ $kerja->link }}</td>
                                    <td>  <img alt=" " src="foto/{{ $kerja->fotopatner }}"width="100px"> </td>
                                    <td><a href="/patneredit/{{ $kerja->id }}" class="btn btn-warning">
                                         <i class="fas fa-pencil-alt"></i></a>
                                         <a href="#" class="btn btn-danger deletepatner"
                                         data-id="{{ $kerja->id }}" data-patner="{{ $kerja->patner }}">
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
    $('.deletepatner').click(function() {
        var patnerid = $(this).attr('data-id');
        var patner = $(this).attr('data-patner');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus patner " + patner + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletepatner/" + patnerid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + patner + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>

@endsection

   

