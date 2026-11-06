

<?php $__env->startSection('title', 'Miu Miu - Collections'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen w-full bg-white text-black pt-28 pb-16 px-6 md:px-12 overflow-y-auto">
    <div class="max-w-7xl mx-auto space-y-10">
        
        <!-- Header Collection -->
        <div class="text-center space-y-3">
            <span class="text-[10px] tracking-[0.4em] uppercase text-gray-400 font-light">Spring Summer 2026</span>
            <h1 class="text-4xl md:text-5xl font-serif-miu">All Collections</h1>
        </div>

        <!-- Category Filter Buttons -->
        <?php
            $currentCategory = request()->route('category') ?? 'all';
        ?>
        <div class="flex justify-center gap-8 border-b border-gray-100 pb-4 text-xs tracking-[0.2em] uppercase font-light">
            <a href="<?php echo e(route('miumiu.collection')); ?>" class="<?php echo e($currentCategory == 'all' ? 'font-semibold text-black border-b border-black pb-1' : 'text-gray-400 hover:text-black'); ?>">All</a>
            <a href="<?php echo e(route('miumiu.collection', ['category' => 'handbags'])); ?>" class="<?php echo e($currentCategory == 'handbags' ? 'font-semibold text-black border-b border-black pb-1' : 'text-gray-400 hover:text-black'); ?>">Handbags</a>
            <a href="<?php echo e(route('miumiu.collection', ['category' => 'shoes'])); ?>" class="<?php echo e($currentCategory == 'shoes' ? 'font-semibold text-black border-b border-black pb-1' : 'text-gray-400 hover:text-black'); ?>">Shoes</a>
            <a href="<?php echo e(route('miumiu.collection', ['category' => 'dresses'])); ?>" class="<?php echo e($currentCategory == 'dresses' ? 'font-semibold text-black border-b border-black pb-1' : 'text-gray-400 hover:text-black'); ?>">Dresses</a>
        </div>

        <!-- Product Grid -->
        <?php
            $allProducts = [
                ['id' => 1, 'name' => 'Leather Top-Handle Bag', 'price' => '$ 2,900', 'category' => 'handbags', 'image' => 'bag.jpg'],
                ['id' => 2, 'name' => 'Patent Leather Slingback Pumps', 'price' => '$ 1,250', 'category' => 'shoes', 'image' => 'high heels.jpg'],
                ['id' => 3, 'name' => 'Embroidered Cotton Dress', 'price' => '$ 3,400', 'category' => 'dresses', 'image' => 'dress.jpg'],
                ['id' => 4, 'name' => 'Classic Leather Loafers', 'price' => '$ 1,180', 'category' => 'shoes', 'image' => 'shoes.jpg'],
                ['id' => 5, 'name' => 'Leather Bowling Handbag', 'price' => '$ 3,100', 'category' => 'handbags', 'image' => 'handbag.jpg'],
            ];

            $filteredProducts = array_filter($allProducts, function($item) use ($currentCategory) {
                if ($currentCategory == 'all') return true;
                return $item['category'] == strtolower($currentCategory);
            });
        ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <?php $__currentLoopData = $filteredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group space-y-3">
                    <a href="<?php echo e(route('miumiu.product', ['id' => $item['id']])); ?>" class="block overflow-hidden bg-neutral-100 aspect-3/4 relative">
                        <img src="<?php echo e(asset('images/' . $item['image'])); ?>" alt="<?php echo e($item['name']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </a>
                    <div class="flex justify-between items-start pt-2">
                        <div>
                            <h3 class="text-xs font-medium uppercase tracking-wider">
                                <a href="<?php echo e(route('miumiu.product', ['id' => $item['id']])); ?>" class="hover:underline">
                                    <?php echo e($item['name']); ?>

                                </a>
                            </h3>
                            <p class="text-xs text-gray-400 font-serif-miu pt-1"><?php echo e($item['price']); ?></p>
                        </div>
                        <span class="text-[10px] tracking-widest text-gray-400 uppercase">#<?php echo e($item['id']); ?></span>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.miumiu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\miumiu\resources\views/miumiu/collection.blade.php ENDPATH**/ ?>