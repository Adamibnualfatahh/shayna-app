@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ Route('products.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class=" form-control-label">Nama Barang</label>
                    <input type="text" id="name" name="name" placeholder="Nama Barang" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $item->name }}">
                    @error('name')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class=" form-control-label">Tipe Barang</label>
                    <input type="text" id="type" name="type" placeholder="Tipe Barang" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') ? old('type') : $item->type }}">
                    @error('type')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class=" form-control-label">Deskripsi Barang</label>
                    <textarea id="description" name="description" placeholder="Deskripsi Barang" class="form-control ckeditor @error('description') is-invalid @enderror">
                        {{ old('description') ? old('description') : $item->description }}
                    </textarea>
                    @error('description')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class=" form-control-label">Harga Barang</label>
                    <input type="number" id="price" name="price" placeholder="Harga Barang" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') ? old('price') : $item->price }}">
                    @error('price')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity" class=" form-control-label">Jumlah Barang</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Jumlah Barang" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') ? old('quantity') : $item->quantity }}">
                    @error('quantity')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-save"></i>
                        Tambah Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection