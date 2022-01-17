@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Edit/Update category
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="edit-name">Názov</label>
                        <input id="edit-name" type="text" value="{{ $category->name }}" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit-slug">Adresa</label>
                        <input id="edit-slug" type="text" value="{{ $category->slug }}" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="edit-desc">Popis</label>
                        <textarea id="edit-desc" name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit-status">Status</label>
                        <input id="edit-status" type="checkbox" {{ $category->status == 1 ? "checked":''}} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit-popular">Populárne</label>
                        <input id="edit-popular" type="checkbox" {{ $category->popular == 1 ? "checked":''}} name="popular">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit-meta-title">Meta Titulok</label>
                        <input id="edit-meta-title" type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="edit-meta-title">Meta Kľúčové Slová</label>
                        <textarea id="edit-meta-keyw" name="meta_keywords" rows="3" class="form-control">{{ $category->meta_keywords }}"</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="edit-meta-desc">Meta Popis</label>
                        <textarea id="edit-meta-desc" name="meta_description" rows="3" class="form-control">{{ $category->meta_description }}</textarea>
                    </div>
                    @if($category->image)
                        <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="Category image">
                    @endif
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