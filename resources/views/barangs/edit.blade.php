@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <h2 style="color: #4CAF50; text-align: center; margin-bottom: 20px;">Edit Barang</h2>
    <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label" style="font-weight: bold; color: #333;">Nama Barang</label>
            <input
                type="text"
                class="form-control"
                id="nama"
                name="nama"
                value="{{ old('nama', $barang->nama) }}"
                required
                style="border: 1px solid #4CAF50; background-color: #fff;">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label" style="font-weight: bold; color: #333;">Jumlah</label>
            <input
                type="number"
                class="form-control"
                id="jumlah"
                name="jumlah"
                value="{{ old('jumlah', $barang->jumlah) }}"
                required
                style="border: 1px solid #4CAF50; background-color: #fff;">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label" style="font-weight: bold; color: #333;">Deskripsi</label>
            <textarea
                class="form-control"
                id="deskripsi"
                name="deskripsi"
                style="border: 1px solid #4CAF50; background-color: #fff;">{{ old('deskripsi', $barang->deskripsi) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #4CAF50; border-color: #4CAF50;">Update</button>
    </form>
</div>
@endsection
