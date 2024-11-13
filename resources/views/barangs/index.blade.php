@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Barang</h2>
        <a href="{{ route('barangs.create') }}" class="btn btn-primary">Tambah Barang</a>
    </div>

    @if($barangs->isEmpty())
        <div class="alert alert-warning">
            Tidak ada data barang. <a href="{{ route('barangs.create') }}">Tambahkan barang baru</a>.
        </div>
    @else
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->jumlah }}</td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td class="text-center">
                        <!-- Edit Button -->
                        <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <!-- Delete Button -->
                        <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
