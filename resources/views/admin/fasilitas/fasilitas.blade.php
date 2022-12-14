@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fasilitas</h4>
                    <h6 class="card-subtitle"></h6>
                    <a href="/fasilitascreate" type="button" class="btn btn-primary">Tambah+</a>
                    <div class="row">
                        <table class="table table-bordered" id="id_table">
                               <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nama</th>
                                    <th scope="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $fasilitas)
                                <tr>
                                    <th scope="fasilitas">{{ $no++ }}</th>
                                    <td> <img alt=" " src="foto/{{ $fasilitas->foto }}"width="100px"></td>
                                    <td>{{ $fasilitas->nama }}</td>
                                    <td><a href="/fasilitasedit/{{ $fasilitas->id }}" class="btn btn-warning">
                                         <i class="fas fa-pencil-alt"></i></a>
                                         <a href="#" class="btn btn-danger deletefasilitas"
                                         data-id="{{ $fasilitas->id }}" data-fasilitas="{{ $fasilitas->fasilitas }}">
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
<script type="text/javascript">
    $('.toast').toast('show');
</script>
<script>
    $('.deletefasilitas').click(function() {
        var fasilitasid = $(this).attr('data-id');
        var fasilitas = $(this).attr('data-fasilitas');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus fasilitas " + fasilitas + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletefasilitas/" + fasilitasid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + fasilitas + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>

@endsection

   

