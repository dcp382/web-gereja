@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title " style="font:bold;">Data Jemaat</h2>
              <br>
              <a href="{{ route('jemaat.tambah') }}" class="btn btn-success" style="float: right;"> Tambah </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="data_users_reguler" class="display" >
                  <thead class=" text-primary">                   
                    <th>
                      Nama
                    </th>
                    <th>
                      Alamat
                    </th>
                    <th>
                      Tanggal Lahir
                    </th>
                    <th>
                      Jenis Kelamin
                    </th>
                    <th>
                      No. Telepon
                    </th>
                    <th>
                      Cool
                    </th>
                    <th>
                        Aksi
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($jemaat as $j)
                        <tr>
                            <td> {{ $j->nama }}</td>
                            <td> {{ $j->alamat }}</td>
                            <td> {{ $j->tanggal_lahir }}</td>
                            <td> {{ $j->jenis_kelamin }}</td>
                            <td> {{ $j->no_telepon }}</td>
                            <td> {{ $j->cool1->nama }}</td>
                            <td>
                                <a href="{{ route('jemaat.detail',['id'=>$j->id])}}" class="btn btn-warning"> Detail </a>
                                <a href="{{ route('jemaat.hapus') }}" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')"> Hapus </a>
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
    </div>
  </div>
@stop

@push('js')
    <script>
        $(document).ready(function(){
        $('#data_users_reguler').DataTable();
        });
    </script>
@endpush