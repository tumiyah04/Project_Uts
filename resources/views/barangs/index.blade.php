@extends('layouts.app')

@section('content')
<div class="container" style="padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="color: white ;">Daftar Barang</h2>
        <a href="{{ route('barangs.create') }}" class="btn btn-success" style="background-color: #4CAF50; border-color: #4CAF50;">Input Barang</a>
    </div>

    @if($barangs->isEmpty())
        <div class="alert alert-warning" style="background-color: #FFF3CD; border-color: #FFEEBA; color: #856404;">
            Tidak ada data barang. <a href="{{ route('barangs.create') }}" style="color: #4CAF50; text-decoration: underline;">Tambahkan barang baru</a>.
        </div>
    @else
        <table class="table table-striped table-hover">
            <thead class="table-dark" style="background-color: #343a40; color: #fff;">
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
                        <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-sm btn-warning" style="color: #fff; font-weight: bold;">Edit</a>
                        <!-- Delete Button -->
                        <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" style="font-weight: bold;" onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
