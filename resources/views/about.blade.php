@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen">
    <h1 class="text-4xl font-bold mb-4">Tentang Kami</h1>
    <p class="text-lg mb-6">Ini adalah halaman tentang proyek Anda. Berikan informasi lebih lanjut di sini.</p>
    <a href="{{ url('/') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Kembali ke Beranda</a>
</div>
@endsection
