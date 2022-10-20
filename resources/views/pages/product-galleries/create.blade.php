@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ Route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="products_id" class=" form-control-label">Nama Barang</label>
                    <select name="products_id" id="products_id" class="form-control @error('products_id') is-invalid @enderror">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    @error('products_id')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="photo" class=" form-control-label">Foto Barang</label>
                    <input type="file" id="photo" name="photo" placeholder="Foto Barang" class="form-control @error('photo') is-invalid @enderror" accept="image/*">
                    @error('photo')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="is_default">Jadikan Default</label>
                    {{-- pilih radio iya / tidak  --}}
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="is_default" id="is_default" value="1">
                        <label class="form-check-label" for="is_default">Ya</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="is_default" id="is_default" value="0" checked>
                        <label class="form-check-label" for="is_default">Tidak</label>
                    </div>
                    @error('is_default')
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