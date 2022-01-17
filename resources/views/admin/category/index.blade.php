@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Kategórie</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Názov</th>
                        <th>Popis</th>
                        <th>Obrázok</th>
                        <th>Akcia</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="category-image" alt="Image here">
                        </td>
                        <td>
                            <a href="{{url('edit-category/'.$item->id)}}" class="btn btn-primary">Upraviť</a>
                            <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger">Odstrániť</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection