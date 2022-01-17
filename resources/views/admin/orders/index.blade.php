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
                        <h4>Nove objednavky <a href="{{ url('order-history') }}" class="btn btn-primary float-right">Historia objednavok</a></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Datum Objednavky</th>
                                <th>Sledovacie Cislo</th>
                                <th>Celkova Cena</th>
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
                                    <td>{{ $order->status == '0' ? 'cakajuce':'vybavene'}}</td>
                                    <td><a href="{{ url('admin/view-order/'.$order->id) }}" class="btn btn-primary">Zobrazit</a></td>
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