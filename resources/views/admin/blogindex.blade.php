@extends("admin.indexadmin")
@section("content")

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BLOG</h4>
                    <h6 class="card-subtitle">
                      <a href="/blogcreate" class="btn btn-primary" >Tambah </a> 
                    </h6>
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
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>  <img alt=" " src="foto/{{ $row->foto }}"width="100px"> </td>
                                    <td>{{ $row->judul }}</td>
                                    <td>{!! $row->deskripsi !!}</td>
                                    <td>
                                        <a href="/blogedit/{{ $row->id }}" class="btn btn-warning">Ubah</a>
                                        <a href="/deleteblog/{{ $row->id }}" class="btn btn-danger">Hapus</a>
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
</div>
@include('admin.footeradmin')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#id_table').DataTable();
  });
</script>

<script>
    $('.delete').click(function() {
      var pemesanan = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');
      swal({
          title: "Apakah kamu yakin?",
          text: "Kamu akan menghapus data pemesanan " + pemesanan + "",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/deletepemesanan/" + pemesanan + ""
            swal("Data terhapus", {
              icon: "success",
            });
          } else {
            swal("Data tidak jadi dihapus");
          }
        });
    });
  </script>
@endsection