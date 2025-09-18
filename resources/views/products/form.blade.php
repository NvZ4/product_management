<div class="space-y-6">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk</label>
        <div class="mt-1">
            <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}" required
                   class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
    </div>

    <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
        <div class="mt-1">
            <textarea name="description" id="description" rows="4" required
                      class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description', $product->description ?? '') }}</textarea>
            <p class="mt-2 text-sm text-gray-500">Jelaskan produk Anda secara singkat.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">Rp</span>
                </div>
                <input type="number" name="price" id="price" value="{{ old('price', $product->price ?? '') }}" 
                       min="1000" required
                       class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                       placeholder="1000">
            </div>
             <p class="mt-2 text-sm text-gray-500">Harga tidak boleh 0 atau negatif.</p>
        </div>

        <div>
            <label for="stock" class="block text-sm font-medium text-gray-700">Stok</label>
            <div class="mt-1">
                <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock ?? '1') }}" 
                       min="1" required
                       class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <p class="mt-2 text-sm text-gray-500">Stok produk minimal 1.</p>
        </div>
    </div>
</div>

<div class="mt-8 pt-6 border-t border-gray-200">
    <div class="flex justify-end gap-x-3">
        <a href="{{ route('products.index') }}" 
           class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Batal
        </a>
        <button type="submit" 
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Simpan
        </button>
    </div>
</div>