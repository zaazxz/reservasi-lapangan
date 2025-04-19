@extends('admin.layouts.index')

@section('content')
    <div class="row">

        {{-- Create Button : Start --}}
        <div class="d-grid gap-2 mb-3">
            <a href="/admin/reservations/create" class="btn btn-primary">Tambah Reservasi</a>
        </div>
        {{-- Create Button : End --}}

        {{-- Reservation Card : Start --}}
        <div class="col-12">
            <div class="row">

                {{-- All Reservasion Table : Start --}}
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Reservasi Terbaru</h4>
                        </div>
                        <div class="card-body">
                            <table class="table" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Customer</th>
                                        <th>Tanggal</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $reservation->customer_name }}</td>
                                            <td>{{ $reservation->booking_date }}</td>
                                            <td>{{ $reservation->start_time }}</td>
                                            <td>{{ $reservation->end_time }}</td>
                                            <td>
                                                @if ($reservation->status == 'pending')
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif ($reservation->status == 'confirmed')
                                                    <span class="badge bg-success">Confirmed</span>
                                                @else
                                                    <span class="badge bg-danger">Cancelled</span>
                                                @endif
                                            </td>
                                            <td>

                                                {{-- Edit --}}
                                                <a href="/admin/reservations/show/{{ $reservation->id }}">
                                                    <button class="btn btn-info text-white mx-2">
                                                        <i class="bi bi-info-square"></i>
                                                    </button>
                                                </a>

                                                @if ($reservation->status == 'pending')
                                                    {{-- Delete --}}
                                                    <a href="/admin/reservations/delete/{{ $reservation->id }}">
                                                        <button class="btn btn-danger mx-2"
                                                            onclick="confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- All Reservasion Table : End --}}

            </div>
        </div>
        {{-- Reservation Card : End --}}

    </div>
@endsection
