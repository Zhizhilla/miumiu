

<?php $__env->startSection('title', $product['name'] . ' - Miu Miu'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen w-full bg-white text-black pt-28 pb-16 px-6 overflow-y-auto">
    <div class="max-w-6xl mx-auto">
        
        <!-- Tombol Back -->
        <div class="mb-8">
            <a href="<?php echo e(route('miumiu.collection')); ?>" class="text-[10px] tracking-[0.25em] uppercase font-light text-gray-400 hover:text-black transition flex items-center gap-2">
                &larr; Back to Collections
            </a>
        </div>

        <!-- Grid Detail Produk -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            
            <!-- Gambar Produk Dinamis -->
            <div class="w-full h-[550px] bg-neutral-100 overflow-hidden shadow-sm">
                <img src="<?php echo e(asset('images/' . $product['image'])); ?>" alt="<?php echo e($product['name']); ?>" class="w-full h-full object-cover">
            </div>

            <!-- Detail Info Produk Dinamis -->
            <div class="space-y-6 pt-4">
                <div class="space-y-2">
                    <span class="text-[10px] tracking-[0.3em] uppercase text-gray-400 font-light">
                        PRODUCT ID: #<?php echo e($product['id']); ?>

                    </span>
                    <h1 class="text-3xl md:text-4xl font-serif-miu leading-tight">
                        <?php echo e($product['name']); ?>

                    </h1>
                    <p class="text-xl font-serif-miu text-neutral-800 pt-1">
                        <?php echo e($product['price']); ?>

                    </p>
                </div>

                <hr class="border-gray-100">

                <p class="text-xs tracking-widest text-gray-500 leading-relaxed font-light">
                    <?php echo e($product['description']); ?>

                </p>

                <!-- Tombol Add to Shopping Bag Interaktif & Real-time -->
                <div class="pt-6 space-y-3" x-data>
                    <button @click="$dispatch('add-to-cart', {
                                id: <?php echo e($product['id']); ?>,
                                name: '<?php echo e(addslashes($product['name'])); ?>',
                                price: '<?php echo e($product['price']); ?>',
                                image: '<?php echo e($product['image']); ?>'
                            })" 
                            class="w-full bg-black text-white py-4 text-xs tracking-[0.25em] font-medium uppercase hover:bg-neutral-800 transition cursor-pointer">
                        ADD TO SHOPPING BAG
                    </button>
                    
                    <p class="text-[10px] tracking-widest text-center text-gray-400 uppercase">
                        FREE EXPRESS SHIPPING & SIGNATURE GIFT PACKAGING
                    </p>
                </div>
            </div>

        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.miumiu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\miumiu\resources\views/miumiu/detail.blade.php ENDPATH**/ ?>