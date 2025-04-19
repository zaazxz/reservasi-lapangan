@extends('admin.layouts.index')

@section('content')
    <div class="row">

        {{-- Container : Start --}}
        <div class="col-12">
            <div class="row">

                {{-- Create Fields Form : Start --}}
                <div class="col-12 card py-3 px-3">
    
                    <form class="form" action="/admin/reservations/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
    
                            {{-- Nama Customer --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" id="customer_name" class="form-control" placeholder="Nama Lengkap"
                                        name="customer_name" required>
                                </div>
                            </div>
    
                            {{-- Telepon Customer --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="customer_phone">Nomor Whatsapp</label>
                                    <input type="text" id="customer_phone" class="form-control" placeholder="Nomor Whatsapp"
                                        name="customer_phone" required>
                                </div>
                            </div>
    
                            {{-- Lapangan --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="field_id">Pilih Lapangan</label>
                                    <select name="field_id" id="field_id" class="form-control" required>
                                        <option value="" selected disabled>-- Pilih Lapangan --</option>
                                        @foreach ($fields as $field)
                                            <option value="{{ $field->id }}">{{ $field->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Tanggal Booking --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="field_id">Tanggal Booking</label>
                                    <input type="date" id="booking_date" class="form-control" name="booking_date" required>
                                </div>
                            </div>

                            {{-- Jam Mulai --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="start_time">Jam Mulai</label>
                                    <input type="time" id="start_time" class="form-control" placeholder="Jam Mulai"
                                        name="start_time" required>
                                </div>
                            </div>

                            {{-- Jam Selesai --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="end_time">Jam Selesai</label>
                                    <input type="time" id="end_time" class="form-control" placeholder="Jam Selesai"
                                        name="end_time" required>
                                </div>
                            </div>

                            {{-- Total Harga --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="total_price">Total Harga</label>
                                    <input type="number" id="total_price" class="form-control" value="0"
                                        name="total_price" readonly>
                                </div>
                            </div>

                            {{-- Total Harga --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="dp_amount">Total Downpayment</label>
                                    <input type="number" id="dp_amount" class="form-control" value="0"
                                        name="dp_amount" readonly>
                                </div>
                            </div>
    
                            <div class="col-12 mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
    
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
            $('#field_id').on('change', function() {
                const fieldId = $(this).val();

                // Ajax Request
                $.ajax({
                    url: '/admin/fields/request/' + fieldId,
                    type: 'GET',
                    success: function(response) {
                        console.log(response);

                        // Changing Total Price
                        $('#total_price').val(response.price_per_hour);

                        // Changing DP Amount to 15% of price_hour
                        $('#dp_amount').val(response.price_per_hour * 0.15);

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                // Checking Datetime
                $('#booking_date').on('change', function() {
                    const bookingDate = $(this).val();

                    // Checking if date < now
                    if (bookingDate < new Date().toISOString().split('T')[0]) {
                        alert('Tanggal Tidak Valid');

                        // Reset Date
                        $('#booking_date').val('');
                        $('#booking_date').focus();
                    }

                });

                // Checking time of start to end
                $('#end_time').on('change', function() {
                    const endTime = $(this).val();
                    const startTime = $('#start_time').val();

                    // console.log(startTime, endTime);

                    if (endTime < startTime) {
                        alert('Jam Tidak Valid');

                        // Reset Time
                        $('#start_time').val('');
                        $('#end_time').val('');
                        $('#start_time').focus();

                    } else {

                        // converting endTime and startTime to minute number data type
                        const endTimeMinutes = parseInt(endTime.split(':')[0]) * 60 + parseInt(endTime.split(':')[1]);
                        const startTimeMinutes = parseInt(startTime.split(':')[0]) * 60 + parseInt(startTime.split(':')[1]);

                        // minutes to hours
                        const endTimeHours = endTimeMinutes / 60;
                        const startTimeHours = startTimeMinutes / 60;

                        // Rounding the number
                        const endTimeHoursRounded = Math.ceil(endTimeHours);
                        const startTimeHoursRounded = Math.ceil(startTimeHours);

                        // console.log(endTimeHoursRounded, startTimeHoursRounded);

                        // Total Time
                        const totalTime = endTimeHoursRounded - startTimeHoursRounded;

                        // console.log(totalTime);
                        // console.log($('#total_price').val());

                        // Changing Total Price & Downpayment
                        $('#total_price').val($('#total_price').val() * totalTime);
                        $('#dp_amount').val($('#total_price').val() * 0.15);

                    }

                });

            })
        });
    </script>
@endsection