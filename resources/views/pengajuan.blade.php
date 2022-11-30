<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Pengajuan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('dashTemplate/template') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('dashTemplate/template') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('dashTemplate/template') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('dashTemplate/template') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('dashTemplate/template') }}/images/lontarlab2.png" />
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-5 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <div class="card-header">
                        <center> <div class="brand-logo" >
                            <img src="{{ asset('dashTemplate/template') }}/images/lontarlab2.jpg" alt="logo" >
                          </div>
                        <h3>Form Pengajuan</h3></center> <br>
                    </div>
                    <div class="card-body">
                        <form class="pt-3" action="{{route('pengajuan')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Pengajuan</label>
                                        <input name="nama" type="text" class="form-control"
                                            value="{{ old('nama') }}" id="exampleFormControlInput1"
                                            placeholder="Nama Lengkap">
                                        @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input name="email" type="text" class="form-control"
                                            value="{{ old('email') }}" id="exampleFormControlInput1"
                                            placeholder="contoh@gmail.com">
                                        @error('email')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                  
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label">Instansi</label>
                                            <input name="instansi" type="text" class="form-control"
                                                value="{{ old('instansi') }}" id="exampleFormControlInput1"
                                                placeholder="Asal Sekolah">
                                            @error('universitas')
                                            <strong>{{ $message }}</strong>
                                            @enderror
                                        </div>
                                  

                                    
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                                <option value="">-Pilih</option>
                                                <option value="Laki-laki"
                                                    {{ old('jenis_kelamin') == 'laki-laki' ? 'selected=selected' : '' }}>Laki-laki
                                                </option>
                                                <option value="Perempuan"
                                                    {{ old('jenis_kelamin') == 'perempuan' ? 'selected=selected' : '' }}>Perempuan
                                                </option>
                                            </select>
                                            @error('jenis_kelamin')
                                            <strong>{{ $message }}</strong>
                                            @enderror
                                        </div>
                                   

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jurusan Sekolah</label>
                                        <input name="jurusan" type="text" class="form-control"
                                            value="{{ old('jurusan') }}" id="exampleFormControlInput1"
                                            placeholder="Masukan jurusan sekolah">
                                        @error('jurusan')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Semester/Kelas</label>
                                        <input name="semester" type="text" class="form-control"
                                            value="{{ old('semester') }}" id="exampleFormControlInput1"
                                            placeholder="Masukan semester dan kelas">
                                        @error('semester')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <input name="alamat" type="text" class="form-control"
                                            value="{{ old('alamat') }}" id="exampleFormControlInput1"
                                            placeholder="Masukan alamat sekolah">
                                        @error('alamat')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No Whatsapp</label>
                                        <input name="no_hp" type="text" class="form-control" maxlength="13"
                                            data-minlength="13" id="exampleFormControlInput1"
                                            placeholder="Masukan no whatsapp" value="{{ old('no_hp') }}">
                                        @error('no_hp')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>




                                     
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Angkatan</label>
                                        <input name="angkatan" type="text" class="form-control" maxlength="4"
                                            value="{{ old('angkatan') }}" data-minlength="4"
                                            id="exampleFormControlInput1" placeholder="contoh: 2020">
                                        @error('angkatan')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <button class="btn btn-success" type="submit">{{ __('pengajuan') }}</i>
                                            KIRIM</button>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                    <!--end card body-->
                </div>
                <!--end card -->
            </div>
            <!--end container-->
        </div>
    </div>
</div>
</div>
</body>

</html>