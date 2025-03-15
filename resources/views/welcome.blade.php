@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<head>
    @vite(['resources/css/styles.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    @vite(['resources/css/3d.css'])
    @vite(['resources/css/card.css'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<!-- Video Hero Section -->
<section class="video-hero bg-white">
    <div class="video-wrapper">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="{{ asset('fixyou/video/opening.mp4') }}" type="video/mp4">
        </video>
        <button class="cta-button">
            <span class="cta-content">
                <i class="fas fa-play cta-icon"></i>
                Lihat Demo
            </span>
        </button>
    </div>
</section>

<!-- Jelajahi Dunia Aroma Section -->
<div class="content-container bg-white py-12">
    <h1 class="title text-gray-800" style="font-family: 'Poppins', sans-serif; font-weight: 700;">Jelajahi Dunia Aroma</h1>
    <div class="reel-container">
        <div class="image-track">
            @foreach([1,2,3,4,1,2,3,4,1,2,3,4] as $img)
            <div class="image-wrapper" data-tilt="{{ $loop->odd ? 'left' : 'right' }}">
                <img 
                    src="{{ asset('fixyou/images/'.$img.'.jpg') }}" 
                    class="image" 
                    draggable="false"
                >
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Manjakan Diri Anda Section -->
<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="title text-center mb-12 text-gray-800" style="font-family: 'Poppins', sans-serif; font-weight: 700;">Manjakan Diri Anda</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- All Cards Updated -->
            @foreach([1,2,3] as $product)
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 relative">
                <div class="absolute top-3 right-3 bg-purple-600 text-white px-4 py-1 rounded-full text-sm font-bold rotate-3 shadow-md">
                    LIMITED EDITION
                </div>
                
                <!-- Image Container Full -->
                <div class="h-80 rounded-t-xl overflow-hidden">
                    <img 
                        src="{{ asset('fixyou/images/'.$product.'.jpg') }}" 
                        alt="Product" 
                        class="w-full h-full object-cover transform hover:scale-105 transition duration-300"
                    >
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        @if($product == 1)
                        Aroma Therapy Set
                        @elseif($product == 2)
                        Scented Candle Collection
                        @else
                        Premium Diffuser
                        @endif
                    </h3>
                    
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-2xl font-bold text-purple-600">
                            @if($product == 1) Rp299k @elseif($product == 2) Rp199k @else Rp499k @endif
                        </span>
                        <span class="text-gray-400 line-through">
                            @if($product == 1) Rp499k @elseif($product == 2) Rp299k @else Rp799k @endif
                        </span>
                    </div>

                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>⭐ 
                            @if($product == 1) 4.9 @elseif($product == 2) 4.8 @else 5.0 @endif 
                            (@if($product == 1) 1.2rb @elseif($product == 2) 890 @else 2.3rb @endif terjual)
                        </span>
                    </div>

                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        @if($product == 1)
                        Set terapi aroma lengkap dengan 6 essential oil pilihan dan diffuser modern
                        @elseif($product == 2)
                        Koleksi lilin aromaterapi dengan 8 varian aroma natural dan burning time 50 jam
                        @else
                        Diffuser premium dengan 7 warna LED, timer otomatis, dan teknologi ultrasonic
                        @endif
                    </p>

                    <button onclick="togglePopup()" 
                            class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-lg font-semibold transition">
                        Beli Sekarang
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Popup Pembelian -->
<div id="popup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-80 animate-popup">
        <h3 class="text-xl font-bold mb-4">Pilih Platform Pembelian</h3>
        <a href="#" class="mb-3 flex items-center justify-center gap-2 bg-black text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition">
            <span>🛒</span>
            Beli di TikTok Shop
        </a>
        <a href="#" class="flex items-center justify-center gap-2 bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
            <span>🛍️</span>
            Beli di Shopee
        </a>
        <button onclick="togglePopup()" class="w-full mt-4 text-gray-500 hover:text-gray-700 font-medium">
            Batal
        </button>
    </div>
</div>

<script>
    function togglePopup() {
        document.getElementById('popup').classList.toggle('hidden');
    }
</script>

<style>
    @keyframes popup {
        from { transform: scale(0.95); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    .animate-popup {
        animation: popup 0.2s ease-out;
    }
    
    .title {
        font-size: 2.5rem;
        letter-spacing: -0.025em;
    }
    
    @media (max-width: 640px) {
        .title {
            font-size: 2rem;
        }
    }
</style>
@endsection