@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Kategorie</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
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
                            <a href="{{url('edit-prod/'.$item->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('delete-prod/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection