@extends('layouts.app')

@section('content')
<div class="container position-relative" style="z-index:1;">
    <div class="bubble bubble1"></div>
    <div class="bubble bubble2"></div>
    <div class="bubble bubble3"></div>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="main-card">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
                    <div class="section-title mb-3 mb-md-0">Daftar Produk</div>
                    <a href="{{ route('products.create') }}" class="btn btn-primary shadow-sm">Tambah Produk</a>
                </div>

                <form action="{{ route('products.index') }}" method="GET" class="mb-4 row g-2">
                    <div class="col-md-5">
                        <input type="text" name="search" class="form-control" placeholder="Cari nama produk..." value="{{ request('search') }}">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-secondary w-100">Cari</button>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-modern align-middle">
                        <thead>
                            <tr>
                                <th style="width:60px;">No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th style="width:160px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $key => $product)
                            <tr>
                                <td class="fw-semibold">{{ $products->firstItem() + $key }}</td>
                                <td>{{ $product->nama }}</td>
                                <td class="text-success fw-bold">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                                <td>{{ $product->deskripsi }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Belum ada produk.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    {{ $products->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

