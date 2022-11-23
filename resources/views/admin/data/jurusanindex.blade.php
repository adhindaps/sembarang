@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">JURUSAN</h4>
                    <h6 class="card-subtitle">
                      </h6>
                      <a href="/jurusancreate" class="btn btn-primary" >Tambah </a> 

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Jurusan</th>
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
                                    <td>{{ $row->jurusan }}</td>
                                    <td style="word-break: break-word;">{!! $row->deskripsi !!}</td>
                                    <td><a href="/jurusanedit/{{ $row->id }}" class="btn btn-warning">
                                         <i class="fas fa-pencil-alt"></i></a>
                                    
                                        <a href="#" class="btn btn-danger deletejurusan"
                                        data-id="{{ $row->id }}"
                                        data-jurusan="{{ $row->jurusan }}">
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
<script>
    $('.deletejurusan').click(function() {
        var jurusanid = $(this).attr('data-id');
        var jurusan = $(this).attr('data-jurusan');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus data jurusan " + jurusan + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/jurusandelete/" + jurusanid + ""
                Swal.fire(
                    'Terhapus!',
                    'Data jurusan ' + jurusan + ' terhapus',
                    'success'
                )
            }
        })
    });
    </script>
@endsection

{{-- main js --}}
{{-- <script>
@if(Session::get('success'))
toastr.success("{{ Session::get('success') }}")
@endif
</script> --}}
   

