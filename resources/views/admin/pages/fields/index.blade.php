@extends('admin.layouts.index')

@section('content')
    <div class="row">

        {{-- Create Button : Start --}}
        <div class="d-grid gap-2 mb-3">
            <a href="/admin/fields/create" class="btn btn-primary">Tambah Reservasi</a>
        </div>
        {{-- Create Button : End --}}

        {{-- Reservation Revenue Card : Start --}}
        <div class="col-12">
            <div class="row">

                {{-- Reservasion Table : Start --}}
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Seluruh Lapangan</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lapangan</th>
                                        <th>Harga Per-Jam</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($fields as $field)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $field->name }}</td>
                                            <td>Rp. {{ $field->price_per_hour }}</td>
                                            <td class="d-flex">

                                                {{-- Edit --}}
                                                <a href="/admin/fields/edit/{{ $field->id }}">
                                                    <button class="btn btn-warning text-white mx-2">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                </a>

                                                {{-- Delete --}}
                                                <a href="/admin/fields/delete/{{ $field->id }}">
                                                    <button class="btn btn-danger mx-2" onclick="confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Reservasion Table : End --}}

            </div>
        </div>
        {{-- Reservation Revenue Card : End --}}

    </div>
@endsection
