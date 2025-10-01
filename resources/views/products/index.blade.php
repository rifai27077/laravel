@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <form action="{{ route('products.index') }}" method="GET" class="mb-3 row">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Cari nama produk..." value="{{ request('search') }}">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-secondary">Cari</button>
        </div>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nama }}</td>
                <td>{{ number_format($product->harga, 0, ',', '.') }}</td>
                <td>{{ $product->deskripsi }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </table>
    {{ $products->withQueryString()->links() }}
</div>
@endsection
