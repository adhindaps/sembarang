@extends("admin.indexadmin")
@section("content")
<div class="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tentang SMK N 1 DLANGGU</h4>
                    <h6 class="card-subtitle">
                      </h6>
                      {{-- <a href="/jurusancreate" class="btn btn-primary" >Tambah </a>  --}}
                      <div class="row">
                        <table class="table table-bordered" id="id_table" style="border-right: 1px solid #E5E7E9>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Judul</th>
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
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>  <img alt=" " src="jur/{{ $row->icon }}"width="100px"> </td>
                                    <td>{{ $row->judul }}</td>
                                    <td>{{ $row->deskripsi }}</td>
                                    <td><a href="/aboutedit/{{ $row->id }}" class="btn btn-warning">
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
<script>
    $(document).ready(function() {
        $('#id_table').DataTable();
    });
</script>
@endsection

{{-- main js --}}
{{-- <script>
@if(Session::get('success'))
toastr.success("{{ Session::get('success') }}")
@endif
</script> --}}
   

