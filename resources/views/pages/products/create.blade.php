@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Produk</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Produk</li>
            </ol>
        </div>
    </div>
@endsection


@section('content')
    <div class="row">
        <div class="col">
            <form action="">

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Name Produk</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="sku" class="form-label">Kode Produk</label>
                            <input type="text" name="sku" id="sku" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price" class="form-label">Harga</label>
                            <input type="text" inputmode="numeric" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="text" inputmode="numeric" name="stock" id="stock" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
