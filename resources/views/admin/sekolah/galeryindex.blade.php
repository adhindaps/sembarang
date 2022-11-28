@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <h4 class="card-title">GALLERY </h4>
    <a href="/galerycreate" class="btn btn-primary" >Tambah </a> 
    <div class="row">
        @foreach ( $data as $foto )
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$foto->judul}}</h4>
                    <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
                        <div class="carousel-inner" >
                            <div class="carousel-item active" data-interval="1000"> <img class="img-fluid"
                                src="foto/{{ $foto->fotokgt }}" height="400" width="400"  alt="First slide">
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-danger deletegalery"
                    data-id="{{ $foto->id }}"
                    data-galeri="{{ $foto->galeri }}">
                    <i class=" fas fa-trash"></i></a>
                </div>
                
            </div>
           
        </div>
        @endforeach
    </div>
</div>
</div>
@include('admin.footeradmin')
<script>
    $('.deletegalery').click(function() {
        var galeryid = $(this).attr('data-id');
        var galery = $(this).attr('data-galery');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus data galery " + galery + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/galerydelete/" + galeryid + ""
                Swal.fire(
                    'Terhapus!',
                    'Data galery ' + galery + ' terhapus',
                    'success'
                )
            }
        })
    });
    </script>
@endsection