@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container my-5">
        <form action=" {{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Detaily</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6 mt-3">
                                    <label for="">Meno</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Zadajte svoje meno">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Priezvisko</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Zadajte svoje priezvisko">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Zadajte svoj email">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Tel. cislo</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Zadajte svoje telefonne cislo">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Adresa 1</label>
                                    <input type="text" class="form-control" name="address1" placeholder="Zadajte svoju adresu">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Adresa 2</label>
                                    <input type="text" class="form-control" name="address2" placeholder="Zadajte svoju adresu">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Mesto</label>
                                    <input type="text" class="form-control" name="mesto" placeholder="Zadajte svoje mesto">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">PSC</label>
                                    <input type="text" class="form-control" name="psc" placeholder="Zadajte svoj PSC">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        @if($cartItems->count() > 0)
                        <div class="card-body">
                            <h6>Vasa objednavka</h6>
                            <hr>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nazov</th>
                                        <th>Pocet ks</th>
                                        <th>Cena</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartItems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->prod_qty }} ks</td>
                                            <td>{{ $item->products->selling_price }} &euro;</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-primary w-100">Dokoncit objednavku</button>
                        </div>
                        @else
                        <div class="card-body text-center">
                            <h5 class="text-center">Nemate v kosiku ziadny produkt</h5>
                            <a href="{{ url('category') }}" class="btn btn-primary float-end">Zacat s nakupom</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection