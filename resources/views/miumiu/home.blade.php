@extends('layouts.miumiu')

@section('title', 'Miu Miu - Official Store')

@section('content')
<!-- Container Scroll-Snap Fullscreen -->
<div class="h-screen w-full overflow-y-scroll snap-y snap-mandatory no-scrollbar">
    
    <!-- SLIDE 1: HERO BANNER -->
    <section class="h-screen w-full snap-start relative flex items-center justify-center overflow-hidden">
        <img src="{{ asset('images/hero.jpg') }}" alt="Miu Miu Banner" class="absolute inset-0 w-full h-full object-cover object-top">
        <div class="absolute inset-0 bg-black/20"></div>

        <div class="relative z-10 text-center text-white space-y-6 pt-16 px-4">
            <span class="text-xs tracking-[0.4em] uppercase font-light drop-shadow">Spring Summer Collection</span>
            <h1 class="text-5xl md:text-7xl font-serif-miu italic drop-shadow-lg">L'Alchimie Miu Miu</h1>
            <div class="pt-4">
                <a href="{{ route('miumiu.collection') }}" class="inline-block bg-white text-black px-8 py-3 text-xs tracking-widest font-semibold uppercase hover:bg-gray-200 transition shadow-lg">
                    Discover The Collection
                </a>
            </div>
        </div>

        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-[10px] tracking-widest uppercase animate-bounce opacity-70">
            ↓ Scroll
        </div>
    </section>

    <!-- SLIDE 2: HANDBAGS -->
    <section class="h-screen w-full snap-start relative bg-neutral-50 flex items-center justify-center pt-16 px-6">
        <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="h-[65vh] w-full bg-white shadow-xl overflow-hidden">
                <img src="{{ asset('images/bag.jpg') }}" alt="Leather Bag" class="w-full h-full object-cover">
            </div>
            <div class="space-y-6">
                <span class="text-xs tracking-[0.3em] uppercase text-gray-400">Iconic Leather</span>
                <h2 class="text-4xl md:text-5xl font-serif-miu">Leather Top-Handle Bag</h2>
                <p class="text-xs tracking-widest text-gray-500 leading-relaxed max-w-md">
                    Crafted with signature nappa leather featuring the iconic embossed Miu Miu logo. Designed for sophisticated daily elegance.
                </p>
                <div class="pt-2">
                    <a href="{{ route('miumiu.collection', ['category' => 'handbags']) }}" class="inline-block border border-black text-black px-8 py-3 text-xs tracking-widest uppercase hover:bg-black hover:text-white transition">
                        View Handbags
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SLIDE 3: SHOES (KEMBALI DILETAKKAN DI SINI) -->
    <section class="h-screen w-full snap-start relative bg-white flex items-center justify-center pt-16 px-6">
        <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 order-2 md:order-1 text-right md:text-left">
                <span class="text-xs tracking-[0.3em] uppercase text-gray-400">Footwear Collection</span>
                <h2 class="text-4xl md:text-5xl font-serif-miu">Leather Loafers & Pumps</h2>
                <p class="text-xs tracking-widest text-gray-500 leading-relaxed max-w-md">
                    Reinterpreting classic silhouettes with modern proportions, fine craftsmanship, and uninhibited attitude.
                </p>
                <div class="pt-2">
                    <a href="{{ route('miumiu.collection', ['category' => 'shoes']) }}" class="inline-block border border-black text-black px-8 py-3 text-xs tracking-widest uppercase hover:bg-black hover:text-white transition">
                        Explore Shoes
                    </a>
                </div>
            </div>
            <div class="h-[65vh] w-full bg-neutral-100 shadow-xl overflow-hidden order-1 md:order-2">
                <img src="{{ asset('images/shoes.jpg') }}" alt="Miu Miu Shoes" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- SLIDE 4: DRESS / READY-TO-WEAR (SLIDE BARU) -->
    <section class="h-screen w-full snap-start relative bg-neutral-50 flex items-center justify-center pt-16 px-6">
        <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="h-[65vh] w-full bg-white shadow-xl overflow-hidden">
                <img src="{{ asset('images/dress.jpg') }}" alt="Embroidered Cotton Dress" class="w-full h-full object-cover">
            </div>
            <div class="space-y-6">
                <span class="text-xs tracking-[0.3em] uppercase text-gray-400">Ready To Wear</span>
                <h2 class="text-4xl md:text-5xl font-serif-miu">Embroidered Cotton Dress</h2>
                <p class="text-xs tracking-widest text-gray-500 leading-relaxed max-w-md">
                    Delicate embroidery combined with tailored precision. Expressive designs tailored for contemporary elegance.
                </p>
                <div class="pt-2">
                    <a href="{{ route('miumiu.collection', ['category' => 'dresses']) }}" class="inline-block border border-black text-black px-8 py-3 text-xs tracking-widest uppercase hover:bg-black hover:text-white transition">
                        View Dresses
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SLIDE 5: EDITORIAL CAMPAIGN TEASER -->
    <section class="h-screen w-full snap-start relative bg-neutral-900 text-white flex items-center justify-center pt-16 px-6">
        <div class="max-w-4xl text-center space-y-8">
            <span class="text-xs tracking-[0.4em] uppercase text-gray-400">Editorial</span>
            <h2 class="text-4xl md:text-6xl font-serif-miu italic">Spring Summer 2026 Campaign</h2>
            <p class="text-xs tracking-widest text-gray-400 max-w-lg mx-auto leading-relaxed">
                An intimate exploration of modern luxury, individuality, and bold self-expression.
            </p>
            <div>
                <a href="{{ route('miumiu.campaign') }}" class="inline-block bg-white text-black px-10 py-4 text-xs tracking-widest font-semibold uppercase hover:bg-gray-200 transition">
                    Explore Campaign
                </a>
            </div>
        </div>
    </section>

</div>
@endsection