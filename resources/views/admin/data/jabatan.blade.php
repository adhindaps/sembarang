@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">JABATAN</h4>
                    <h6 class="card-subtitle">
                        <a href="/jabatantambah" class="btn btn-primary" >Tambah </a> 
                        <div class="row">
                            <table class="table table-bordered" id="id_table" style="border-right: 1px solid #E5E7E9">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
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
                                    <td>{{ $data->jabatan }}</td>
                                    <td><a href="/jabatanedit/{{ $data->id }}" class="btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger deletejabatan"
                                        data-id="{{ $data->id }}"
                                        data-jabatan="{{ $data->jabatan }}">
                                        <i class=" fas fa-trash"></i></a></td>
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


<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#id_table').DataTable();
    });
</script>
<script>
    $('.deletejabatan').click(function() {
        var jabatanid = $(this).attr('data-id');
        var jabatan = $(this).attr('data-jabatan');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus jabatan " + jabatan + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletejabatan/" + jabatanid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + jabatan + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>
<script>
    @if(Session::has('info'))
   swal("Data berhasil dihapus", {
                      icon: "success",
                  });
                  @endif
</script>
<script>
  @if(Session::has('gagal'))
  swal("Data Masih Digunakan", {
                      icon: "warning",
                  });
                  @endif

</script>

@endsection