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
                            <div class="carousel-item active" data-interval="10000"> <img class="img-fluid"
                                src="foto/{{ $foto->fotokgt }}" alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@include('admin.footeradmin')
@endsection