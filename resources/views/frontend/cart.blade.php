@extends('layouts.front')

@section('title')
    Moj kosik
@endsection

@section('content')
<div class="container my-5">
    <div class="card shadow">
        <div class="card-body">
            @foreach($cartItems as $item)
                <div class="row product_data align-items-center my-3">
                    <div class="col-md-1">
                        <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" class="cart-img" alt="Image here">
                    </div>
                    <div class="col-md-3">
                        <h6>{{ $item->products->name }}</h6>
                    </div>
                    <div class="col-md-2">
                        <h6>{{ $item->products->selling_price }} &euro;</h6>
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                        <label for="mnozstvo">Mnozstvo</label>
                        <div class="input-group text-center mb-3" style="width: 130px">
                            <button class="input-group-text decrement-btn">-</button>
                            <input type="text" name="mnozstvo" value="{{ $item->prod_qty }}" class="form-control text-center qty-input">
                            <button class="input-group-text increment-btn">+</button>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i>Remove</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection