@extends('layouts.auth')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="container-fluid row rounded-3 shadow" style="width: 65%">

            {{-- Image --}}
            <div class="col-6 rounded-start-3"
                style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('assets/static/images/bg/futsal-field.webp') }}') no-repeat center center; background-size: cover;">
            </div>

            {{-- Form --}}
            <div class="col-6 p-5 rounded-end-3">


                {{-- Text --}}
                <h5 class="mb-3">Silahkan masukkan username dan password untuk Login</h5>

                <form class="form">
                    <div class="row">

                        {{-- Nama Lengkap --}}
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-column">Nama Lengkap</label>
                                <input type="text" id="first-name-column" class="form-control" placeholder="First Name"
                                    name="fname-column">
                            </div>
                        </div>

                        {{-- Nomor Telepon --}}
                        <div class="col-12">
                            <div class="form-group">
                                <label for="last-name-column">Nomor Telepon</label>
                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name"
                                    name="lname-column">
                            </div>
                        </div>

                        {{-- Persyaratan --}}
                        <div class="form-group col-12 mt-2">
                            <div class='form-check'>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                    <label for="checkbox5">Ingat saya</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3 d-grid gap-2">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        </div>

                        <hr class="text-primary my-3">
                        
                        <div class="col-12 d-flex justify-content-center">
                            <small><a href="">Lupa Password?</a></small>
                        </div>
                        
                        <div class="col-12 d-flex justify-content-center mt-3">
                            <small class="text-muted">Copyright &copy; 2025</small>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
