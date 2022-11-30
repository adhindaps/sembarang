@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">VIDEO PROFILE</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Foto</th>
                                    <th scope="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $vid)
                                <tr>
                                    <th scope="vid">{{ $no++ }}</th>
                                    <td>{{ $vid->judul }}</td>
                                    <td>{{ $vid->link }}</td>
                                    <td>  <img alt=" " src="foto/{{ $vid->foto }}"width="100px"> </td>
                                    <td><a href="/videoedit/{{ $vid->id }}" class="btn btn-warning">
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
   

