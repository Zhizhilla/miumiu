<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Miu Miu'); ?></title>
    
    <!-- Tailwind CSS & Alpine.js CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Font Serif Luxury -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">

    <style>
        .font-serif-miu { font-family: 'Playfair Display', serif; }
        [x-cloak] { display: none !important; }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-white text-black font-sans antialiased"
      x-data="{ 
          searchOpen: false, 
          cartOpen: false,
          cartItems: JSON.parse(localStorage.getItem('miumiu_cart') || '[]'),
          
          saveCart() {
              localStorage.setItem('miumiu_cart', JSON.stringify(this.cartItems));
          },
          
          addToCart(product) {
              let existing = this.cartItems.find(item => item.id === product.id);
              if (existing) {
                  existing.qty++;
              } else {
                  this.cartItems.push({
                      id: product.id,
                      name: product.name,
                      price: product.price,
                      priceNum: parseInt(product.price.replace(/[^0-9]/g, '')),
                      image: product.image,
                      qty: 1
                  });
              }
              this.saveCart();
              this.cartOpen = true;
          },

          removeFromCart(index) {
              this.cartItems.splice(index, 1);
              this.saveCart();
          },

          get totalCount() {
              return this.cartItems.reduce((sum, item) => sum + item.qty, 0);
          },

          get subtotal() {
              let total = this.cartItems.reduce((sum, item) => sum + (item.priceNum * item.qty), 0);
              return '$ ' + total.toLocaleString();
          }
      }"
      @add-to-cart.window="addToCart($event.detail)">

    <!-- NAVBAR HEADER TRANSPARAN ELEGAN -->
    <header class="fixed top-0 left-0 w-full z-40 bg-white/80 backdrop-blur-md border-b border-gray-100/60 transition-all duration-300">
        
        <!-- MODE 1: HEADER NORMAL -->
        <div x-show="!searchOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             class="max-w-7xl mx-auto px-8 py-5 flex justify-between items-center">
            
            <nav class="flex gap-8 text-[11px] tracking-[0.25em] uppercase font-light">
                <a href="<?php echo e(route('miumiu.home')); ?>" class="hover:opacity-40 transition">Home</a>
                <a href="<?php echo e(route('miumiu.collection')); ?>" class="hover:opacity-40 transition">Collections</a>
                <a href="<?php echo e(route('miumiu.campaign')); ?>" class="hover:opacity-40 transition">Campaign</a>
            </nav>

            <a href="<?php echo e(route('miumiu.home')); ?>" class="font-serif-miu text-2xl tracking-[0.25em] font-medium uppercase">
                MIU MIU
            </a>

            <div class="flex gap-8 text-[11px] tracking-[0.25em] uppercase font-light">
                <button @click="searchOpen = true; $nextTick(() => $refs.searchInput.focus())" class="hover:opacity-40 transition uppercase cursor-pointer">
                    Search
                </button>
                <button @click="cartOpen = true" class="hover:opacity-40 transition uppercase cursor-pointer">
                    Bag (<span x-text="totalCount"></span>)
                </button>
            </div>
        </div>

        <!-- MODE 2: SEARCH BAR ULTRA-MINIMALIS -->
        <div x-show="searchOpen" 
             x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="max-w-5xl mx-auto px-8 py-4 flex justify-between items-center gap-6">
            
            <form action="<?php echo e(route('miumiu.collection')); ?>" method="GET" class="flex-1 flex items-center gap-4">
                <input type="text" 
                       name="search" 
                       x-ref="searchInput"
                       placeholder="SEARCH THE COLLECTION..." 
                       class="w-full bg-transparent border-b border-black/40 py-1 text-sm font-serif-miu tracking-[0.2em] uppercase focus:outline-none focus:border-black placeholder:font-sans placeholder:text-[10px] placeholder:tracking-[0.3em] placeholder:text-gray-400">
            </form>
            
            <button @click="searchOpen = false" class="text-[10px] tracking-[0.3em] font-light uppercase hover:opacity-50 text-gray-400 cursor-pointer">
                CLOSE ✕
            </button>
        </div>

    </header>

    <!-- DRAWER SIDE CART DINAMIS -->
    <div x-show="cartOpen" x-cloak class="fixed inset-0 z-50 overflow-hidden">
        <div @click="cartOpen = false" class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="fixed inset-y-0 right-0 max-w-full flex pl-10">
            <div class="w-screen max-w-md bg-white text-black p-8 flex flex-col justify-between shadow-2xl relative">
                <div>
                    <div class="flex justify-between items-center border-b border-gray-100 pb-5">
                        <h2 class="text-xs tracking-[0.25em] uppercase font-medium">Shopping Bag</h2>
                        <button @click="cartOpen = false" class="text-[10px] tracking-[0.2em] text-gray-400 hover:text-black uppercase cursor-pointer">[ Close ]</button>
                    </div>

                    <!-- Cart Items List (Dinamis dari LocalStorage) -->
                    <div class="py-6 space-y-6 overflow-y-auto max-h-[60vh]">
                        <template x-for="(item, index) in cartItems" :key="index">
                            <div class="flex gap-4 items-center border-b border-gray-100 pb-4">
                                <img :src="'/images/' + item.image" :alt="item.name" class="w-20 h-24 object-cover bg-neutral-100">
                                <div class="flex-1 space-y-1">
                                    <h4 class="text-xs font-medium uppercase tracking-wider" x-text="item.name"></h4>
                                    <p class="text-xs text-gray-400" x-text="item.price"></p>
                                    <div class="text-[10px] text-gray-500 uppercase">Qty: <span x-text="item.qty"></span></div>
                                </div>
                                <button @click="removeFromCart(index)" class="text-[10px] text-red-500 hover:underline uppercase cursor-pointer">Remove</button>
                            </div>
                        </template>

                        <!-- Empty State -->
                        <div x-show="cartItems.length === 0" class="text-center py-12 text-gray-400 space-y-2">
                            <p class="text-xs uppercase tracking-widest">Your shopping bag is empty.</p>
                        </div>
                    </div>
                </div>

                <!-- Cart Footer Subtotal Dinamis -->
                <div x-show="cartItems.length > 0" class="border-t border-gray-100 pt-5 space-y-4">
                    <div class="flex justify-between text-xs tracking-widest uppercase font-medium">
                        <span>Subtotal</span>
                        <span x-text="subtotal"></span>
                    </div>
                    <button class="w-full bg-black text-white py-4 text-xs uppercase tracking-[0.25em] font-medium hover:bg-neutral-800 transition">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT AREA -->
    <main class="w-full h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

</body>
</html><?php /**PATH C:\xampp\htdocs\pemweb\miumiu\resources\views/layouts/miumiu.blade.php ENDPATH**/ ?>