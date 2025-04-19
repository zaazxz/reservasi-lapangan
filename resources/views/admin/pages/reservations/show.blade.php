@extends('admin.layouts.index')

@section('content')
    <div class="row">

        {{-- Container : Start --}}
        <div class="col-12">
            <div class="row">

                {{-- Create Fields Form : Start --}}
                <div class="col-12 card py-3 px-3">

                    <form class="form">
                        @csrf
                        <div class="row">

                            {{-- Nama Customer --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" id="customer_name" class="form-control"
                                        value="{{ $reservation->customer_name }}" name="customer_name" disabled>
                                </div>
                            </div>

                            {{-- Telepon Customer --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="customer_phone">Nomor Whatsapp</label>
                                    <input type="text" id="customer_phone" class="form-control"
                                        value="{{ $reservation->customer_phone }}" name="customer_phone" disabled>
                                </div>
                            </div>

                            {{-- Lapangan --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="field_id">Lapangan</label>
                                    <input type="text" id="field_id" class="form-control"
                                        value="{{ $reservation->field->name }}" name="field_id" disabled>
                                </div>
                            </div>

                            {{-- Tanggal Booking --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="booking_date">Tanggal Booking</label>
                                    <input type="date" id="booking_date" class="form-control" name="booking_date"
                                        disabled value="{{ $reservation->booking_date }}">
                                </div>
                            </div>

                            {{-- Jam Mulai --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="start_time">Jam Mulai</label>
                                    <input type="time" id="start_time" class="form-control" placeholder="Jam Mulai"
                                        name="start_time" disabled value="{{ $reservation->start_time }}">
                                </div>
                            </div>

                            {{-- Jam Selesai --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="end_time">Jam Selesai</label>
                                    <input type="time" id="end_time" class="form-control" placeholder="Jam Selesai"
                                        name="end_time" disabled value="{{ $reservation->end_time }}">
                                </div>
                            </div>

                            {{-- Total Harga --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="total_price">Total Harga</label>
                                    <input type="text" id="total_price" class="form-control" name="total_price" disabled
                                        value="{{ 'Rp. ' . $reservation->total_price }}">
                                </div>
                            </div>

                            {{-- Total Harga --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="dp_amount">Total Downpayment</label>
                                    <input type="text" id="dp_amount" class="form-control" name="dp_amount" disabled
                                        value="{{ 'Rp. ' . $reservation->dp_amount }}">
                                </div>
                            </div>

                            {{-- Outstanding Balance --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="outstanding_balance">Sisa Pembayaran</label>
                                    <input type="text" id="outstanding_balance" class="form-control"
                                        name="outstanding_balance" disabled
                                        value="{{ 'Rp. ' . $reservation->remaining_amount }}">
                                </div>
                            </div>

                            {{-- Deadline Pembayaran --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="payment_deadline">Deadline Pambayaran</label>
                                    <input type="datetime" id="payment_deadline" class="form-control"
                                        name="payment_deadline" disabled value="{{ $reservation->payment_deadline }}">
                                </div>
                            </div>

                            @if ($reservation->status == 'pending')
                                
                                {{-- Tombol cancel --}}
                                <div class="col-6 mt-3 d-grid gap-2">
                                    <a type="submit" href="/admin/reservations/cancel/{{ $reservation->id }}" class="btn btn-danger me-1 mb-1" onclick="confirm('Apakah anda yakin melakukan Cancel?')">Cancel</a>
                                </div>

                                {{-- Tombol pelunasan --}}
                                <div class="col-6 mt-3 d-grid gap-2">
                                    <a type="submit" href="/admin/reservations/paid/{{ $reservation->id }}" class="btn btn-success me-1 mb-1" onclick="confirm('Apakah anda yakin ingin malekukan pembayaran?')">Paid Off</a>
                                </div>

                            @endif

                        </div>
                    </form>
                </div>
                {{-- Create Fields Form : End --}}

            </div>
        </div>
        {{-- Container : End --}}

        <hr>

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
