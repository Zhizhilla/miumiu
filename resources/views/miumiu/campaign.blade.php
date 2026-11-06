<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miu Miu - Campaign Editorial</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-900 text-white font-sans antialiased">

    <!-- NAVBAR SIMPLE -->
    <header class="fixed top-0 left-0 w-full z-50 bg-neutral-900/90 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <nav class="flex gap-6 text-xs tracking-widest uppercase">
                <a href="{{ route('miumiu.home') }}" class="hover:text-gray-400">Home</a>
                <a href="{{ route('miumiu.collection') }}" class="hover:text-gray-400">Collections</a>
                <a href="{{ route('miumiu.campaign') }}" class="hover:text-gray-400 font-bold border-b border-white">Campaign</a>
            </nav>
            <a href="{{ route('miumiu.home') }}" class="text-xl tracking-[0.2em] font-serif uppercase">MIU MIU</a>
            <div class="text-xs uppercase tracking-widest">Editorial</div>
        </div>
    </header>

    <!-- CONTENT CAMPAIGN -->
    <div class="pt-28 pb-16 px-6 max-w-7xl mx-auto space-y-12">
        
        <div class="text-center space-y-3">
            <span class="text-xs tracking-[0.4em] uppercase text-gray-400">Spring Summer 2026</span>
            <h1 class="text-4xl md:text-6xl font-serif italic">L'Alchimie Campaign</h1>
            <p class="text-xs tracking-widest text-gray-400 max-w-lg mx-auto leading-relaxed pt-2">
                A visual story exploring modern identity, raw elegance, and unrestrained attitude.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <div class="space-y-4">
                <div class="w-full h-96 bg-neutral-800 overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/dress.jpg') }}" alt="Look 1" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-between items-center text-xs tracking-widest uppercase border-b border-white/20 pb-3">
                    <span class="text-lg font-bold">LOOK 01</span>
                    <span class="text-gray-400">Embroidered Cotton</span>
                </div>
            </div>

            <div class="space-y-4 md:mt-12">
                <div class="w-full h-96 bg-neutral-800 overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/high heels.jpg') }}" alt="Look 2" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-between items-center text-xs tracking-widest uppercase border-b border-white/20 pb-3">
                    <span class="text-lg font-bold">LOOK 02</span>
                    <span class="text-gray-400">Patent Leather Pumps</span>
                </div>
            </div>

            <div class="space-y-4">
                <div class="w-full h-96 bg-neutral-800 overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/bag.jpg') }}" alt="Look 3" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-between items-center text-xs tracking-widest uppercase border-b border-white/20 pb-3">
                    <span class="text-lg font-bold">LOOK 03</span>
                    <span class="text-gray-400">Top-Handle Leather</span>
                </div>
            </div>

            <div class="space-y-4 md:mt-12">
                <div class="w-full h-96 bg-neutral-800 overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/shoes.jpg') }}" alt="Look 4" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-between items-center text-xs tracking-widest uppercase border-b border-white/20 pb-3">
                    <span class="text-lg font-bold">LOOK 04</span>
                    <span class="text-gray-400">Leather Loafers</span>
                </div>
            </div>
        </div>

        <div class="text-center pt-8">
            <a href="{{ route('miumiu.collection') }}" class="inline-block bg-white text-black px-10 py-4 text-xs tracking-widest font-semibold uppercase hover:bg-gray-200 transition">
                Shop The Collection
            </a>
        </div>

    </div>

</body>
</html>