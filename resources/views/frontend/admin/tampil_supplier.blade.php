@extends('layouts.parent')

@section('title', 'Admin')

@section('subtitle', 'Manage Supplier')
@section('main', 'Manage Supplier')

@section('location')
    <div class="breadcrumb-item">Manage Supplier</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    {{-- table --}}
                    <div class="table-responsive">
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h4>All Suppliers</h4>
                            @if (Auth::user()->role == 'admin')
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="{{ route('admin.tambah_supplier') }}"
                                        class="btn btn-success bi bi-file-earmark-plus-fill">
                                        New Supplier</a>
                                </div>
                            @endif
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>SUPPLIER</th>
                                    <th>CONTACT</th>
                                    <th>ADDRESS</th>
                                    @if (Auth::user()->role == 'admin')
                                        <th>ACTION</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $index => $supplier)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $supplier->nama_supplier }}</td>
                                        <td>{{ $supplier->kontak }}</td>
                                        <td>{{ $supplier->alamat }}</td>
                                        @if (Auth::user()->role == 'admin')
                                            <td>
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic mixed styles example">
                                                    <a href="{{ route('admin.edit_supplier', $supplier->id) }}"
                                                        class="btn btn-primary fa fa-edit"></a>
                                                    <form action="{{ route('admin.hapus_supplier', $supplier->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Are you sure?')"
                                                            class="btn btn-danger fa fa-trash"></button>
                                                    </form>
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- table end --}}
                </div>
            </div>
        </div>
    </div>
@endsection
