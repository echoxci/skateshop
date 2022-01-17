@extends('layouts.admin')

@section('title')
    Objednavky
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Nové objednávky <a href="{{ url('orders') }}" class="btn btn-primary float-right">Nové Objednávky</a></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Dátum Objednávky</th>
                                <th>Sledovacie Číslo</th>
                                <th>Celková Cena</th>
                                <th>Status</th>
                                <th>Akcia</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ date("d-m-Y", strtotime($order->created_at)) }}</td>
                                    <td>{{ $order->tracking_no }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ $order->status == '0' ? 'čakajúce':'vybavené'}}</td>
                                    <td><a href="{{ url('admin/view-order/'.$order->id) }}" class="btn btn-primary">Zobraziť</a></td>
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