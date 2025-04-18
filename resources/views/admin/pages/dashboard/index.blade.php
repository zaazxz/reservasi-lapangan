@extends('admin.layouts.index')

@section('content')
    <div class="row">

        {{-- Card : Start --}}
        <div class="col-12">
            <div class="row">
                
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="stats-icon purple mb-2" style="width: 80px; height: 80px;">
                                        <i class="iconly-boldShow" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-muted font-semibold text-center">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0 text-center">112.000</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="stats-icon purple mb-2" style="width: 80px; height: 80px;">
                                        <i class="iconly-boldShow" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-muted font-semibold text-center">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0 text-center">112.000</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="stats-icon purple mb-2" style="width: 80px; height: 80px;">
                                        <i class="iconly-boldShow" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-muted font-semibold text-center">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0 text-center">112.000</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="stats-icon purple mb-2" style="width: 80px; height: 80px;">
                                        <i class="iconly-boldShow" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-muted font-semibold text-center">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0 text-center">112.000</h6>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Channing</td>
                                        <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                                        <td>0845 46 49</td>
                                        <td>Warrnambool</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aladdin</td>
                                        <td>sem.ut@pellentesqueafacilisis.ca</td>
                                        <td>0800 1111</td>
                                        <td>Bothey</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cruz</td>
                                        <td>non@quisturpisvitae.ca</td>
                                        <td>07624 944915</td>
                                        <td>Shikarpur</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keegan</td>
                                        <td>molestie.dapibus@condimentumDonecat.edu</td>
                                        <td>0800 200103</td>
                                        <td>Assen</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ray</td>
                                        <td>placerat.eget@sagittislobortis.edu</td>
                                        <td>(0112) 896 6829</td>
                                        <td>Hofors</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
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
                                        <div class="stats-icon purple mb-2" style="width: 50px; height: 50px;">
                                            <i class="iconly-boldShow" style="font-size: 30px;"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold">Revenue This Month</h6>
                                        <h6 class="font-extrabold mb-0">112.000</h6>
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
                                        <div class="stats-icon purple mb-2" style="width: 50px; height: 50px;">
                                            <i class="iconly-boldShow" style="font-size: 30px;"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold">Revenue This Month</h6>
                                        <h6 class="font-extrabold mb-0">112.000</h6>
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
                                        <div class="stats-icon purple mb-2" style="width: 50px; height: 50px;">
                                            <i class="iconly-boldShow" style="font-size: 30px;"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold">Revenue This Month</h6>
                                        <h6 class="font-extrabold mb-0">112.000</h6>
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