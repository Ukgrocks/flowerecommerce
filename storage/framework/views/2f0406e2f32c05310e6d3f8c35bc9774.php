<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Flowers</title>
    <!-- Import Heroicons for cart symbol -->
    <script src="https://unpkg.com/heroicons@1.0.6/dist/heroicons.min.js"></script>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto mt-5">
        <!-- Navigation Bar -->
        <nav class="bg-black text-white py-4">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Left: Brand Name -->
                <div class="text-xl font-bold">
                    <a href="/" class="hover:text-gray-400">Plantify</a>
                </div>

                <!-- Right: Cart Icon -->
                <div class="relative">
                    <a href="addtokart" class="hover:text-gray-400 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.343 2H20l.752-2H21M5 8h16l-1.5 10H6.5L5 8z" />
                        </svg>
                        <span class="ml-2">Cart</span>
                    </a>
                    <!-- Optional: Display Cart Items Count -->
                    
                </div>
            </div>
        </nav>

        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-center mb-8">Available Flowers</h1>

        <!-- Centering the grid using flex utilities -->
        <div class="flex justify-center items-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <?php $__currentLoopData = $flowers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card bg-white h-96 w-96 shadow-xl rounded-lg overflow-hidden">
                    <figure class="px-10 pt-10">
                        <img src="<?php echo e($flower->Photo); ?>" alt="<?php echo e($flower->Name); ?>" class="w-full h-48 object-cover rounded-lg" />
                    </figure>
                    <div class="card-body text-center">
                        <h2 class="card-title text-lg font-bold"><?php echo e($flower->Name); ?></h2>
                        <p class="text-gray-500">Price: $<?php echo e($flower->Price); ?></p>

                        
                        <form method="post" action="addtokart/<?php echo e($flower->Product_ID); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="flex justify-center mt-4">
                                <button type="submit" class="btn btn-primary flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.343 2H20l.752-2H21M5 8h16l-1.5 10H6.5L5 8z" />
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH D:\College\Semester 7th\Laravel\new_ca\resources\views/shop.blade.php ENDPATH**/ ?>