@extends('layouts.front')

@section('title')
{{ $products->name }}
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0"><a href="{{ url('/category/') }}" class="top-bar">Katalóg</a> / <a href="{{ url('/category/'.$products->category->slug) }}" class="top-bar">{{ $products->category->name }}</a> / {{ $products->name }}</h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100" alt="Obrazok produktu">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->name }}
                            @if($products->trending == '1')
                                <label style="font-size: 18px" class="float-end badge bg-danger trending_tag">Trending</label>
                            @endif
                        </h2>

                        <hr>
                        <label class="me-3">Pôvodná cena: <s>{{ $products->original_price }} &euro;</s></label>
                        <label class="fw-bold">Aktuálna cena: {{ $products->selling_price }} &euro;</label>
                        <p class="mt-3">
                            {!! $products->description !!}
                        </p>
                        <hr>
                        @if($products->qty > 0)
                            <label class="badge bg-success">Na sklade</label>
                        @else
                            <label class="badge bg-danger">Nie je na sklade</label>
                        @endif
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <input type="hidden" value="{{ $products->id }}" class="prod_id">
                                <label for="mnozstvo">Množstvo</label>
                                <div class="input-group text-center mb-3">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input id="mnozstvo" type="text" name="mnozstvo" value="1" class="form-control text-center qty-input">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br>
                                @if($products->qty > 0)
                                    <button type="button" class="btn btn-primary me-3 float-start addToCartBtn"> <i class="fa fa-shopping-cart"></i> Pridať do košíka</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

