@extends('layouts.main')

@section('styling')
    <style>
        .card-landing {
            transition: 0.5s;
        }

        .card-landing:hover {
            background-color: #435ebe;
            color: white;
            transition: 0.5s;
            transform: scale(1.1, 1.1)
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid row d-flex justify-content-center">

        <div class="col-6 p-4">
            <a href="/schedule">
                <div class="card p-3 shadow-lg card-landing">
                    <div class="col-12 text-center">
                        <i class="bi bi-calendar-day" style="font-size: 80px"></i>
                    </div>
                    <div class="col-12 text-center">
                        <h1>Jadwal</h1>
                    </div>
                    <div class="col-12 text-center">
                        <p>Periksa jadwal reservasi</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-6 p-4">
            <a href="/reservation">
                <div class="card p-3 shadow-lg card-landing">
                    <div class="col-12 text-center">
                        <i class="bi bi-calendar-check" style="font-size: 80px"></i>
                    </div>
                    <div class="col-12 text-center">
                        <h1>Reservasi</h1>
                    </div>
                    <div class="col-12 text-center">
                        <p>Reservasi Lapangan yang kamu pilih.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-6 p-4">
            <a href="/price">
                <div class="card p-3 shadow-lg card-landing">
                    <div class="col-12 text-center">
                        <i class="bi bi-currency-dollar" style="font-size: 80px"></i>
                    </div>
                    <div class="col-12 text-center">
                        <h1>Harga Sewa</h1>
                    </div>
                    <div class="col-12 text-center">
                        <p>List Harga sewa lapangan</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-6 p-4">
            <a href="/about">
                <div class="card p-3 shadow-lg card-landing">
                    <div class="col-12 text-center">
                        <i class="bi bi-patch-question" style="font-size: 80px"></i>
                    </div>
                    <div class="col-12 text-center">
                        <h1>Tentang Kami</h1>
                    </div>
                    <div class="col-12 text-center">
                        <p>Tentang Kami</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
@endsection
