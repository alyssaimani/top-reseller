@extends('layouts.main')
@section('container')
    <div class="d-flex flex-row">
        @if ($brand->id == 1)
            <img src="{{ asset('images\brand1.jpg') }}" style="height: 20rem" class="card-img-top" alt="...">
        @elseif ($brand->id == 2)
            <img src="{{ asset('images\brand2.png') }}" style="height: 20rem" class="card-img-top" alt="...">
        @elseif ($brand->id == 3)
            <img src="{{ asset('images\brand3.jpg') }}" style="height: 20rem" class="card-img-top" alt="...">
        @elseif ($brand->id == 4)
            <img src="{{ asset('images\brand4.jpg') }}" style="height: 20rem" class="card-img-top" alt="...">
        @elseif ($brand->id == 5)
            <img src="{{ asset('images\brand5.jpg') }}" style="height: 20rem" class="card-img-top" alt="...">
        @endif

        <div class="d-flex flex-column ms-5">
            <h2>{{ $brand->brand_name }}</h2>
            <p>Address: Palmerah - Indonesia</p>
            <p>Email: {{ $brand->brand_name }}@binus.ac.id</p>
            <p>Description:</p>
            <p>{{ $brand->description }}</p>
        </div>
    </div>

    <div class="p-2 mt-4 d-flex">
        <h2>{{ $brand->brand_name }}'s Item</h2>
    </div>

     <div class="container mt-4" style="width: 100%;">
        <div class="row row-gap-4 col-gap-4 row-cols-4">

            @foreach ($items as $item)
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 100%">
                        @if ($item->category_id == 1)
                            <img src="{{ asset('images\shirt.jpg') }}" style="height: 20rem" class="card-img-top"
                                alt="...">
                        @elseif ($item->category_id == 2)
                            <img src="{{ asset('images\bag.jpg') }}" style="height: 20rem" class="card-img-top"
                                alt="...">
                        @elseif ($item->category_id == 3)
                            <img src="{{ asset('images\shoes.jpg') }}" style="height: 20rem" class="card-img-top"
                                alt="...">
                        @elseif ($item->category_id == 4)
                            <img src="{{ asset('images\dress.png') }}" style="height: 20rem" class="card-img-top"
                                alt="...">
                        @endif
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">{{ $item->item_name }}</h5>
                                <p class="card-text p-0" style="color: #E86A33">{{ $item->brand->brand_name }}</p>
                                <p class="card-text p-0">Rp. {{ number_format($item->item_price) }}</p>
                            </div>
                            <a href="/item/{{ $item->id }}" class="btn mt-2"
                                style="background-color: #E86A33">Detail</a>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
