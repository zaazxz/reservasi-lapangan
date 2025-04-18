<header>
    
    {{-- Card : Start --}}
    <div class="container-fluid py-3 px-5 bg-primary text-white">
        <div class="row">
            
            {{-- Text : Start --}}
            <div class="col-5 d-flex align-items-center">
                <div class="container-fluid p-3">
                    <h1 class="text-white">Reservasi Lapangan</h1>
                    <p class="fw-bold">Aplikasi berbasis website reservasi lapangan RFA futsal. Kemudahan dalam reservasi, tanpa perlu daftar. cukup periksa, tentukan, dan konfirmasi jadwalmu.</p>
                    <a class="btn btn-light text-primary fw-bold" href="#">Reservasi Sekarang!</a>
                </div>
            </div>
            {{-- Text : End --}}

            {{-- Image : Start --}}
            <div class="col-7">
                <div class="container-fluid p-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/static/images/other/calendar.png') }}" class="img-fluid rounded-3">
                </div>
            </div>
            {{-- Image : End --}}

        </div>
    </div>
    {{-- Card : End --}}

</header>

<nav class="main-navbar mb-5 sticky-top">
    <div class="container d-flex justify-content-center">
        <ul>
            <li class="menu-item active">
                <a href="/" class='menu-link'>
                    <span><i class="bi bi-grid-fill"></i> Beranda</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="/reservation" class='menu-link'>
                    <span><i class="bi bi-file-earmark-medical-fill"></i> Reservasi</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="/schedule" class='menu-link'>
                    <span><i class="bi bi-table"></i> Jadwal</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="/about" class='menu-link'>                        
                    <span><i class="bi bi-telephone"></i> Tentang Kami</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="/login" class='menu-link'>                        
                    <span><i class="bi bi-box-arrow-in-right"></i> Masuk</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
