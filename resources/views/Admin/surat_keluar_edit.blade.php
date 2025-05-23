<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keluar</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- include summernote css/js -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <!-- Select2 Bootstrap4 Theme -->
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link active">
                        Welcome, {{ Auth::user()->nama }}
                    </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src="{{ asset('storage/assets/Logo_IPDN.png') }}" alt="Logo IPDN" class="brand-image img-circle"
                    width="150" height="150">
                <span class="brand-text font-weight-light">Arsip Surat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-house"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pegawai') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-user"></i>
                                <p>Daftar Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-user-plus"></i>
                                <p>
                                    Daftar jabatan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.jabatan') }}" class="nav-link">
                                        <i class="fa-regular fa-circle"></i>
                                        <p>Jabatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.goljabatan') }}" class="nav-link">
                                        <i class="fa-regular fa-circle"></i>
                                        <p>Jabatan Golongan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.unitkerja') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-briefcase"></i>
                                <p>
                                    Unit Kerja
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.surat_masuk') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-envelope"></i>
                                <p>
                                    Surat Masuk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.surat_keluar') }}" class="nav-link active">
                                <i class="nav-icon fa-solid fa-envelope"></i>
                                <p>
                                    Surat Keluar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('akun.edit', Auth::user()->id) }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-gear"></i>
                                <p>
                                    Setting
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit Surat Keluar</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.surat_keluar') }}">Surat Keluar</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <!-- Card -->
                            <div class="card card-primary shadow-none">
                                <form action="{{ route('admin.surat_keluar.update', $suratkeluar->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <!-- Form fields -->
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Kiri -->
                                            <div class="col-md-6">
                                                <!-- Nomor Surat -->
                                                <div class="form-group">
                                                    <label>Nomor Surat</label>
                                                    <div class="row g-2">
                                                        <div class="col">
                                                            <input type="text" class="form-control"
                                                                name="nomor_surat[]" placeholder="001" required
                                                                value="{{ explode('/', $suratkeluar->nomor_surat)[0] ?? '' }}">
                                                        </div>
                                                        <div class="col-auto d-flex align-items-center">
                                                            <span>/</span>
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control"
                                                                name="nomor_surat[]" placeholder="001" required
                                                                value="{{ explode('/', $suratkeluar->nomor_surat)[1] ?? '' }}">
                                                        </div>
                                                        <div class="col-auto d-flex align-items-center">
                                                            <span>/</span>
                                                        </div>
                                                        <div class="col">
                                                            <select class="form-control select2" name="unit_kerja_id"
                                                                required>
                                                                <option value="" disabled>UKXX</option>
                                                                @foreach ($unitKerja as $unit)
                                                                    <option value="{{ $unit->id }}"
                                                                        {{ $unit->id == $suratkeluar->unit_kerja_id ? 'selected' : '' }}>
                                                                        {{ $unit->kode_unitkerja }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Pengirim -->
                                                <div class="form-group">
                                                    <label>Pengirim</label>
                                                    <select class="form-control select2" name="pengirim" required>
                                                        <option value="" disabled>Pilih pengirim</option>
                                                        @foreach ($jabatans as $jabatan)
                                                            <option value="{{ $jabatan->id }}"
                                                                {{ $jabatan->id == $suratkeluar->pengirim ? 'selected' : '' }}>
                                                                {{ $jabatan->nama_jabatan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!-- Tembusan -->
                                                <div class="form-group">
                                                    <label>Tembusan</label>
                                                    <select class="select2" name="tembusan[]" multiple="multiple"
                                                        data-placeholder="Pilih tembusan" style="width: 100%;"
                                                        required>
                                                        @foreach ($jabatans as $jabatan)
                                                            <option value="{{ $jabatan->id }}"
                                                                {{ in_array($jabatan->id, $suratkeluar->tembusans->pluck('jabatan_id')->toArray()) ? 'selected' : '' }}>
                                                                {{ $jabatan->nama_jabatan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Kanan -->
                                            <div class="col-md-6">
                                                <!-- Tanggal Keluar -->
                                                <div class="form-group">
                                                    <label>Tanggal Keluar</label>
                                                    <input type="date" name="tanggal" class="form-control"
                                                        value="{{ $suratkeluar->tanggal }}" required>
                                                </div>
                                                <!-- Sifat -->
                                                <div class="form-group">
                                                    <label>Sifat</label>
                                                    <select class="form-control select2" name="sifat" required>
                                                        <option value="" disabled>Pilih sifat</option>
                                                        <option value="Penting"
                                                            {{ $suratkeluar->sifat == 'Penting' ? 'selected' : '' }}>
                                                            Penting</option>
                                                        <option value="Biasa"
                                                            {{ $suratkeluar->sifat == 'Biasa' ? 'selected' : '' }}>Biasa
                                                        </option>
                                                    </select>
                                                </div>
                                                <!-- Tujuan Surat -->
                                                <div class="form-group">
                                                    <label>Tujuan Surat</label>
                                                    <select class="select2" name="tujuan[]" multiple="multiple"
                                                        data-placeholder="Pilih tujuan" style="width: 100%;"
                                                        required>
                                                        @foreach ($jabatans as $jabatan)
                                                            <option value="{{ $jabatan->id }}"
                                                                {{ in_array($jabatan->id, $suratkeluar->tujuans->pluck('jabatan_id')->toArray()) ? 'selected' : '' }}>
                                                                {{ $jabatan->nama_jabatan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Full Row: Perihal -->
                                        <div class="form-group">
                                            <label for="summernote_perihal">Perihal</label>
                                            <textarea name="perihal" id="summernote_perihal" class="form-control" style="height: 150px">{{ $suratkeluar->perihal }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="summernote_isi">Isi Surat</label>
                                            <textarea name="isi_surat" id="summernote_isi" class="form-control" style="height: 150px">{{ $suratkeluar->isi_surat }}</textarea>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('admin.surat_keluar') }}"
                                            class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2024 Institut Pemerintahan Dalam Negeri</strong>
        </footer>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- AdminLTE -->
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Moment.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
        <!-- Select2 JS -->
        <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- Initialize -->

        <script>
            $(document).ready(function() {
                $('.select2').select2({
                    theme: 'bootstrap4'
                });
            });
            $(document).ready(function() {
                $('#summernote_perihal').summernote();
                $('#summernote_isi').summernote();
            });
        </script>
</body>

</html>
