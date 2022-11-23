@extends('layout.opo')
@section('content')
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <title>CRUD LARVEL8</title>
</head>

<body>
  <h1 class="text-center" mb-4>Data Pemesanan</h1>

  <div class="container">
    <a href="/tambahevent" type="button" class="btn btn-primary">Tambah+</a>
    <div class="row">

      @if ($message =Session::get('success'))
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
            <td>
              <img src="{{asset('gambar_wisata/'.$row->gambar)}}" alt="" style="width: 80px;">
            </td>
            <td>{{$row->namaevent}}</td>
            <td>0{{$row->tempatevent}}</td>
            <td>{{$row->tempat}}</td>
            <td>{{$row->tanggalevent}}</td>
            <td>{{$row->jamevent}}</td>
            <td>{{$row->deskripsi}}</td>
            <td>
              <a href="/tampilevent/{{$row->id}}" class="btn btn-warning">Edit</a>
              <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama}}">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#id_table').DataTable();
    });
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
<script>
  $('.delete').click(function() {
    var event = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
        title: "Apakah kamu yakin?",
        text: "Kamu akan menghapus data event " + event + "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/deleteevent/" + event + ""
          swal("Data terhapus", {
            icon: "success",
          });
        } else {
          swal("Data tidak jadi dihapus");
        }
      });
  });
</script>


</html>
@endsection