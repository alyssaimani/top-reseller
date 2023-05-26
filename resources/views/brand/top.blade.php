@extends('layouts.main')
@section('container')

    <div class="p-2 mt-4 d-flex justify-content-center">
        <h2>Top 5 Brands</h2>
    </div>

    <div class="container mt-4" style="width: 100%;">
        <div class="row row-gap-4 col-gap-4 row-cols-5">

            @foreach ($brands as $brand)
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 100%">
                        @if ($brand->id == 1)
                            <img src="{{ asset('images\brand1.jpg') }}" style="height: 12rem" class="card-img-top"
                                alt="...">
                        @elseif ($brand->id == 2)
                            <img src="{{ asset('images\brand2.png') }}" style="height: 12rem" class="card-img-top"
                                alt="...">
                        @elseif ($brand->id == 3)
                            <img src="{{ asset('images\brand3.jpg') }}" style="height: 12rem" class="card-img-top"
                                alt="...">
                        @elseif ($brand->id == 4)
                            <img src="{{ asset('images\brand4.jpg') }}" style="height: 12rem" class="card-img-top"
                                alt="...">
                        @elseif ($brand->id == 5)
                            <img src="{{ asset('images\brand5.jpg') }}" style="height: 12rem" class="card-img-top"
                                alt="...">
                        @endif
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">{{ $brand->brand_name }}</h5>
                            </div>
                            <a href="/brand/{{ $brand->id }}" class="btn mt-2"
                                style="background-color: #E86A33">Detail</a>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
