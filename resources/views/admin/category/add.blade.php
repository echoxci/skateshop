@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Add Category
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="add-name">Meno</label>
                        <input id="add-name" type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="add-slug">Adresa</label>
                        <input id="add-slug" type="text" class="form-control" name="slug" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="add-desc">Popis</label>
                        <textarea id="add-desc" name="description" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="add-status">Status</label>
                        <input id="add-status" type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="add-popular">Populárne</label>
                        <input id="add-popular" type="checkbox" name="popular">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="add-meta-title">Meta Názov</label>
                        <input id="add-meta-title" type="text" class="form-control" name="meta_title" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="add-meta-keyw">Meta Kľúčové Slová</label>
                        <textarea id="add-meta-keyw" name="meta_keywords" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="add-meta-desc">Meta Popis</label>
                        <textarea id="add-meta-desc" name="meta_description" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Potvrdiť</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection