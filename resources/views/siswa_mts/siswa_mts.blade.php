@section('title')
  Data Santri MTs
@endsection

@include('layouts.header_admin')

@section('css')
<!-- <link href="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />  -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.1.8/datatables.min.css" rel="stylesheet">
<style>
 
</style>
@endsection


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
                <div data-i18n="Layouts">Data Santri</div>
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
      <h4 class="fw-bold py-3 mb-4 text-primary"><span class="text-muted fw-light">Admin/</span> Data Siswa</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic with Icons -->
        <div class="col-xl">
        <!-- Bordered Table -->
        <div class="card">
        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <div class="card-body">
                  <div class="row">
                    <div col>
                      <a href="/siswa/mts/tambah">
                      <button type="button" class="btn btn-success mb-3 inline"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Data</button>
                      </a>
                      <a href="/siswa/form-upload">
                      <button type="button" class="btn btn-success mb-3 inline"><i class='menu-icon tf-icons bx bx-cloud-upload' ></i> upload</button>
                      </a>
                      <div class="btn-group" role="group">
                        <button 
                          id="btnGroupDrop1" 
                          type="button" 
                          class="btn btn-success mb-3 inline dropdown-toggle" 
                          data-bs-toggle="dropdown" 
                          aria-haspopup="true" 
                          aria-expanded="false"
                        >
                          <i class='menu-icon tf-icons  bx bx-cloud-download'></i>Export
                        </button> 
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                          @foreach ($data_kelas as $data)                         
                          <a href="/siswa/export/{{$data->tingkat}}/{{$data->kelas}}" class="dropdown-item">
                            {{ $data->kelas }}
                          </a>
                          @endforeach
                        </div>
                      </div>
                      
                      <!-- <button type="button" class="btn btn-success mb-3 mr-0">MTs</button>
                      <button type="button" class="btn btn-success mb-3">SMP</button>
                      <button type="button" class="btn btn-success mb-3 mr-0">MA</button> -->
                    </div>
                  </div>
                  
                  <div class="table-responsive text-nowrap">
                    <table id="data_siswa" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Foto</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Tetala</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/ Bordered Table -->
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

@section('script')
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.1.8/datatables.min.js"></script>
<script>
  $(document).ready( function () {
    loadData();
  } );

  function loadData(){
    $('#data_siswa').DataTable({
      processing:true,
      serverSide:true,
      ajax:{
        url:"{{ '/siswa/mts' }}"
      },
      columns:[
        {
          data : 'foto',
          name : 'foto',
        },  
        {
          data : 'nama',
          name : 'nama',
        },
        {
          data : 'kelas',
          name : 'kelas',
        },
        {
          data : 'tetala',
          name : 'tetala',
        },
        {
          data : 'jenis_kelamin',
          name : 'jenis_kelamin',
        },
        {
          data : 'alamat',
          name : 'alamat',
        },
        {
          data : 'aksi',
          name : 'aksi',
        },
      ],    
      
      language: {
        search: "Cari :   ",
        lengthMenu: "Tampilkan _MENU_ data",
        info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
        infoEmpty: "Menampilkan 0 hingga 0 dari 0 data", // Jika tidak ada data
        infoFiltered: "(disaring dari _MAX_ total data)", // Menampilkan info tentang data yang difilter
        paginate: {
          previous: "Sebelumnya",
          next: "Berikutnya",
        },
        zeroRecords: "Data tidak ditemukan" // Pesan jika tidak ada data yang cocok
      }

      
    });
  }
</script>
@endsection

@include('layouts.script')
