@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Edit Product
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Kategória</label>
                        <select class="form-select">
                            <option value="">{{ $products->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-edit-name">Názov</label>
                        <input id="p-edit-name" type="text" class="form-control" value="{{ $products->name }}" name="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-edit-slug">Adresa</label>
                        <input id="p-edit-slug" type="text" class="form-control" value="{{ $products->slug }}" name="slug" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-edit-sdesc">Small Description</label>
                        <textarea id="p-edit-sdesc" name="small_description" rows="3" class="form-control" required>{{ $products->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-edit-desc">Description</label>
                        <textarea id="p-edit-desc" name="description" rows="3" class="form-control" required>{{ $products->small_description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-edit-oprice">Original Price</label>
                        <input id="p-edit-oprice" type="number" class="form-control" value="{{ $products->original_price }}" name="original_price" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-edit-sprice">Selling Price</label>
                        <input id="p-edit-sprice" type="number" class="form-control" value="{{ $products->selling_price }}" name="selling_price" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-edit-tax">Tax</label>
                        <input id="p-edit-tax" type="number" class="form-control" value="{{ $products->tax }}" name="tax" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-edit-qty">Quantity</label>
                        <input id="p-edit-qty" type="number" class="form-control" value="{{ $products->qty }}" name="qty" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-edit-status">Status</label>
                        <input id="p-edit-status" type="checkbox" {{ $products->status == 1 ? "checked":'' }} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="p-edit-trending">Trending</label>
                        <input id="p-edit-trending" type="checkbox" {{ $products->trending == 1 ? "checked":'' }} name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-edit-mtitle">Meta Title</label>
                        <input id="p-edit-mtitle" type="text" class="form-control" value="{{ $products->meta_title }}" name="meta_title" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-edit-mkeyw">Meta Keywords</label>
                        <textarea id="p-edit-mkeyw" name="meta_keywords" rows="3" class="form-control" required>{{ $products->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="p-edit-mdesc">Meta Description</label>
                        <textarea id="p-edit-mdesc" name="meta_description" rows="3" class="form-control" required>{{ $products->meta_description }}</textarea>
                    </div>
                    @if($products->image)
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="Image here" class="product-image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection