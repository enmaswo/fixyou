@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<head>
    @vite(['resources/css/styles.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    @vite(['resources/css/3d.css', 'resources/js/app.js'])
    
</head>
<section class="video-hero">
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

<div class="content-container">
    <h1 class="title">Jelajahi Dunia Aroma</h1>
    
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

<script>
document.addEventListener('DOMContentLoaded', () => {
    const wrappers = document.querySelectorAll('.image-wrapper');
    
    // Handle click/touch effect
    wrappers.forEach(wrapper => {
        const originalTilt = wrapper.dataset.tilt;
        
        const addShine = () => {
            wrapper.style.transform = 'rotate(0deg)';
            const shine = document.createElement('div');
            shine.className = 'shine-overlay';
            wrapper.appendChild(shine);
            
            setTimeout(() => {
                shine.remove();
                wrapper.style.transform = `rotate(${originalTilt === 'left' ? '-3' : '3'}deg)`;
            }, 600);
        };
        
        wrapper.addEventListener('mousedown', addShine);
        wrapper.addEventListener('touchstart', (e) => {
            e.preventDefault();
            addShine();
        });
    });
});
</script>
@endsection