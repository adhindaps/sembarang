@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">KATEGORI BLOG</h4>
                    <h6 class="card-subtitle">
                      </h6>
                      <a href="/kategoricreate" class="btn btn-primary" >Tambah </a> 
                      <div class="row">
                        <table class="table table-bordered" id="id_table">
                               <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">kategori</th>
                                    <th scope="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $kat)
                                <tr>
                                    <th scope="kat">{{ $no++ }}</th>
                                    <td>{{ $kat->kategori }}</td>
                                    <td><a href="/kategoriedit/{{ $kat->id }}" class="btn btn-warning">
                                         <i class="fas fa-pencil-alt"></i></a>

                                         <a href="#" class="btn btn-danger deleteguru"
                                         data-id="{{ $kat->id }}"
                                         data-kategori="{{ $kat->kategori }}">
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
     $('.deleteguru').click(function() {
        var guruid = $(this).attr('data-id');
        var guru = $(this).attr('data-kategori');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus Blog Kategori " + guru + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletekategori/" + guruid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + guru + ' terhapus',
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
   

