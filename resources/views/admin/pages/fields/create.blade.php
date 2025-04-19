@extends('admin.layouts.index')

@section('content')
    <div class="row">

        {{-- Container : Start --}}
        <div class="col-12">
            <div class="row">

                {{-- Create Fields Form : Start --}}
                <div class="col-12 card py-3 px-3">
    
                    <form class="form" action="/admin/fields/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
    
                            {{-- Nama Lapangan --}}
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Nama Lapangan</label>
                                    <input type="text" id="name" class="form-control" placeholder="Nama Lapangan"
                                        name="name" required data-parsley-required="true">
                                </div>
                            </div>
    
                            {{-- Harga --}}
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="price_per_hour">Harga Per-Jam</label>
                                    <input type="number" id="price_per_hour" class="form-control" placeholder="Harga Per-Jam"
                                        name="price_per_hour" required data-parsley-required="true">
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