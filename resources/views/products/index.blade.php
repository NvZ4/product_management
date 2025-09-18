@extends('layouts.app')

@section('content')
<div class="bg-white overflow-hidden shadow-lg rounded-lg">
    <div class="p-6 border-b border-gray-200">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
            <h1 class="text-2xl font-semibold text-gray-800">Daftar Produk</h1>
            <a href="{{ route('products.create') }}" class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-sm rounded-md shadow-sm transition-colors duration-200">
                Tambah Produk
            </a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="m-6 bg-green-50 border-l-4 border-green-400 text-green-700 p-4" role="alert">
            <p class="font-bold">Sukses</p>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="md:hidden">
        <div class="px-6 pb-6 space-y-4">
            @forelse ($products as $product)
                <div class="bg-gray-50 p-4 rounded-lg border">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="font-bold text-lg text-gray-900">{{ $product->name }}</p>
                            <p class="text-sm text-gray-600">{{ $product->description }}</p>
                        </div>
                        <div class="text-right flex-shrink-0">
                             <p class="text-lg font-semibold text-indigo-600">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                             <p class="text-sm text-gray-500">Stok: {{ $product->stock }}</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-200 flex items-center justify-end space-x-4">
                        <a href="{{ route('products.edit', $product->id) }}" class="text-sm font-medium text-yellow-600 hover:text-yellow-800">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-800">Hapus</button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500 py-4">Tidak ada produk.</p>
            @endforelse
        </div>
    </div>

    <div class="hidden md:block">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Aksi</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($products as $product)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-600">{{ $product->description }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $product->stock }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-4">
                            <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-600 hover:text-yellow-900">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada produk ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($products->hasPages())
        <div class="p-6 bg-white border-t border-gray-200">
            {{ $products->links() }}
        </div>
    @endif
</div>
@endsection