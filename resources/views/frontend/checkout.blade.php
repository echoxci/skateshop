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
                                    <label for="checkout-fname">Meno</label>
                                    <input id="checkout-fname" type="text" class="form-control" name="fname" placeholder="Zadajte svoje meno" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="checkout-lname">Priezvisko</label>
                                    <input id="checkout-lname" type="text" class="form-control" name="lname" placeholder="Zadajte svoje priezvisko" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="checkout-email">Email</label>
                                    <input id="checkout-email" type="text" class="form-control" name="email" placeholder="Zadajte svoj email" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="checkout-phone">Tel. cislo</label>
                                    <input id="checkout-phone" type="text" class="form-control" name="phone" placeholder="Zadajte svoje telefonne cislo"required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="checkout-add1">Adresa 1</label>
                                    <input id="checkout-add1" type="text" class="form-control" name="address1" placeholder="Zadajte svoju adresu" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="checkout-add2">Adresa 2</label>
                                    <input id="checkout-add2" type="text" class="form-control" name="address2" placeholder="Zadajte svoju adresu" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="checkout-city">Mesto</label>
                                    <input id="checkout-city" type="text" class="form-control" name="mesto" placeholder="Zadajte svoje mesto" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="checkout-psc">PSC</label>
                                    <input id="checkout-psc" type="text" class="form-control" name="psc" placeholder="Zadajte svoj PSC" required>
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