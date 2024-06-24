@extends('layouts.parent')

@section('title', 'Admin')

@section('main', 'Stock In')

@section('location')
    <div class="breadcrumb-item">Stock In</div>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('admin.tambah_stockin') }}" class="btn btn-md btn-success mb-3">
                        <i class="fas fa-plus"></i> Tambah Stock In
                    </a>                    
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ITEM</th>
                            <th scope="col">SUPPLIER</th>
                            <th scope="col">QUANTITY</th>
                            <th scope="col">RECEIVED AT</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($stockIns as $stockIn)
                                <tr>
                                    <th scope="row">{{ $stockIn->id }}</th>
                                    <td>{{ $stockIn->item->name }}</td>
                                    <td>{{ $stockIn->supplier->nama_supplier }}</td>
                                    <td>{{ $stockIn->quantity }}</td>
                                    <td>{{ $stockIn->received_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit_stockin', $stockIn->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.hapus_stockin', $stockIn->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
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
