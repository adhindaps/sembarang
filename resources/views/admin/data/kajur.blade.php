@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">KAJUR</h4>
                    <h6 class="card-subtitle">
                      </h6>
                      {{-- <a href="/jurusancreate" class="btn btn-primary" >Tambah </a>  --}}

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Kajur</th>
                                    <th scope="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $jur)
                                <tr>
                                    <th scope="jur">{{ $no++ }}</th>
                                    <td>  <img alt=" " src="{{ asset('foto/lila.jpg')}}"width="100px"> </td>
                                    <td>{{ $jur->nama }}</td>
                                    <td>{{ $jur->nip }}</td>
                                    <td>{{ $jur->jurusan->jurusan }}</td>
                                    <td><a href="/kajuredit/{{ $jur->id }}" class="btn btn-warning">
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
   

