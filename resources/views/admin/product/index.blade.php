@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Produkty</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Kategória</th>
                    <th>Názov</th>
                    <th>Predajná cena</th>
                    <th>Obrázok</th>
                    <th>Akcia</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->selling_price }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="category-image" alt="Image here">
                        </td>
                        <td>
                            <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary btn-sm">Upraviť</a>
                            <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger btn-sm">Odstrániť</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection