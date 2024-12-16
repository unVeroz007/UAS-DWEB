    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary shadow sticky-top">
        <div class="container-fluid">
            <!-- Logo and Brand -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="img/logo.jpeg" alt="Logo" width="70" height="70" class="d-inline-block rounded-circle align-text-top me-2">
                <span>Informatika UNAND</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Beranda</a>
                        <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                            <li><a class="dropdown-item" href="index.php#YT">Video Profil</a></li>
                            <li><a class="dropdown-item" href="index.php#Sambutan">Sambutan Kadep</a></li>
                            <li><a class="dropdown-item" href="index.php#Berita">Berita</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                            <li><a class="dropdown-item" href="profil.php#Profil_Jurusan">Profil</a></li>
                            <li><a class="dropdown-item" href="profil.php#Organisasi">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="profil.php#Tenaga">Staff</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Akademik</a>
                        <ul class="dropdown-menu" aria-labelledby="akademikDropdown">
                            <li><a class="dropdown-item" href="akademik.php#Kurikulum">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="akademik.php#Kalender">Kalender Akademik</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" id="kemahasiswaanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kemahasiswaan</a>
                        <ul class="dropdown-menu" aria-labelledby="kemahasiswaanDropdown">
                            <li><a class="dropdown-item" href="kemahasiswaan.php#Prestasi">Prestasi Mahasiswa</a></li>
                            <li><a class="dropdown-item" href="kemahasiswaan.php#Himpunan">Himpunan Mahasiswa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" id="fasilitasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fasilitas</a>
                        <ul class="dropdown-menu" aria-labelledby="fasilitasDropdown">
                            <li><a class="dropdown-item" href="fasilitas.php#Laboratorium">Laboratorium</a></li>
                            <li><a class="dropdown-item" href="fasilitas.php#Kelas">Ruang Belajar</a></li>
                            <li><a class="dropdown-item" href="fasilitas.php#Sekre">Ruang Himpunan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lulusan</a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="lulusan.php#ProfilLulusan">Profil Lulusan</a></li>
                            <li><a class="dropdown-item" href="lulusan.php#PeluangKerja">Peluang Kerja Lulusan</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Search Form -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light rounded-pill px-4" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <style>
        span {
            font-size: 1.5rem;
        }
        .nav-link {
            font-size: 1.2rem;
            font-weight: 500;
        }
        .navbar-nav {
            flex-direction: row;
        }
        .nav-item {
            margin: 0 10px;
        }
        .bg-gradient-primary {
            background: linear-gradient(90deg, #1d3557, #457b9d);
        }
        .navbar-nav .nav-link {
            transition: color 0.3s;
        }
        .dropdown-menu {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .dropdown-item:hover {
            background-color: #457b9d;
            color: #ffffff;
        }
        .navbar-toggler {
            border-color: #007bff;
        }
        .navbar-toggler-icon {
            background-color: #007bff;
        }
        .navbar-brand {
            white-space: nowrap;
        }
        @media (max-width: 992px) {
            .navbar-nav {
                flex-direction: column;
            }
            .nav-item {
                margin: 10px 0;
            }
        }
    </style>

