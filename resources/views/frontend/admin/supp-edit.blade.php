@extends('layouts.parent')

@section('title', 'Admin')

@section('main', 'Dashboard')

@section('location')
    <div class="breadcrumb-item"><a href="/admin">Supplier | Edit</a></div>
    <div class="breadcrumb-item">Edit Data Supplier</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="container py-5">
                    <div class="d-flex align-items-center justify-content-center flex-column">
                        <h1>Ubah Data Barang</h1>
                        <div class="row w-100 mt-5">
                            <div class="col-12 col-md-8 col-lg-6 mx-auto d-flex flex-column align-items-center">
                                <form action="create_process.php" method="POST" enctype="multipart/form-data"
                                    class="w-75">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Supplier"
                                        name="nama">
                                    <div class="form-outline" data-mdb-input-init>
                                        <label for="name">Kontak</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nomor Kontak"
                                        name="kontak">
                                    </div>
                                    <div class="form-outline" data-mdb-input-init>
                                        <label class="form-label" for="form12">Alamat</label>
                                        <input type="text" id="form12" class="form-control"
                                            placeholder="Masukkan Alamat Supplier" name="alamat">
                                    </div>
                                    <button class="btn btn-success" type="submit">Simpan Perubahan</button>
                                    <a href="#" class="btn btn-danger">Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
