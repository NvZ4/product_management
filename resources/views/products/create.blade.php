@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg">
        <div class="p-6 border-b border-gray-200">
             <h1 class="text-2xl font-semibold text-gray-800">Tambah Produk Baru</h1>
             <p class="mt-1 text-sm text-gray-600">Isi detail produk di bawah ini.</p>
        </div>
        <div class="p-6">
            @if ($errors->any())
                 <div class="mb-6 bg-red-50 border-l-4 border-red-400 text-red-700 p-4" role="alert">
                    <p class="font-bold">Oops! Ada masalah dengan input Anda.</p>
                    <ul class="mt-2 list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                @include('products.form')
            </form>
        </div>
    </div>
@endsection