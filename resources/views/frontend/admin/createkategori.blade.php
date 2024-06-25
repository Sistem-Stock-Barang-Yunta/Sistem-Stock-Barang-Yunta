@extends('layouts.parent')

@section('title', 'Tambah Kategori')

@section('main', 'Add Category')

@section('location')
    <div class="breadcrumb-item"><a href="{{ route('admin.tampilkategori') }}">Manage Categories</a></div>
    <div class="breadcrumb-item">Add Category</div>
@endsection

@section('content')
    <div class="card-body">
        <form action="{{ route('admin.crud-tambah-kategori') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category</label>
                <input type="text" class="form-control" id="name" name="name" required
                    placeholder="Enter new category here...">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('admin.tampilkategori') }}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
