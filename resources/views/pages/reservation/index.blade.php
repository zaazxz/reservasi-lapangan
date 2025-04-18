@extends('layouts.main')

@section('content')
<h1 class="mb-3">Reservasi</h1>

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">

                                {{-- Nama Lengkap --}}
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Lengkap</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="First Name" name="fname-column">
                                    </div>
                                </div>

                                {{-- Nomor Telepon --}}
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Nomor Telepon</label>
                                        <input type="text" id="last-name-column" class="form-control"
                                            placeholder="Last Name" name="lname-column">
                                    </div>
                                </div>

                                {{-- Lapangan --}}
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Lapangan</label>
                                        {{-- <input type="text" id="city-column" class="form-control" placeholder="City"
                                            name="city-column"> --}}
                                        <select name="" id="" class="form-control">
                                            <option value="">Lapang A</option>
                                            <option value="">Lapang B</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- Tanggal --}}
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Tanggal</label>
                                        <input type="date" id="country-floating" class="form-control"
                                            name="country-floating" placeholder="Country">
                                    </div>
                                </div>

                                {{-- Jam Mulai --}}
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Jam Mulai</label>
                                        <input type="time" id="company-column" class="form-control"
                                            name="company-column" placeholder="Company">
                                    </div>
                                </div>

                                {{-- Jam Selesai --}}
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Jam Selesai</label>
                                        <input type="time" id="email-id-column" class="form-control"
                                            name="email-id-column" placeholder="Email">
                                    </div>
                                </div>

                                {{-- Persyaratan --}}
                                <div class="form-group col-12">
                                    <div class='form-check'>
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                            <label for="checkbox5">Saya menyetujui <a href="">Syarat dan Ketentuan</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
