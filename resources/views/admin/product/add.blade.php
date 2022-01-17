@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Add Product
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Kategoria</label>
                        <select class="form-select" name="category_id">
                            <option selected>Select a category</option>
                            @foreach($category as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-add-name">Názov</label>
                        <input id="p-add-name" type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-add-slug">Adresa</label>
                        <input id="p-add-slug" type="text" class="form-control" name="slug" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-add-sdesc">Malý Popis</label>
                        <textarea id="p-add-sdesc" name="small_description" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-add-desc">Popis</label>
                        <textarea id="p-add-desc" name="description" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-add-oprice">Základná cena</label>
                        <input id="p-add-oprice" type="number" class="form-control" name="original_price" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-add-sprice">Predajná cena</label>
                        <input id="p-add-sprice" type="number" class="form-control" name="selling_price" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-add-tax">Daň</label>
                        <input id="p-add-tax" type="number" class="form-control" name="tax" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-add-qty">Množstvo</label>
                        <input id="p-add-qty" type="number" class="form-control" name="qty" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-add-status">Status</label>
                        <input id="p-add-status" type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-add-trending">Trending</label>
                        <input id="p-add-trending" type="checkbox" name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-add-mtitle">Meta Názov</label>
                        <input id="p-add-mtitle" type="text" class="form-control" name="meta_title" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-add-mkeyw">Meta Kľúčové Slová</label>
                        <textarea id="p-add-mkeyw" name="meta_keywords" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-add-mdesc">Meta Popis</label>
                        <textarea id="p-add-mdesc" name="meta_description" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection