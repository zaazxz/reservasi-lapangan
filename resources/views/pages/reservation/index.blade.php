@extends('layouts.main')

@section('content')
    <h1 class="mb-3">Reservasi</h1>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" id="waForm">
                                <div class="row">

                                    {{-- Nama Lengkap --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" id="name" class="form-control"
                                                placeholder="Masukkan Nama Lengkap" name="name" required>
                                        </div>
                                    </div>

                                    {{-- Nomor Telepon --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="phone_number">Nomor Telepon</label>
                                            <input type="text" id="phone_number" class="form-control"
                                                placeholder="Masukkan No Whatsapp Aktif" name="phone_number" required>
                                        </div>
                                    </div>

                                    {{-- Lapangan --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="fields">Lapangan</label>
                                            <select name="fields" id="fields" class="form-control">
                                                <option value="">-- Pilih Lapangan --</option>
                                                @foreach ($fields as $field)
                                                    <option value="{{ $field->name }}">{{ $field->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Tanggal --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="booking_date">Tanggal</label>
                                            <input type="date" id="booking_date" class="form-control" name="booking_date"
                                                placeholder="Pilih Tanggal Booking" required>
                                        </div>
                                    </div>

                                    {{-- Jam Mulai --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="start_time">Jam Mulai</label>
                                            <input type="time" id="start_time" class="form-control" name="start_time"
                                                placeholder="Masukkan Jam Mulai" required>
                                        </div>
                                    </div>

                                    {{-- Jam Selesai --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="end_time">Jam Selesai</label>
                                            <input type="time" id="end_time" class="form-control" name="end_time"
                                                placeholder="Masukkan Jam Selesai" required>
                                        </div>
                                    </div>

                                    {{-- Persyaratan --}}
                                    {{-- <div class="form-group col-12">
                                        <div class='form-check'>
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                                <label for="checkbox5">Saya menyetujui <a href="">Syarat dan
                                                        Ketentuan</a></label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#waForm').submit(function(e) {
                e.preventDefault();
                const name = $('#name').val();
                const phone_number = $('#phone_number').val();
                const fields = $('#fields').val();
                const booking_date = $('#booking_date').val();
                const start_time = $('#start_time').val();
                const end_time = $('#end_time').val();

                // Text Whatsapp
                const text = `Halo, Tim RFA Futsal.\nSaya ingin reservasi lapangan dengan detail:\n\nNama: ${name}\nLapangan: ${fields}\nTanggal: ${booking_date}\nJam Mulai: ${start_time}\nJam Selesai: ${end_time}\n\nBerapakah biayanya?`;

                // Open Whatsapp
                window.open(`https://wa.me/6289681238317?text=${encodeURIComponent(text)}`, '_blank');
            });
        });
    </script>
@endsection
