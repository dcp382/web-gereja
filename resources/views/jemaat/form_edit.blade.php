@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('jemaat.detail',['id'=>$jemaat->id]) }}" class="btn btn-success"> Kembali </a>
                <form method="post" action="/jemaat/update/{{ $jemaat->id }}" autocomplete="off" class="form-horizontal">
                  @csrf
                  @method('put')
                  <!-- title awal -->
                  <div class="card ">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title"> Edit </h4>
                      <p class="card-category">Data Jemaat </p>
                    </div>
                    <div class="card-body ">
                      <!-- penginputan nama -->
                      <div class="row">
                        <label class="col-sm-2 col-form-label" style="color: black">Nama</label>
                        <div class="col-sm-7">
                          <input name="nama" class="form-control" placeholder="Isikan Nama Lengkap" value="{{ $jemaat->nama }}">
                          @if ($errors->has('nama'))
                            <div class="text-danger">
                              {{ $errors->first('nama') }}
                            </div>
                          @endif
                        </div>
                      </div>
                      <!-- penginputan alamat -->
                      <div class="row">
                        <label class="col-sm-2 col-form-label" style="color: black">Alamat</label>
                        <div class="col-sm-7">
                          <input name="alamat" class="form-control" placeholder="Isikan alamat" value="{{ $jemaat->alamat }}">
                          @if ($errors->has('alamat'))
                            <div class="text-danger">
                              {{ $errors->first('alamat') }}
                            </div>
                          @endif
                        </div>
                      </div>
                      <!-- penginputan jenis kelamin -->
                      <div class="row">
                        <label class="col-sm-2 col-form-label" style="color: black">Jenis Kelamin</label>
                        <div class="col-sm-7" style="margin-top: 0.2cm">
                          <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                          <input type="radio" name="jenis_kelamin" value="P">Perempuan
                          @if ($errors->has('jenis_kelamin'))
                            <div class="text-danger">
                                {{ $errors->first('jenis_kelamin') }}
                            </div>                              
                          @endif
                        </div>
                      </div>
                      <!-- penginputan tempat lahir -->
                      <div class="row">
                        <label class="col-sm-2 col-form-label" style="color: black">Tempat Lahir</label>
                        <div class="col-sm-7">
                          <input name="tempat_lahir" class="form-control" placeholder="Isikan Tempat Lahir" value="{{ $jemaat->tempat_lahir }}">
                          @if ($errors->has('tempat_lahir'))
                            <div class="text-danger">
                              {{ $errors->first('tempat_lahir') }}
                            </div>
                          @endif
                        </div>
                      </div>
                      <!-- penginputan tanggal lahir -->
                      <div class="row">
                        <label class="col-sm-2 col-form-label" style="color: black">Tanggal Lahir</label>
                        <div class="col-sm-7">
                          <input type="date" name="tanggal_lahir" class="form-control" value="{{ $jemaat->tanggal_lahir }}">
                          @if ($errors->has('tanggal_lahir'))
                            <div class="text-danger">
                              {{ $errors->first('tanggal_lahir') }}
                            </div>
                          @endif
                        </div>
                      </div>
                      <!-- penginputan no telepon -->
                      <div class="row">
                        <label class="col-sm-2 col-form-label" style="color: black">No Telepon</label>
                        <div class="col-sm-7">
                          <input name="no_telepon" class="form-control" placeholder="Isikan no telepon" value="{{ $jemaat->no_telepon }}">
                          @if ($errors->has('no_telepon'))
                            <div class="text-danger">
                              {{ $errors->first('no_telepon') }}
                            </div>
                          @endif
                        </div>
                      </div>
                      <!-- penginputan alamat email -->
                      <div class="row">
                        <label class="col-sm-2 col-form-label" style="color: black">Alamat Email</label>
                        <div class="col-sm-7">
                          <input name="alamat_email" class="form-control" placeholder="Isikan alamat email" value="{{ $jemaat->alamat_email }}">
                          @if ($errors->has('alamat_email'))
                            <div class="text-danger">
                              {{ $errors->first('alamat_email') }}
                            </div>
                          @endif
                        </div>
                      </div>
                    {{-- akhir dari form --}} 
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection