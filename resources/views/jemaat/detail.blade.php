@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 10px">
                    <div class="card-header card-header-primary">
                        <h3>Detail Jemaat</h3>
                        <a href="{{ route('home')}}" class="btn btn-success">Kembali</a>
                        <a href="{{ route('jemaat.edit',['id'=>$jemaat->id]) }}" class="btn btn-warning">Edit</a>
                    </div>
                    <div class="card-body" style="border: 2px;">
                        <div class="row justify-content-center">
                            <div class="col-4">
                              One of two columns
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-3  border border-dark">
                                      Nama
                                    </div>
                                    <div class="col-9  border border-dark">
                                      {{ $jemaat->nama }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-3 border border-dark">
                                      Alamat
                                    </div>
                                    <div class="col-9 border border-dark">
                                      {{ $jemaat->alamat }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-3 border border-dark">
                                      Jenis Kelamin
                                    </div>
                                    <div class="col-9 border border-dark">
                                      @if ($jemaat->jenis_kelamin=='P')
                                          Perempuan
                                      @else
                                          Laki - Laki
                                      @endif
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-3 border border-dark">
                                      Tempat Lahir
                                    </div>
                                    <div class="col-9 border border-dark">
                                      {{ $jemaat->tempat_lahir }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-3 border border-dark">
                                      Tanggal Lahir
                                    </div>
                                    <div class="col-9 border border-dark">
                                      {{ $format }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-3 border border-dark">
                                      No. Telepon
                                    </div>
                                    <div class="col-9 border border-dark">
                                      {{ $jemaat->no_telepon }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-3 border border-dark">
                                      Alamat Email
                                    </div>
                                    <div class="col-9 border border-dark">
                                      {{ $jemaat->alamat_email }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-3 border border-dark">
                                      No. Jemaat
                                    </div>
                                    <div class="col-9 border border-dark">
                                      {{ $jemaat->no_jemaat }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-3 border border-dark">
                                      Nama Cool
                                    </div>
                                    <div class="col-9 border border-dark">
                                      {{ $jemaat->cool1->nama }}
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="card-body row justify-content-center">
                        <a href="{{ route('jemaat.hapus') }}" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')"> Hapus </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection