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
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Dibuat</th>
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
                                    <td>{{ $row->kategori->kategori }}</td>
                                    <td>{{ $row->created_at->format('D M Y')}}</td>
                                    <td>
                                      <a href="/blogedit/{{ $row->id }}" class="btn btn-warning">
                                          <i class="fas fa-pencil-alt"></i></a>
                                      <a href="#" class="btn btn-danger deleteblog"
                                          data-id="{{ $row->id }}" data-blog="{{ $row->blog }}">
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
  $('.deleteblog').click(function() {
      var blogid = $(this).attr('data-id');
      var blog = $(this).attr('data-blog');
      Swal.fire({
          title: 'Apakah Kamu yakin?',
          text: "Menghapus blog " + blog + "",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location = "/deleteblog/" + blogid + ""
              Swal.fire(
                  'Terhapus!',
                  'data ' + blog + ' terhapus',
                  'success'
              )
          }
      })
  });
</script>
@endsection