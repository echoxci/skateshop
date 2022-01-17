@extends('layouts.front')

@section('title')
    Moje objednavky
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Zobrazenie Objednavky<a href="{{ url('orders') }}" class="btn btn-primary text-white float-end">Spat</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <label for="">Meno</label>
                                <div class="border p-2">{{ $orders->fname }}</div>
                                <label for="">Priezvisko</label>
                                <div class="border p-2">{{ $orders->lname }}</div>
                                <label for="">Email</label>
                                <div class="border p-2">{{ $orders->email }}</div>
                                <label for="">Tel. Cislo</label>
                                <div class="border p-2">{{ $orders->phone }}</div>
                                <label for="">Adresa</label>
                                <div class="border p-2">
                                    {{ $orders->address1 }},
                                    {{ $orders->address2 }},
                                    {{ $orders->mesto }},
                                    {{ $orders->psc }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered mt-3">
                                    <thead>
                                    <tr>
                                        <th>Nazov</th>
                                        <th>Mnozstvo</th>
                                        <th>Cena</th>
                                        <th>Obrazok</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders->orderItems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" alt="Image here">
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <h4>Celkova suma: <span class="float-end">{{ $orders->total_price }} &euro;</span></h4>
                                <div class="mt-5 px-2">
                                    <label for="">Status Objednavky</label>
                                    <form action="{{ url('update-order/'.$orders->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select class="form-select" name="order_status">
                                            <option {{$orders->status == '0' ? 'selected':''}} value="0">Cakajuce</option>
                                            <option {{$orders->status == '1' ? 'selected':''}} value="1">Dokoncene</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary mt-3 float-end">Upravit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection