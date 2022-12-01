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
                    <div class="table-responsive">
                        <table class="table">
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

@endsection

{{-- main js --}}
{{-- <script>
@if(Session::get('success'))
toastr.success("{{ Session::get('success') }}")
@endif
</script> --}}
   

