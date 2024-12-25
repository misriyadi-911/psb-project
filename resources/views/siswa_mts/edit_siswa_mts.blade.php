@section('title')
  Edit Data Siswa
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

            <li class="menu-item active">
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

            <li class="menu-item">
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
      <h4 class="fw-bold py-3 mb-4 text-primary"><span class="text-muted fw-light">Admin/Siswa/</span>Edit Data Siswa</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic with Icons -->
        <div class="col-xl">

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
            <form action="/siswa/mts/update" id="form-pendaftaran" method="POST" enctype="multipart/form-data">
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
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-0">DATA CALON SANTRI</h5>
                </div>
                <input type="hidden" value="{{ $data_siswa->id }}" name="id_siswa">
                <input type="hidden" value="{{ $data_siswa->tingkat }}" name="tingkat">
                <input type="hidden" value="{{ $data_siswa->kelas }}" name="kelas">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Foto Santri <small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group">
                        <input type="file" name="foto" class="form-control" id="inputGroupFile02" value="{{ old('foto') }}" accept=".jpg, .jpeg, .png"/>
                        <input type="hidden" name="foto_lama" class="form-control" id="inputGroupFile02" value="{{ $data_siswa->foto_santri }}" accept=".jpg, .jpeg, .png"/>
                       
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <a href="{{ asset('img') }}/{{ $data_siswa->foto_santri }}" target="blank">{{ asset('img') }}/{{ $data_siswa->foto_santri }}</a><br>
                    <small class="form-text">* File foto dapat berupa .jpg, .png, .jpeg.</small> <br>
                    <small class="form-text">* Gunakan Foto latar belakang biru.</small> <br>
                    <small class="form-text">* Maksimal Size Foto 5 MB.</small>
                  </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Lengkap <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="Fulan Bin Fulan"
                          aria-label="Fulan Bin Fulan"
                          aria-describedby="basic-icon-default-fullname2"
                          name="nama"
                          value="{{ $data_siswa->nama }}"
                        />
                      </div>
                  </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NISN<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="0875673xxx"
                          aria-label="0875673xxx"
                          aria-describedby="basic-icon-default-fullname2"
                          name="nisn"
                          value="{{ $data_siswa->nisn }}"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="">Tempat/Tanggal Lahir <small class="text-danger">*</small></label>
                        <div class="col-sm-5">
                            <input name="tempat_lahir" class="form-control" type="text" placeholder="Kota kelahiran" id="html5-date-input" value="{{ $data_siswa->tempat_lahir }}"/>
                        </div>
                        <div class="col-sm-5">
                            <input name="tanggal_lahir" class="form-control" type="date" placeholder="2021-06-18" id="html5-date-input" value="{{ $data_siswa->tanggal_lahir }}"/>
                        </div>
                  </div>
                  <div class="row mt-3 mb-3">
                    <label class="col-sm-2 col-form-label" for="">Jenis Kelamin <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline mt-1">
                            <input
                              class="form-check-input"
                              type="radio"
                              id="inlineRadio1"
                              value="Ikhwan"
                              name="jenis_kelamin"
                              {{ $data_siswa->jenis_kelamin === 'Ikhwan' ? 'checked' : '' }}                              
                            />
                            <label class="form-check-label" for="inlineRadio1">Ikhwan</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              id="inlineRadio2"
                              value="Akhwat"
                              name="jenis_kelamin"
                              {{ $data_siswa->jenis_kelamin === 'Akhwat' ? 'checked' : '' }}
                            />
                            <label class="form-check-label" for="inlineRadio2">Akhwat</label>
                          </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Berat Badan (Kg)<small class="text-danger">*</small></label>
                    <div class="col-sm-8">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class='bx bx-tachometer'></i>
                        </span>
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="67"
                          aria-label="67"
                          aria-describedby="basic-icon-default-fullname2"
                          name="berat_badan"
                          value="{{ $data_siswa->berat_badan }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tinggi Badan (cm)<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="bx bx-ruler"></i
                        ></span>
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="170"
                          aria-label="170"
                          aria-describedby="basic-icon-default-fullname2"
                          name="tinggi_badan"
                          value="{{ $data_siswa->tinggi_badan }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Anak Ke - <small class="text-danger">*</small></label>
                    <div class="col-sm-8">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="1"
                          aria-label="1"
                          aria-describedby="basic-icon-default-fullname2"
                          name="anak_ke"
                          value="{{ $data_siswa->anak_ke }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jumlah Saudara<small class="text-danger">*</small></label>
                    <div class="col-sm-8">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="bx bx-group"></i
                        ></span>
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="3"
                          aria-label="3"
                          aria-describedby="basic-icon-default-fullname2"
                          name="jumlah_saudara"
                          value="{{ $data_siswa->jumlah_saudara }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Desa<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-map"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="Larangan Luar"
                          aria-label="Larangan Luar"
                          aria-describedby="basic-icon-default-email2"
                          name="desa"
                          value="{{ $data_siswa->desa }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kecamatan<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-map"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="Larangan"
                          aria-label="Larangan"
                          aria-describedby="basic-icon-default-email2"
                          name="kecamatan"
                          value="{{ $data_siswa->kecamatan }}"
                        />
                      </div>
                    </div>
                  </div><div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kabupaten<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-map"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="Pamekasan"
                          aria-label="Pamekasan"
                          aria-describedby="basic-icon-default-email2"
                          name="kabupaten"
                          value="{{ $data_siswa->kabupaten }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Nomor Hp<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-phone"></i
                        ></span>
                        <input
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="082345678xxx"
                          aria-label="082345678xxx"
                          aria-describedby="basic-icon-default-phone2"
                          name="nomor_hp"
                          value="{{ $data_siswa->nomor_hp }}"
                        />
                      </div>
                    </div>
                </div>
                <!-- <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Hubungan Wali ke Santri</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-user-voice'></i></span>
                        <input
                          name="hubungan_wali"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Keponakan"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                        />
                      </div>
                    </div>
                </div> -->
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kartu Keluarga <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <input type="hidden" name="kk_lama" value="{{ $data_siswa->kartu_keluarga }}">
                        <input type="file" name="kk" class="form-control" id="inputGroupFile03" accept=".pdf"/>
                        <label class="input-group-text" for="inputGroupFile03">Upload</label>
                      </div>
                      <a href="{{ asset('doc') }}/{{ $data_siswa->kartu_keluarga }}" target="blank">{{ asset('doc') }}/{{ $data_siswa->kartu_keluarga }}</a><br>
                      <small class="form-text">* Scan Kartu Keluarga Asli.</small> <br>
                      <small class="form-text">* File Scan Kartu Keluarga dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Akte Kelahiran <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <input type="hidden" name="akte_lama" value="{{ $data_siswa->akte_kelahiran }}">
                        <input type="file" name="akte" class="form-control" id="inputGroupFile04" accept=".pdf"/>
                        <label class="input-group-text" for="inputGroupFile04">Upload</label>
                      </div>
                      <a href="{{ asset('doc') }}/{{ $data_siswa->akte_kelahiran }}" target="blank">{{ asset('doc') }}/{{ $data_siswa->akte_kelahiran }}</a><br>
                      <small class="form-text">* Scan Akte Kelahiran Asli.</small> <br>
                      <small class="form-text">* File Scan Akte Kelahiran dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div>
                <!-- <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Surat Kesehatan <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                          <input type="file" name="kesehatan" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <small class="form-text">* Scan Surat Kesehatan.</small> <br>
                      <small class="form-text">* File Scan Surat Kesehatan dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div> -->
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Scan raport <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <input type="hidden" name="raport_lama" value="{{ $data_siswa->raport }}">
                        <input type="file" name="raport" class="form-control" id="inputGroupFile05" accept=".pdf"/>
                        <label class="input-group-text" for="inputGroupFile05">Upload</label>
                      </div>
                      <a href="{{ asset('doc') }}/{{ $data_siswa->raport }}" target="blank">{{ asset('doc') }}/{{ $data_siswa->raport }}</a><br>
                      <small class="form-text">* Scan Raport 2 Semester terakhir.</small> <br>
                      <small class="form-text">* File Scan Raport dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div>
                <!-- <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Surat Kesanggupan <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group">
                          <input type="file" name="ijazah" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <small class="form-text">* Silahkan donwload terlebih dahulu pernyataan Surat Kesanggupan.</small> <br>
                      <small class="form-text">* File Surat Kesanggupan dalam bentuk soft copy .pdf.</small> <br>
                      <small class="form-text">* Maksimal Size Pdf 5 MB.</small>
                    </div>
                </div> -->
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Keahlian khusus</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-run'></i></span>
                        <input
                          name="keahlian"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Atletik, berenang, dll."
                          aria-label="Atletik, berenang, dll."
                          aria-describedby="basic-icon-default-phone2"
                          name="keahlian"
                          value="{{ $data_siswa->keahlian }}"
                        />
                      </div>
                    </div>
                </div>
                <hr>
                <!-- data sekolah asal calon santri  -->
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-1">DATA SEKOLAH ASAL CALON SANTRI</h5>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tahun Lulus<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="bx bx-calendar"></i
                        ></span>
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="2025"
                          aria-label="2025"
                          aria-describedby="basic-icon-default-fullname2"
                          name="tahun_lulus"
                          value="{{ $data_sekolah_asal[0]->tahun_lulus }}"
                        />
                      </div>
                    </div>
                  </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Nama Sekolah<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class='bx bx-building-house'></i></i
                      ></span>
                      <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="MTs Al-Barokah."
                        aria-label="MTs Al-Barokah"
                        aria-describedby="basic-icon-default-company2"
                        name="nama_sekolah"
                        value="{{ $data_sekolah_asal[0]->nama_sekolah }}"
                      />
                    </div>
                  </div>
                </div>
                <!-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="">Alamat Sekolah<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline mt-1">
                            <input
                              class="form-check-input"
                              type="radio"
                              id="inlineRadio1"
                              value="Ikhwan"
                              name="jenis_kelamin"
                            />
                            <label class="form-check-label" for="inlineRadio1">Ikhwan</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              id="inlineRadio2"
                              value="Akhwat"
                              name="jenis_kelamin"
                            />
                            <label class="form-check-label" for="inlineRadio2">Akhwat</label>
                          </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="">Tempat/Tanggal Lahir <small class="text-danger">*</small></label>
                        <div class="col-sm-5">
                            <input name="tempat_lahir" class="form-control" type="text" placeholder="Kota kelahiran" id="html5-date-input"/>
                        </div>
                        <div class="col-sm-5">
                            <input name="tgl_lahir" class="form-control" type="date" placeholder="2021-06-18" id="html5-date-input"/>
                        </div>
                  </div> -->
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Alamat Sekolah <small class="text-danger">*</small></label>
                    <!-- <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-buildings"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="PPMI Shohwatul Is'ad"
                          aria-label="john.doe"
                          aria-describedby="basic-icon-default-email2"
                          name="asal_sekolah"
                        />
                      </div>
                    </div> -->
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Desa<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-map"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="Larangan Luar"
                          aria-label="Larangan Luar"
                          aria-describedby="basic-icon-default-email2"
                          name="desa_sekolah"
                          value="{{ $data_sekolah_asal[0]->desa }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kecamatan<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-map"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="Larangan"
                          aria-label="Larangan"
                          aria-describedby="basic-icon-default-email2"
                          name="kecamatan_sekolah"
                          value="{{ $data_sekolah_asal[0]->kecamatan }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kabupaten<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-map"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="Pamekasan"
                          aria-label="john.doe"
                          aria-describedby="basic-icon-default-email2"
                          name="kabupaten_sekolah"
                          value="{{ $data_sekolah_asal[0]->kabupaten }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Telepon Sekolah<small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-phone"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="082456789xxx"
                          aria-label="082456789xxx"
                          aria-describedby="basic-icon-default-email2"
                          name="telepon_sekolah"
                          value="{{ $data_sekolah_asal[0]->telepon_sekolah }}"
                        />
                      </div>
                    </div>
                  </div>

                   <!-- data orang tua calon santri  -->
                  <hr>
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-1">DATA ORANG TUA/WALI CALON SANTRI</h5>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Nama Ayah <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          name="nama_ayah"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Ali Bin Abi Thalib"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          value="{{ $data_orang_tua[0]->nama_ayah }}"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="">Tempat/Tanggal Lahir <small class="text-danger">*</small></label>
                      <div class="col-sm-5">
                          <input name="tempat_lahir_ayah" class="form-control" type="text" placeholder="Kota kelahiran" id="html5-date-input" value="{{ $data_orang_tua[0]->tempat_lahir_ayah }}"/>
                      </div>
                      <div class="col-sm-5">
                          <input name="tanggal_lahir_ayah" class="form-control" type="date" placeholder="2021-06-18" id="html5-date-input" value="{{ $data_orang_tua[0]->tanggal_lahir_ayah }}"/>
                      </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Alamat Ayah <small class="text-danger">*</small></label>
                    <!-- <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-buildings"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="PPMI Shohwatul Is'ad"
                          aria-label="john.doe"
                          aria-describedby="basic-icon-default-email2"
                          name="asal_sekolah"
                        />
                      </div>
                    </div> -->
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Desa<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-map"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="Larangan Luar"
                        aria-label="Larangan Luar"
                        aria-describedby="basic-icon-default-email2"
                        name="desa_ayah"
                        value="{{ $data_orang_tua[0]->desa_ayah }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kecamatan<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-map"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="Larangan"
                        aria-label="Larangan"
                        aria-describedby="basic-icon-default-email2"
                        name="kecamatan_ayah"
                        value="{{ $data_orang_tua[0]->kecamatan_ayah }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kabupaten<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-map"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="Pamekasan"
                        aria-label="john.doe"
                        aria-describedby="basic-icon-default-email2"
                        name="kabupaten_ayah"
                        value="{{ $data_orang_tua[0]->kabupaten_ayah }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">No HP Ayah<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-phone"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="082456789xxx"
                        aria-label="082456789xxx"
                        aria-describedby="basic-icon-default-email2"
                        name="nohp_ayah"
                        value="{{ $data_orang_tua[0]->nohp_ayah }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pendidikan Ayah <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select name="pendidikan_ayah" class="form-select" id="inputGroupSelect02">
                              <option selected>{{ $data_orang_tua[0]->pendidikan_ayah }}</option>
                              <option value="SD">SD</option>
                              <option value="SMP">SMP</option>
                              <option value="SMA">SMA</option>
                              <option value="D3">D3</option>
                              <option value="S1">S1</option>
                              <option value="S2">S2</option>
                              <option value="S3">S3</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                          </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pekerjaan Ayah <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-briefcase' ></i></span>
                        <input
                          name="pekerjaan_ayah"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Pegawai Negeri Sipil"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          value="{{ $data_orang_tua[0]->pekerjaan_ayah }}"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                  <label class="col-sm-2 col-form-label" for="">Penghasilan Ayah<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                  <div class="form-check form-check-inline mt-1">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio1"
                            value="kurang dari 1.000.000"
                            name="penghasilan_ayah"
                            {{ $data_orang_tua[0]->penghasilan_ayah === 'kurang dari 1.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio1">kurang dari 1.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio2"
                            value="1.000.000 - 2.000.000"
                            name="penghasilan_ayah"
                            {{ $data_orang_tua[0]->penghasilan_ayah === '1.000.000 - 2.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio2">1.000.000 - 2.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio3"
                            value="2.000.000 - 4.000.000"
                            name="penghasilan_ayah"
                            {{ $data_orang_tua[0]->penghasilan_ayah === '2.000.000 - 4.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio3">2.000.000 - 4.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio4"
                            value="4.000.000 - 6.000.000"
                            name="penghasilan_ayah"
                            {{ $data_orang_tua[0]->penghasilan_ayah === '4.000.000 - 6.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio4">4.000.000 - 6.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio5"
                            value="6.000.000 - 10.000.000"
                            name="penghasilan_ayah"
                            {{ $data_orang_tua[0]->penghasilan_ayah === '6.000.000 - 10.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio5">6.000.000 - 10.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio6"
                            value="lebih dari 10.000.000"
                            name="penghasilan_ayah"
                            {{ $data_orang_tua[0]->penghasilan_ayah === 'lebih dari 10.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio6">lebih dari 10.000.000</label>
                        </div>
                  </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Nama Ibu <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          name="nama_ibu"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Fatimah"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          value="{{ $data_orang_tua[0]->nama_ibu }}"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="">Tempat/Tanggal Lahir <small class="text-danger">*</small></label>
                      <div class="col-sm-5">
                          <input name="tempat_lahir_ibu" class="form-control" type="text" placeholder="Kota kelahiran" id="html5-date-input" value="{{ $data_orang_tua[0]->tempat_lahir_ibu }}"/>
                      </div>
                      <div class="col-sm-5">
                          <input name="tanggal_lahir_ibu" class="form-control" type="date" placeholder="2021-06-18" id="html5-date-input" value="{{ $data_orang_tua[0]->tanggal_lahir_ibu }}"/>
                      </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Alamat Ibu <small class="text-danger">*</small></label>
                    <!-- <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-buildings"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="PPMI Shohwatul Is'ad"
                          aria-label="john.doe"
                          aria-describedby="basic-icon-default-email2"
                          name="asal_sekolah"
                        />
                      </div>
                    </div> -->
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Desa<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-map"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="Larangan Luar"
                        aria-label="Larangan Luar"
                        aria-describedby="basic-icon-default-email2"
                        name="desa_ibu"
                        value="{{ $data_orang_tua[0]->desa_ibu }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kecamatan<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-map"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="Larangan"
                        aria-label="Larangan"
                        aria-describedby="basic-icon-default-email2"
                        name="kecamatan_ibu"
                        value="{{ $data_orang_tua[0]->kecamatan_ibu }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kabupaten<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-map"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="Pamekasan"
                        aria-label="john.doe"
                        aria-describedby="basic-icon-default-email2"
                        name="kabupaten_ibu"
                        value="{{ $data_orang_tua[0]->kabupaten_ibu }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">No HP Ibu<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-phone"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="082456789xxx"
                        aria-label="082456789xxx"
                        aria-describedby="basic-icon-default-email2"
                        name="nohp_ibu"
                        value="{{ $data_orang_tua[0]->nohp_ibu }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pendidikan Ibu <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select name="pendidikan_ibu" class="form-select" id="inputGroupSelect02">
                              <option selected>{{ $data_orang_tua[0]->pendidikan_ibu }}</option>
                              <option value="SD">SD</option>
                              <option value="SMP">SMP</option>
                              <option value="SMA">SMA</option>
                              <option value="D3">D3</option>
                              <option value="S1">S1</option>
                              <option value="S2">S2</option>
                              <option value="S3">S3</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                          </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pekerjaan Ibu <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-briefcase' ></i></span>
                        <input
                          name="pekerjaan_ibu"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Guru"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          value="{{ $data_orang_tua[0]->pekerjaan_ibu }}"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                  <label class="col-sm-2 col-form-label" for="">Penghasilan Ibu<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                  <div class="form-check form-check-inline mt-1">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio1"
                            value="kurang dari 1.000.000"
                            name="penghasilan_ibu"
                            {{ $data_orang_tua[0]->penghasilan_ibu === 'kurang dari 1.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio1">kurang dari 1.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio2"
                            value="1.000.000 - 2.000.000"
                            name="penghasilan_ibu"
                            {{ $data_orang_tua[0]->penghasilan_ibu === '1.000.000 - 2.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio2">1.000.000 - 2.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio3"
                            value="2.000.000 - 4.000.000"
                            name="penghasilan_ibu"
                            {{ $data_orang_tua[0]->penghasilan_ibu === '2.000.000 - 4.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio3">2.000.000 - 4.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio4"
                            value="4.000.000 - 6.000.000"
                            name="penghasilan_ibu"
                            {{ $data_orang_tua[0]->penghasilan_ibu === '4.000.000 - 6.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio4">4.000.000 - 6.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio5"
                            value="6.000.000 - 10.000.000"
                            name="penghasilan_ibu"
                            {{ $data_orang_tua[0]->penghasilan_ibu === '6.000.000 - 10.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio5">6.000.000 - 10.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio6"
                            value="lebih dari 10.000.000"
                            name="penghasilan_ibu"
                            {{ $data_orang_tua[0]->penghasilan_ibu === 'lebih dari 10.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio6">lebih dari 10.000.000</label>
                        </div>
                  </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Nama Wali <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          name="nama_wali"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Fatimah"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          value="{{ $data_orang_tua[0]->nama_wali }}"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="">Tempat/Tanggal Lahir <small class="text-danger">*</small></label>
                      <div class="col-sm-5">
                          <input name="tempat_lahir_wali" class="form-control" type="text" placeholder="Kota kelahiran" id="html5-date-input" value="{{ $data_orang_tua[0]->tempat_lahir_wali }}"/>
                      </div>
                      <div class="col-sm-5">
                          <input name="tanggal_lahir_wali" class="form-control" type="date" placeholder="2021-06-18" id="html5-date-input" value="{{ $data_orang_tua[0]->tanggal_lahir_wali }}"/>
                      </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Alamat Wali <small class="text-danger">*</small></label>
                    <!-- <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-map"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          placeholder="PPMI Shohwatul Is'ad"
                          aria-label="john.doe"
                          aria-describedby="basic-icon-default-email2"
                          name="asal_sekolah"
                        />
                      </div>
                    </div> -->
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Desa<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-map"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="Larangan Luar"
                        aria-label="Larangan Luar"
                        aria-describedby="basic-icon-default-email2"
                        name="desa_wali"
                        value="{{ $data_orang_tua[0]->desa_wali }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kecamatan<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-map"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="Larangan"
                        aria-label="Larangan"
                        aria-describedby="basic-icon-default-email2"
                        name="kecamatan_wali"
                        value="{{ $data_orang_tua[0]->kecamatan_wali }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-scholl">Kabupaten<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-map"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="Pamekasan"
                        aria-label="john.doe"
                        aria-describedby="basic-icon-default-email2"
                        name="kabupaten_wali"
                        value="{{ $data_orang_tua[0]->kabupaten_wali }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">No HP wali<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-phone"></i></span>
                      <input
                        type="text"
                        id="basic-icon-default-email"
                        class="form-control"
                        placeholder="082456789xxx"
                        aria-label="082456789xxx"
                        aria-describedby="basic-icon-default-email2"
                        name="nohp_wali"
                        value="{{ $data_orang_tua[0]->nohp_wali }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pendidikan wali <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select name="pendidikan_wali" class="form-select" id="inputGroupSelect02">
                              <option selected>{{$data_orang_tua[0]->pendidikan_wali}}</option>
                              <option value="SD">SD</option>
                              <option value="SMP">SMP</option>
                              <option value="SMA">SMA</option>
                              <option value="D3">D3</option>
                              <option value="S1">S1</option>
                              <option value="S2">S2</option>
                              <option value="S3">S3</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Pilihan</label>
                          </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Pekerjaan wali <small class="text-danger">*</small></label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-briefcase' ></i></span>
                        <input
                          name="pekerjaan_wali"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Pegawai Negeri Sipil"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          value="{{ $data_orang_tua[0]->pekerjaan_wali }}"
                        />
                      </div>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                  <label class="col-sm-2 col-form-label" for="">Penghasilan wali<small class="text-danger">*</small></label>
                  <div class="col-sm-10">
                  <div class="form-check form-check-inline mt-1">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio1"
                            value="kurang dari 1.000.000"
                            name="penghasilan_wali"
                            {{ $data_orang_tua[0]->penghasilan_wali === 'kurang dari 1.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio1">kurang dari 1.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio2"
                            value="1.000.000 - 2.000.000"
                            name="penghasilan_wali"
                            {{ $data_orang_tua[0]->penghasilan_wali === '1.000.000 - 2.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio2">1.000.000 - 2.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio3"
                            value="2.000.000 - 4.000.000"
                            name="penghasilan_wali"
                            {{ $data_orang_tua[0]->penghasilan_wali === '2.000.000 - 4.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio3">2.000.000 - 4.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio4"
                            value="4.000.000 - 6.000.000"
                            name="penghasilan_wali"
                            {{ $data_orang_tua[0]->penghasilan_wali === '4.000.000 - 6.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio4">4.000.000 - 6.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio5"
                            value="6.000.000 - 10.000.000"
                            name="penghasilan_wali"
                            {{ $data_orang_tua[0]->penghasilan_wali === '6.000.000 - 10.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio5">6.000.000 - 10.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="inlineRadio6"
                            value="lebih dari 10.000.000"
                            name="penghasilan_wali"
                            {{ $data_orang_tua[0]->penghasilan_wali === 'lebih dari 10.000.000' ? 'checked' : '' }}
                          />
                          <label class="form-check-label" for="inlineRadio6">lebih dari 10.000.000</label>
                        </div>
                  </div>
                </div>
                <div class="row mt-3">
                    <label class="col-sm-2 mt-2 form-label" for="basic-icon-default-phone">Hubungan Wali ke Santri</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class='bx bx-user-voice'></i></span>
                        <input
                          name="hubungan_wali"
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="Keponakan"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                          value="{{ $data_orang_tua[0]->hubungan_wali }}"
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
