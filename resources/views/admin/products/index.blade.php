@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold mb-4">Manage Produk Admin</h1>
    
    <div class="bg-white shadow-md rounded-lg p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border px-4 py-2">Produk</th>
                        <th class="border px-4 py-2">Gambar</th>
                        <th class="border px-4 py-2">Harga</th>
                        <th class="border px-4 py-2">Stok</th>
                        <th class="border px-4 py-2">Status</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $product->name }}</td>
                            <td class="border px-4 py-2">
                                <img src="{{ $product->image ?? 'https://via.placeholder.com/50' }}" class="h-10 mx-auto">
                            </td>
                            <td class="border px-4 py-2">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="border px-4 py-2">{{ $product->stock }}</td>
                            <td class="border px-4 py-2">
                                <span class="px-2 py-1 text-white text-sm rounded {{ $product->active ? 'bg-green-500' : 'bg-red-500' }}">
                                    {{ $product->active ? 'Aktif' : 'Nonaktif' }}
                                </span>
                            </td>
                            <td class="border px-4 py-2">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded">Edit</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
