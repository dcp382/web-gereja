@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{ route('jemaat.index') }}" class="btn btn-success" style="margin-bottom: 0.5cm;"> Kembali </a>
            <br>
            <form method="post" action="{{ route('jemaat.tambah') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('get')
            <!-- title awal -->
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title" style="font-size: 20px"> Tambah </h4>
                <br>
                <p class="card-category" style="font-size: 16px;">Data Jemaat </p>
              </div>
              <div class="card-body" >
                <!-- penginputan nama -->
                <div class="row">
                  <label class="col-sm-2 col-form-label" style="color: black;">Nama</label>
                  <div class="col-sm-7">
                    <input type="text" name="nama" class="form-control" placeholder="Isikan Nama Lengkap" value="{{ old('nama') }}">
                    @if ($errors->has('nama'))
                      <div class="text-danger">
                        {{ $errors->first('nama') }}
                      </div>
                    @endif
                  </div>
                </div>
                <!-- penginputan alamat -->
                <div class="row" style="margin-top: 10px">
                  <label class="col-sm-2 col-form-label" style="color: black;">Alamat</label>
                  <div class="col-sm-7">
                    <textarea name="alamat" class="form-control" placeholder="Isikan alamat" value="{{ old('alamat') }}"></textarea>
                    @if ($errors->has('alamat'))
                      <div class="text-danger">
                        {{ $errors->first('alamat') }}
                      </div>
                    @endif
                  </div>
                </div>
                <!-- penginputan jenis kelamin -->
                <div class="row" style="margin-top: 10px">
                    <label class="col-sm-2 col-form-label" style="color: black">Jenis Kelamin</label>
                    <div class="col-sm-7">
                      <select name="jenis" class="js-example-basic-single" style="width: 300px">
                          <option value="L"> Laki - Laki </option>
                          <option value="P"> Perempuan </option>
                      </select>
                      @if ($errors->has('jenis'))
                        <div class="text-danger">
                          {{ $errors->first('jenis') }}
                        </div>
                      @endif
                    </div>
                  </div>
                {{-- <div class="row">
                  <label class="col-sm-2 col-form-label" style="color: black">Jenis Kelamin</label>
                  <div class="col-sm-7">
                  <select class="js-example-basic-single" name="jenis" style="width: 500px; padding: 0.5cm ">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                    @if ($errors->has('jenis_kelamin'))
                      <div class="text-danger">
                        {{ $errors->first('jenis_kelamin') }}
                      </div>                              
                    @endif
                  </div>
                </div> --}}
                <!-- penginputan tempat lahir -->
                <div class="row" style="margin-top:10px">
                    <label class="col-sm-2 col-form-label" style="color: black">Tempat Lahir</label>
                    <div class="col-sm-7">
                      <textarea name="tempat_lahir" class="form-control" placeholder="Isikan Tempat Lahir" value="{{ old('tempat_lahir') }}""></textarea>
                      @if ($errors->has('tempat_lahir'))
                        <div class="text-danger">
                          {{ $errors->first('tempat_lahir') }}
                        </div>
                      @endif
                    </div>
                  </div>
                {{-- <div class="row">
                  <label class="col-sm-2 col-form-label" style="margin-left: 0.5cm; color: black">Tempat Lahir</label>
                  <div class="col-sm-7">
                    <textarea name="tempat_lahir" class="form-control" placeholder="Isikan Tempat Lahir" style></textarea>
                    @if ($errors->has('tempat_lahir'))
                      <div class="text-danger">
                        {{ $errors->first('tempat_lahir') }}
                      </div>
                    @endif
                  </div>
                </div> --}}
                <!-- penginputan tanggal lahir -->
                <div class="row" style="margin-top: 10px">
                    <label class="col-sm-2 col-form-label" style="color: black">Tanggal Lahir</label>
                    <div class="col-sm-7">
                      <input type="date" name="tanggal_lahir" class="form-control">
                      @if ($errors->has('tanggal_lahir'))
                        <div class="text-danger">
                          {{ $errors->first('tanggal_lahir') }}
                        </div>
                      @endif
                    </div>
                  </div>
                {{-- <div class="row">
                  <label class="col-sm-2 col-form-label" style="margin-left: 0.5cm; color: black">Tanggal Lahir</label>
                  <div class="col-sm-7">
                    <input type="date" name="tanggal_lahir" class="form-control">
                    @if ($errors->has('tanggal_lahir'))
                      <div class="text-danger">
                        {{ $errors->first('tanggal_lahir') }}
                      </div>
                    @endif
                  </div>
                </div> --}}
                <!-- penginputan no telepon -->
                <div class="row" style="margin-top: 10px">
                    <label class="col-sm-2 col-form-label" style="color: black">No Telepon</label>
                    <div class="col-sm-7">
                      <textarea name="no_telepon" class="form-control" placeholder="Isikan no telepon" value="{{ old('no_telepon') }}""></textarea>
                      @if ($errors->has('no_telepon'))
                        <div class="text-danger">
                          {{ $errors->first('no_telepon') }}
                        </div>
                      @endif
                    </div>
                  </div>
                {{-- <div class="row">
                  <label class="col-sm-2 col-form-label" style="margin-left: 0.5cm; color: black">No Telepon</label>
                  <div class="col-sm-7">
                    <textarea name="no_telepon" class="form-control" placeholder="Isikan no telepon"></textarea>
                    @if ($errors->has('no_telepon'))
                      <div class="text-danger">
                        {{ $errors->first('no_telepon') }}
                      </div>
                    @endif
                  </div>
                </div> --}}
                <!-- penginputan alamat email -->
                <div class="row" style="margin-top: 10px">
                    <label class="col-sm-2 col-form-label" style="color: black">Alamat Email</label>
                    <div class="col-sm-7">
                      <textarea name="alamat_email" class="form-control" placeholder="Isikan alamat email" value="{{ old('alamat_email') }}""></textarea>
                      @if ($errors->has('alamat_email'))
                        <div class="text-danger">
                          {{ $errors->first('alamat_email') }}
                        </div>
                      @endif
                    </div>
                </div>
                {{-- <div class="row">
                  <label class="col-sm-2 col-form-label" style="margin-left: 0.5cm; color: black">Alamat Email</label>
                  <div class="col-sm-7">
                    <textarea name="alamat_email" class="form-control" placeholder="Isikan alamat email"></textarea>
                    @if ($errors->has('alamat_email'))
                      <div class="text-danger">
                        {{ $errors->first('alamat_email') }}
                      </div>
                    @endif
                  </div>
                </div> --}}
                {{-- penginputan no jemaat --}}
                <div class="row" style="margin-top: 10px">
                    <label class="col-sm-2 col-form-label" style="color: black">No Jemaat</label>
                    <div class="col-sm-7">
                      <textarea name="no_jemaat" class="form-control" placeholder="Isikan no_jemaat" value="{{ old('no_jemaat') }}""></textarea>
                      @if ($errors->has('no_jemaat'))
                        <div class="text-danger">
                          {{ $errors->first('no_jemaat') }}
                        </div>
                      @endif
                    </div>
                </div>
                {{-- <div class="row">
                  <label class="col-sm-2 col-form-label" style="margin-left: 0.5cm; margin-bottom: 1cm; color: black">no_jemaat</label>
                  <div class="col-sm-7">
                    <textarea name="no_jemaat" class="form-control" placeholder="Isikan no_jemaat"></textarea>
                    @if ($errors->has('no_jemaat'))
                      <div class="text-danger">
                        {{ $errors->first('no_jemaat') }}
                      </div>
                    @endif
                  </div>
                </div> --}}
                {{-- penginputan cool --}}
                <div class="row" style="margin-top: 10px">
                    <label class="col-sm-2 col-form-label" style="color: black;">Nama Cool</label>
                    <div class="col-sm-7">
                      <select name="nama_cool" class="js-example-basic-multiple" multiple="multiple" style="width: 300px">
                        @foreach ($cool as $c )
                            @if (old('nama_cool') === $c->id)
                            <option value="{{ $c->id }}" selected> {{ $c->nama }}</option>
                            @else
                            <option value="{{ $c->id }}"> {{ $c->nama }}</option> 
                            @endif
                        @endforeach
                      </select>
                      @if ($errors->has('nama_cool'))
                        <div class="text-danger">
                          {{ $errors->first('nama_cool') }}
                        </div>
                      @endif
                    </div>
                </div>
                {{-- <div class="row">
                  <label class="col-sm-2 col-form-label" style="margin-left: 0.5cm; color: black">Nama Cool</label>
                  <div class="col-sm-7" style="margin-bottom: 10px">
                    <select class="js-example-basic-multiple" name="nama_cool" multiple="multiple" style="width: 500px">
                      @foreach ($cool as $c)
                          <option value="{{ $c->id }}">{{ $c->nama }}</option>
                      @endforeach
                    </select>
                    @if ($errors->has('nama_cool'))
                      <div class="text-danger">
                        {{ $errors->first('nama_cool') }}
                      </div>
                    @endif
                  </div>
                </div>  --}}
                {{-- penginputan gambar --}}
                <div class="row" style="margin-top: 10px">
                    <label class="col-sm-2 col-form-label" style="color: black;">Upload Gambar</label>
                    <div class="col-sm-7">
                        <input class="form-control" @error('image') is-invalid @enderror type="file" id="image" name="image">
                      @if ($errors->has('image'))
                        <div class="text-danger">
                          {{ $errors->first('image') }}
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
@stop

@push('js')
<script>
    $(document).ready(function(){
      $('.js-example-basic-multiple').select2();
    })

    $(document).ready(function(){
      $('.js-example-basic-single').select2();
    })
</script>
@endpush