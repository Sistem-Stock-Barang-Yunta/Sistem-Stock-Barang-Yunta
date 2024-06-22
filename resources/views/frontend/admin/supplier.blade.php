@extends('layouts.parent')

@section('title', 'Supplier')

@section('main', 'Supplier')

@section('location')
    <div class="breadcrumb-item">List Supplier
    </div>
@endsection

@section('content')
    <div class="card-body">

        {{-- table --}}
        <div class="table-responsive">
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                        aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                            class="fas fa-search"></i></button>
                </div>
            </form>

            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h4>Tabel Supplier</h4>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                    <form form action="#" method="POST">
                        <input type="hidden" value="#" name="id">
                        <a href="/admin/create-supplier" class="btn btn-success bi bi-file-earmark-plus-fill"> Tambah Supplier</a>
                    </form>
                </div>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>PT Indofresh</td>
                    <td>(+62)8511111111</td>
                    <td>Jalan Anggrek No. 7, Perumahan Melati Indah, Bandung</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="/admin/edit-supplier" class="btn btn-success fa fa-edit"></a>
                            <form action="" method="POST">
                                <input type="hidden" value="#" name="id">
                                <button class="btn btn-danger fa fa-trash"></button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PT Sayur Mayur</td>
                    <td>(+62)857777777</td>
                    <td>Desa Penari, Kabupaten Banyuwangi, Jawa Timur</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="/admin/edit-supplier" class="btn btn-success fa fa-edit"></a>
                            <form action="" method="GET">
                                <input type="hidden" value="#" name="id">
                                <button class="btn btn-danger fa fa-trash"></button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        {{-- table end --}}
    </div>

@endsection
