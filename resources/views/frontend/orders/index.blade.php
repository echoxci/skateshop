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
                        <h4>Moje objednávky</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Sledovacie Číslo</th>
                                <th>Celková Cena</th>
                                <th>Status</th>
                                <th>Akcia</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->tracking_no }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ $order->status == '0' ? 'cakajuce':'vybavene'}}</td>
                                    <td><a href="{{ url('view-order/'.$order->id) }}" class="btn btn-primary">Zobraziť</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection