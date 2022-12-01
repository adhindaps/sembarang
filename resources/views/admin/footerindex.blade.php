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
                      <a href="/footercreate" class="btn btn-primary" >Tambah </a> 
                    </h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Halaman</th>
                                    <th scope="col">Link</th>
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
                                    <td>{{ $row->halaman}}</td>
                                    <td>{{ $row->link}}</td>
                                    <td>
                                      <a href="/footeredit/{{ $row->id }}" class="btn btn-warning">
                                          <i class="fas fa-pencil-alt"></i></a>
                                      <a href="#" class="btn btn-danger deletefooter"
                                          data-id="{{ $row->id }}" data-footer="{{ $row->footer }}">
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
</div>
@include('admin.footeradmin')

<script>
  $('.deletefooter').click(function() {
      var footerid = $(this).attr('data-id');
      var footer = $(this).attr('data-footer');
      Swal.fire({
          title: 'Apakah Kamu yakin?',
          text: "Menghapus footer " + footer + "",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location = "/deletefooter/" + footerid + ""
              Swal.fire(
                  'Terhapus!',
                  'data ' + footer + ' terhapus',
                  'success'
              )
          }
      })
  });
</script>
@endsection