@section('title')
  Tambah Data Kelas
@endsection

@include('layouts.header_admin')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <img style="width: 100%" src="{{ asset('img/logo_landscape.png') }}" alt="">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1 mt-3">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-home"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- <li class="menu-item">
              <a href="/siswa" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-group"></i>
                <div data-i18n="Tables">Data Siswa</div>
              </a>
            </li> -->

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Layouts">Data Siswa</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/siswa/mts" class="menu-link">
                    <div data-i18n="Without menu">MTs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/siswa/smp" class="menu-link">
                    <div data-i18n="Without navbar">SMP</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/siswa/ma" class="menu-link">
                    <div data-i18n="Container">MA</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item active">
              <a href="/kelas" class="menu-link">
              <i class='menu-icon tf-icons bx bxs-bar-chart-alt-2'></i>
                <div data-i18n="Tables">Data Kelas</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="/guru" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-voice"></i>
                <div data-i18n="Tables">Data Guru</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="/berita" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-spreadsheet"></i>
                <div data-i18n="Tables">Berita Harian</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/register" class="menu-link" target="_blank">
                <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                <div data-i18n="Tables">Registrasi Admin</div>
              </a>
            </li>
            
            
          </ul>

            <li class="menu-item mb-3">
              <a href="/logout" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Tables">Logout</div>
              </a>
            </li>
            
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('img') }}/users.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('img') }}/users.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                            <small class="text-muted">{{ auth()->user()->role ?? 'Admin' }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/password/edit">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Ganti Password</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4 text-primary"><span class="text-muted fw-light">Admin/Kelas/</span> Tambah Data Kelas </h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic with Icons -->
        <div class="col-xl">

          <!-- data calon santri -->
          <div class="card mb-4">
            
            <div class="card-body">
                <!-- Menampilkan pesan kesalahan validasi -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/kelas/tambah" id="form-pendaftaran" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- <div class="row mb-3" id="form-pembayaran">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Bukti Pembayaran <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                          <input type="file" name="bukti_tf" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <small class="form-text">* File Bukti Pembayaran berupa .jpg, .png, .jpeg.</small> <br>
                      <small class="form-text">* Rekening Yayasan : xxxxxx .</small> <br>
                      <small class="form-text">* Maksimal Size File sebesar 5 MB.</small>
                    </div>
                </div> -->

                <!-- <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-0">DATA CALON SANTRI</h5>
                </div> -->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="">Tingkat<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                      <div class="form-check form-check-inline mt-1">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio1"
                            value="1"
                            name="tingkat"
                            {{ old('tingkat', $data_siswa->tingkat ?? '') === 'MTs' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio1">MTs</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio2"
                            value="2"
                            name="tingkat"
                            {{ old('tingkat', $data_siswa->tingkat ?? '') === 'SMP' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio2">SMP</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio3"
                            value="3"
                            name="tingkat"
                            {{ old('tingkat', $data_siswa->tingkat ?? '') === 'SMA' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio3">MA</label>
                        </div>
                  </div>
                </div>
                
               
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kelas<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class='bx bx-bar-chart-alt-2'></i></span>
                      <input
                        type="text"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        placeholder="VII"
                        aria-label="VII"
                        aria-describedby="basic-icon-default-fullname2"
                        name="kelas"
                        value="{{ old('kelas') }}"
                      />
                    </div>
                  </div>
                </div>
                  
                <div class="row mt-4 justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                </div>
              </form>
            </div>

            </div>
            </div>
          </div>
        </div>
      </div>
  
    <!-- / Content -->

    <!-- <div class="buy-now">
        <button type="button" data-bs-toggle="modal"
        data-bs-target="#modalToggle" class="btn btn-danger btn-buy-now">Baca Ketentuan Pendaftaran</button>
        </form>
    </div> -->


    <!-- Modal 1-->
    <!-- <div
    class="modal fade"
    id="modalToggle"
    aria-labelledby="modalToggleLabel"
    tabindex="-1"
    style="display: block"
    aria-hidden="true"
  >
    <div class="modal-lg modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalToggleLabel">Syarat & Ketentuan Pendafatran</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
            <ul>
                <li>Seluruh berkas persyaratan berbentuk file berformat PDF (kecuali file foto .jpg, .jpeg, .png) dengan ukuran masing-masing maksimal 5 MB.
                </li>
                <li>Scan raport dua semester terakhir.</li>
                <li>File foto setengah badan calon santri dengan ketentuan,
                    Pas Photo 3 x 4, background foto warna merah, baju putih berkerah, tanpa atribut, tanpa penutup kepala dan tanpa kacamata.</li>
                <li>Scan Akte Kelahiran.</li>
                <li>Scan Kartu Keluarga (KK).</li>
                <li>Scan Surat Kesehatan dan Hasil Lab HbsAg.</li>
                <li>Scan surat pernyataan kesanggupan: membayar biaya pendidikan, mengikuti pembelajaran tatap muka, menjalani masa pengabdian setelah lulus MA/SMA, kebenaran data yang diberikan dll, sesuai format yang disediakan (dapat diunduh usai pendaftaran online).</li>
                <li>Scan sertifikat prestasi minimal tingkat provinsi dan bukti hafalan (opsional).</li>
            </ul>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-primary"
            data-bs-target="#modalToggle2"
            data-bs-toggle="modal"
            data-bs-dismiss="modal"
          >
            Tutup
          </button>
        </div>
      </div>
    </div>
  </div> -->

  {{-- Top Up Modal --}}
  <!-- <script>
    window.addEventListener('DOMContentLoaded', function () {
        @if (!$errors->any())
            var myModal = new bootstrap.Modal(document.getElementById('modalToggle'));
            myModal.show();
        @endif
    });
</script>

{{-- Form Quesry By Js --}}
<script>
    document.getElementById('submit-button').addEventListener('click', function () {
        // Dalam logika ini, Anda akan memeriksa apakah bukti pembayaran telah diunggah.
        // Jika iya, Anda akan menampilkan elemen-elemen form pengisian data.
        if (buktiPembayaranUploaded) {
            document.getElementById('form-pengisian-data').style.display = 'block';
        } else {
            // Tampilkan pesan kesalahan jika bukti pembayaran belum diunggah.
            alert('Silakan unggah bukti pembayaran terlebih dahulu.');
        }
    });
</script> -->



@include('layouts.footer_form')

@include('layouts.script')
