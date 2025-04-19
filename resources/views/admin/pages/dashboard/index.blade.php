@extends('admin.layouts.index')

@section('content')
    <div class="row">

        {{-- Card : Start --}}
        <div class="col-12">
            <div class="row">
                
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 bg-primary rounded-3 mb-2" style="width: 80px; height: 80px;">
                                    <center>
                                        <i class="bi bi-calendar-check" style="font-size: 50px; color: white; text-align: center;"></i>
                                    </center>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-muted font-semibold text-center">All Reservations</h6>
                                    <h6 class="font-extrabold mb-0 text-center">{{ $reservationAll }}</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 bg-secondary rounded-3 mb-2" style="width: 80px; height: 80px;">
                                    <center>
                                        <i class="bi bi-calendar-check" style="font-size: 50px; color: white; text-align: center;"></i>
                                    </center>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-muted font-semibold text-center">Pending Reservations</h6>
                                    <h6 class="font-extrabold mb-0 text-center">{{ $reservationPending }}</h6>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 bg-success rounded-3 mb-2" style="width: 80px; height: 80px;">
                                    <center>
                                        <i class="bi bi-calendar-check" style="font-size: 50px; color: white; text-align: center;"></i>
                                    </center>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-muted font-semibold text-center">Success Reservations</h6>
                                    <h6 class="font-extrabold mb-0 text-center">{{ $reservationConfirmed }}</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 bg-danger rounded-3 mb-2" style="width: 80px; height: 80px;">
                                    <center>
                                        <i class="bi bi-calendar-check" style="font-size: 50px; color: white; text-align: center;"></i>
                                    </center>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-muted font-semibold text-center">Canceled Reservations</h6>
                                    <h6 class="font-extrabold mb-0 text-center">{{ $reservationCanceled }}</h6>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- Card : End --}}

        {{-- Reservation Revenue Card : Start --}}
        <div class="col-12">
            <div class="row">

                {{-- Reservasion Table : Start --}}
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Reservasi Terbaru</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Lapangan</th>
                                        <th>Tanggal Booking</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $reservation->customer_name }}</td>
                                            <td>{{ $reservation->field->name }}</td>
                                            <td>{{ $reservation->booking_date }}</td>
                                            <td>
                                                @if ($reservation->status == 'pending')
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif ($reservation->status == 'confirmed')
                                                    <span class="badge bg-success">Confirmed</span>
                                                @else
                                                    <span class="badge bg-danger">Cancelled</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr class="py-0 my-0 mb-2">
                            <div class="d-grid gap-2">
                                <a href="" class="btn btn-primary">Lihat semua reservasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Reservasion Table : End --}}

                {{-- Revenue : Start --}}
                <div class="col-4">
                    
                    <div class="container-fluid">
                        <div class="card" style="width: 100%;">
                            <div class="card-header pb-0 mb-3">
                                <h4>Revenue per-month</h4>
                                <hr class="py-0 my-0">
                            </div>
                            <div class="card-body pt-0 mt-0">
                                <div class="row">
                                    <div class="col-3 d-flex justify-content-center align-items-center">
                                        <div class="col-12 bg-info rounded-3 mb-2" style="width: 50px; height: 50px;">
                                            <center>
                                                <i class="bi bi-calendar-check" style="font-size: 30px; color: white; text-align: center;"></i>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold">All revenue</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ $reservationRevenue }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="card" style="width: 100%;">
                            <div class="card-header pb-0 mb-3">
                                <h4>Revenue per-month</h4>
                                <hr class="py-0 my-0">
                            </div>
                            <div class="card-body pt-0 mt-0">
                                <div class="row">
                                    <div class="col-3 d-flex justify-content-center align-items-center">
                                        <div class="col-12 bg-success rounded-3 mb-2" style="width: 50px; height: 50px;">
                                            <center>
                                                <i class="bi bi-calendar-check" style="font-size: 30px; color: white; text-align: center;"></i>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold">Revenue This Month</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ $reservationRevenueNowMonth }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="card" style="width: 100%;">
                            <div class="card-header pb-0 mb-3">
                                <h4>Revenue per-month</h4>
                                <hr class="py-0 my-0">
                            </div>
                            <div class="card-body pt-0 mt-0">
                                <div class="row">
                                    <div class="col-3 d-flex justify-content-center align-items-center">
                                        <div class="col-12 bg-dark rounded-3 mb-2" style="width: 50px; height: 50px;">
                                            <center>
                                                <i class="bi bi-calendar-check" style="font-size: 30px; color: white; text-align: center;"></i>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold">Outstanding Balance</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ $reservationOutstandingBalance }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- Revenue : End --}}

            </div>
        </div>
        {{-- Reservation Revenue Card : End --}}

    </div>
@endsection