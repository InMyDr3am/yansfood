<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">

    <a href="/" class="logo me-2"> <img src="{{asset('lp/assets/img/logo.png') }}" alt="" class="img-fluid"></a>
    <h2 class="logo me-auto"> <a href="/">  GreenSchool</a></h2>
    <!-- Uncomment below if you prefer to use an image logo -->
    

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="/" class="active">Home</a></li>

        <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/sejarah">Sejarah</a></li>
            <li><a href="/profil-visi-misi">Profil & Visi Misi</a></li>
            <li><a href="/list-staff">List Staff Sekolah</a></li>
          </ul>
        </li>
        <li><a href="/list-artikel-kegiatan">Kegiatan</a></li>
        <li><a href="/list-artikel-prestasi">Prestasi</a></li>
        <li><a href="/kontak">Kontak</a></li>
        {{-- <li><a href="/daftar/index" class="getstarted">Daftar</a></li> --}}
        <li class="dropdown"><a href="#"><span>Pendaftaran</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/pendaftaran/tata-cara-pendaftaran">Tata Cara Pendaftaran</a></li>
            <li><a href="/pendaftaran/input-data-siswa">Mulai Daftar</a></li>
            <li><a href="/pendaftaran/cek-data">Cek Data Pendaftaran</a></li>
          </ul>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>