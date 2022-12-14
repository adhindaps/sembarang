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

                      <div class="row">
                        <table class="table table-bordered" id="id_table">
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
                                         <a href="#" class="btn btn-danger deletekajur"
                                         data-id="{{ $jur->id }}" data-kajur="{{ $jur->kajur }}">
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
    $('.deletekajur').click(function() {
        var kajurid = $(this).attr('data-id');
        var kajur = $(this).attr('data-kajur');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus kajur " + kajur + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletekajur/" + kajurid + ""
                Swal.fire(
                    'Terhapus!',
                    'data ' + kajur + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>

@endsection


   

