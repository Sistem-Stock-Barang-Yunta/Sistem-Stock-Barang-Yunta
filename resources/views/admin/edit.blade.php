<x-layout>
    <body style="min-height: 100vh;"> 
        <div class="container">
            <div class="d-flex align-items-center justify-content-center flex-column">
                <h1>Ubah Data Barang</h1>
                <div class="row w-100 mt-5">
                    <div class="col-12 col-md-8 col-lg-6 mx-auto d-flex flex-column align-items-center">
                        <form action="create_process.php" method="POST" enctype="multipart/form-data" class="w-75">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="nama">
                            <div class="form-outline" data-mdb-input-init>
                                <label class="form-label" for="form12">Kategori</label>
                                <input type="text" id="form12" class="form-control" placeholder="Pilih Kategori" name="kategori">
                            </div>
                            <div class="form-outline" data-mdb-input-init>
                                <label class="form-label" for="form12">Supplier</label>
                                <input type="text" id="form12" class="form-control" placeholder="Masukkan Nama Supplier" name="supplier">
                            </div>
                            {{-- <div class="form-outline" data-mdb-input-init>
                                <label class="form-label" for="form12">SKU</label>
                                <input type="text" id="form12" class="form-control" placeholder="Masukkan kode SKU" name="sku">
                            </div> --}}
                            <div class="form-outline" data-mdb-input-init>
                                <label class="form-label" for="form12">Stock Barang</label>
                                <input type="text" id="form12" class="form-control" placeholder="Jumlah Barang" name="stock">
                            </div>
                            <br>
                            <label class="form-label" for="customFile">Pilih Gambar</label>
                            <input type="file" class="form-control" accept="gambar/*" name="gambar" id="gambar">
                            <br>
                            <button class="btn btn-success" type="submit">Simpan Perubahan</button>
                            <a href="#" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-layout>
