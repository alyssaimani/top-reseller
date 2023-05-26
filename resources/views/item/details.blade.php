@extends('layouts.main')
@section('container')
    <div class="d-flex flex-row">
        @if ($item->category_id == 1)
            <img src="{{ asset('images\shirt.jpg') }}" style="width: 20rem" class="card-img-top" alt="...">
        @elseif ($item->category_id == 2)
            <img src="{{ asset('images\bag.jpg') }}" style="width: 20rem" class="card-img-top" alt="...">
        @elseif ($item->category_id == 3)
            <img src="{{ asset('images\shoes.jpg') }}" style="width: 20rem" class="card-img-top" alt="...">
        @elseif ($item->category_id == 4)
            <img src="{{ asset('images\dress.png') }}" style="width: 20rem" class="card-img-top" alt="...">
        @endif
        <div class="d-flex flex-column ms-5">
            <h2>{{ $item->item_name }}</h2>
            <h3 style="color: #E86A33">{{ $item->brand->brand_name }}</h3>
            <h3>Rp. {{ number_format($item->item_price) }}/piece</h3>
            <p>Description:</p>
            <p>{{ $item->description }}</p>
        </div>
    </div>
@endsection
