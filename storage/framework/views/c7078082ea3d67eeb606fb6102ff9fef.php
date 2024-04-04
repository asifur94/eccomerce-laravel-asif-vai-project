

<?php $__env->startSection('title'); ?>
    <?php echo e($singleProduct->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- single product page -->
    <section class="container mx-auto max-sm:w-full">
        <div class=" relative  bg-[#c9061a] px-4 py-2 mt-16">
            <h1 class="text-lg font-semibold text-white "><?php echo e($singleProduct->title); ?></h1>
            <img class="absolute right-0 top-[-47px] max-sm:hidden"
                src="<?php echo e(URL::asset('assets/media/png/lifetimewarranty.png')); ?>" alt="">
        </div>

        <div class="mt-4 flex items-center gap-3 max-sm:flex-col">
            <img src="<?php echo e(URL::asset('assets/media/png/sku.png')); ?>" alt="">
            <p class="text-[18px] inline">107082004815 </p>
            <p class="text-[18px] text-red-600">NEW SKU </p>
            <p class="text-[18px] text-red-600">202232010100501</p>
        </div>


        <!-- product start here -->
        <div class="grid grid-cols-7 mb-4 max-sm:grid-cols-1 gap-6">
            <!-- left side  -->
            <div class="col-span-3">
                <div class="flex mt-4 gap-2">
                    <div class="border-r-2 border-gray-200 flex w-auto">
                        <img src="<?php echo e(URL::asset('assets/media/png/spping truck.png')); ?>" alt="">
                        <button class="text-xs text-gray-500 px-4  gap-1">SHIP : TOMORROW</button>
                    </div>
                    <div class="border-r-2 border-gray-200 flex gap-1">
                        <img src="<?php echo e(URL::asset('assets/media/png/handshake.png')); ?>" alt="">
                        <button class="text-xs text-gray-500 px-4  ">SHIP : TOMORROW</button>
                    </div>
                </div>

                <div class="flex gap-2 items-center mt-4">

                    <img src="<?php echo e(URL::asset('assets/media/png/return.png')); ?>" alt="">
                    <h1>EASY REFUNDS & RETURNS</h1>

                </div>
                <div class="flex flex-col items-center justify-center my-8 w-full">
                    <div id="gallery" class="flex justify-center items-center mb-4">
                        <img id="mainImage" class="w-1/2 rounded-lg shadow-lg mb-4" src="<?php echo e($singleProduct->image); ?>"
                            alt="Main Image">
                    </div>

                    <div id="thumbnails" class="flex space-x-4 hidden">
                        <img class="thumbnail w-16 rounded-lg shadow-lg"
                            src="../assets/media/png/LeftBanner_1-compressed.png" alt="Thumbnail 1"
                            onclick="changeImage(this)">
                        <img class="thumbnail w-16 rounded-lg shadow-lg" src="../assets/media/png/AFTERMARKET.png"
                            alt="Thumbnail 2" onclick="changeImage(this)">
                        <img class="thumbnail w-16 rounded-lg shadow-lg"
                            src="../assets/media/png/LeftBanner_1-compressed.png" alt="Thumbnail 3"
                            onclick="changeImage(this)">
                        <img class="thumbnail w-16 rounded-lg shadow-lg"
                            src="../assets/media/png/RightBanner_1-compressed.png " alt="Thumbnail 4"
                            onclick="changeImage(this)">
                    </div>
                </div>

                <div class="hidden border-t-4 border-[#18a6ef] relative bg-[#efefef] px-4 pb-6">
                    <img src="../assets/media/png/tag.png" alt="" class="absolute top-[-16px] left-7">
                    <div class="mt-8 flex gap-2 flex-wrap">
                        <button
                            class="border-[1px] border-gray-400 text-xs px-2 py-[2px] transition-all duration-300 hover:bg-black hover:text-white">iphone
                            xr</button>
                        <button
                            class="border-[1px] border-gray-400 text-xs px-2 py-[2px] transition-all duration-300 hover:bg-black hover:text-white">iphone
                            xr</button>
                        <button
                            class="border-[1px] border-gray-400 text-xs px-2 py-[2px] transition-all duration-300 hover:bg-black hover:text-white">iphone
                            xr</button>
                        <button
                            class="border-[1px] border-gray-400 text-xs px-2 py-[2px] transition-all duration-300 hover:bg-black hover:text-white">iphone
                            xr</button>
                        <button
                            class="border-[1px] border-gray-400 text-xs px-2 py-[2px] transition-all duration-300 hover:bg-black hover:text-white">iphone
                            xr</button>
                        <button
                            class="border-[1px] border-gray-400 text-xs px-2 py-[2px] transition-all duration-300 hover:bg-black hover:text-white">oled
                            assembly for iphone xr</button>
                        <button
                            class="border-[1px] border-gray-400 text-xs px-2 py-[2px] transition-all duration-300 hover:bg-black hover:text-white">oled
                            assembly for iphone xr</button>
                        <button
                            class="border-[1px] border-gray-400 text-xs px-2 py-[2px] transition-all duration-300 hover:bg-black hover:text-white">iphone
                            xr</button>
                        <button
                            class="border-[1px] border-gray-400 text-xs px-2 py-[2px] transition-all duration-300 hover:bg-black hover:text-white">iphone
                            xr</button>

                    </div>
                </div>
            </div>
            <!-- tag -->
            <!-- right side -->
            <div class="col-span-4 mt-4">
                <p class="text-[25px] text-[#e62337] ">
                    <?php if(auth()->check()): ?>
                        <?php echo e("$" . $singleProduct->price . ' ' . $singleProduct->currencyCode); ?>

                    <?php else: ?>
                        <a href="<?php echo e(route('user.login')); ?>">Login to see the price</a>
                    <?php endif; ?>
                </p>
                <div class="flex gap-2 hidden">
                    <img src="../assets/media/png/star.png" alt="">
                    <p>4.8 Out Of 5 Rating</p>
                </div>
                <div class="mt-2 items-center grid grid-cols-4 max-sm:grid-cols-1  justify-between gap-4 ">
                    <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                        <button class="decreaseBtn" data-pid="<?php echo e($singleProduct->id); ?>"
                            class="border-r-2 text-lg text-[#848484]">-</button>
                        <input type="number" value="0" maxlength="12" name="qty"
                            class="focus:none text-center text-lg text-[#848484] py-[4px] " readonly
                            data-pid="<?php echo e($singleProduct->id); ?>" id="qty_feature_88021">
                        <button class="increaseBtn" data-pid="<?php echo e($singleProduct->id); ?>"
                            class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                    </div>
                    <?php if(auth()->check()): ?>
                        <form class="cart_form" data-pid="<?php echo e($singleProduct->id); ?>">
                            <input type="hidden" class="qty_product<?php echo e($singleProduct->id); ?>">
                            <button class="cart_btn" type="submit">
                                <div
                                    class="flex gap-4 items-center hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2">
                                    <img src="../assets/media/svg/cart-check-svgrepo-com.svg" alt="" class="w-6">
                                    <h1 class="text-white font-medium text-center">ADD TO CART</h1>
                                </div>
                            </button>
                        </form>
                    <?php else: ?>
                        <a href="<?php echo e(route('user.login')); ?>">
                            <div
                                class="flex gap-4 items-center hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2">
                                <img src="../assets/media/svg/cart-check-svgrepo-com.svg" alt="" class="w-6">
                                <h1 class="text-white font-medium text-center">ADD TO CART</h1>
                            </div>
                        </a>
                    <?php endif; ?>

                </div>

                <div class="flex">
                    <p class="text-xs flex gap-1 my-6">Pay in 4 interest-free payments on purchases of $30-$1,500 with <img
                            src="<?php echo e(URL::asset('assets/media/png/download.svg')); ?>" class="w-14" alt=""> <a
                            href="" class="text-blue-400 underline">Learn more</a>
                    </p>
                </div>

                <div class="border-[1px] border-gray-400">

                    <div class="bg-[#18a6ef] flex items-center  justify-between p-6">
                        <h1 class="text-xl font-medium text-white"> PRODUCT DESCRIPTION</h1>
                        <img src="../assets/media/png/question-mark.png" alt="">
                    </div>

                    <div class="px-12 py-7">
                        <p><?php echo e($singleProduct->description); ?></p>
                    </div>
                </div>


            </div>
        </div>

        <section>
            <div class="bg-[#efefef] flex items-center  justify-between p-6">
                <h1 class="text-xl font-medium text-[#18a6ef]"> RELATED PRODUCTS</h1>
            </div>
        </section>

        <section>

            <div class="grid mt-8 container mx-auto gap-4 max-sm:grid-cols-1 max-sm:justify-center">
                <!-- left side -->
                <div class="col-span-12">
                    <div class="mb-6 flex container mx-auto gap-2 items-center border-b border-gray-200">
                        <img src="assets/media/png/list.png" alt="">
                        <h1 class="font-bold">NEW PRODUCTS</h1>
                    </div>
                    <div class="lg:flex gap-6">
                        <div class="hidden lg:block xl:block px-7 lg:w-6/12  xl:w-3/12">
                            <div class=" relative  border-[1px] border-gray-200 max-sm:border-none">
                                <img src="<?php echo e(URL::asset('assets/media/png/sub-1.png')); ?>" alt=""
                                    class="w-28 max-sm:w-16 absolute top-[-12px] left-[-52px] max-sm:top-[-26px] max-sm:left-[52px]">
                                <img src="<?php echo e($lastedProduct['image']); ?>" alt="" class="w-86 max-sm:w-36 max-sm:mx-auto">
    
                            </div>
                            <a href="<?php echo e(route('singleProduct', $lastedProduct['id'])); ?>"
                                class="text-sm text-[#18a6ef] mt-2 max-sm:text-center"><?php echo e($lastedProduct['title']); ?></a>
                            <p class="text-sm text-[#e62337] mt-2">
    
                                <?php if(auth()->check()): ?>
                                    <?php echo e($lastedProduct['price']); ?>

                                <?php else: ?>
                                    <a href="<?php echo e(route('user.login')); ?>">Login to see the price</a>
                                <?php endif; ?>
    
                            </p>
                            <div class="flex mt-2 items-center  w-[80%]  justify-between gap-4 ">
                                <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                    <button class="decreaseBtn" data-pid="<?php echo e($lastedProduct['id']); ?>"
                                        class="border-r-2 text-lg text-[#848484]">-</button>
                                    <input type="number" readonly data-pid="<?php echo e($lastedProduct['id']); ?>" value="0"
                                        maxlength="12" name="qty"
                                        class="focus:none text-center text-lg text-[#848484] py-[4px] " id="qty_feature_88021">
                                    <button class="increaseBtn" data-pid="<?php echo e($lastedProduct['id']); ?>"
                                        class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                                </div>
                                <?php if(auth()->check()): ?>
                                    <form class="cart_form" data-pid="<?php echo e($lastedProduct['id']); ?>">
                                        <input type="hidden" class="qty_product<?php echo e($lastedProduct['id']); ?>">
                                        <button class="cart_btn" type="submit">
                                            <img src="<?php echo e(URL::asset("assets/media/svg/cart-check-svgrepo-com.svg")); ?>" alt=""
                                                class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <a href="<?php echo e(route('user.login')); ?>">
                                        <img src="<?php echo e(URL::asset("assets/media/svg/cart-check-svgrepo-com.svg")); ?>" alt=""
                                            class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class=" lg:w-8/12 xl:w-9/12">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 px-10">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="grid grid-cols-4 gap-4 ">
                                        <div class=" relative  border-[1px] border-gray-200 col-span-1 h-fit">
                                            <img src="<?php echo e(URL::asset("assets/media/png/AFTERMARKET.png")); ?>" alt=""
                                                class="w-12  absolute top-[-12px] left-[-16px]">
                                            <img src="<?php echo e($item['image']); ?>" alt="" class="w-28 py-6">
    
                                        </div>
                                        <div class="col-span-3">
                                            <a href="<?php echo e(route('singleProduct', $item['id'])); ?>"
                                                class="text-sm text-[#18a6ef] "><?php echo e($item['title']); ?></a>
                                            <p class="text-sm text-[#e62337] mt-2">
    
                                                <?php if(auth()->check()): ?>
                                                    $<?php echo e($item['price'] . ' ' . $item['currencyCode']); ?>

                                                <?php else: ?>
                                                    <a href="" class="text-red-400">Login to see the price</a>
                                                <?php endif; ?>
    
                                            </p>
                                            <div class="flex mt-2 items-center  w-[60%] max-sm:w-[100%] justify-between gap-4 ">
                                                <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                                    <button class="decreaseBtn" data-pid="<?php echo e($item['id']); ?>"
                                                        class="border-r-2 text-lg text-[#848484]">-</button>
                                                    <input type="number" readonly data-pid="<?php echo e($item['id']); ?>"
                                                        value="0" maxlength="12" name="qty"
                                                        class="focus:none text-center text-lg text-[#848484] py-[4px] "
                                                        id="qty_feature_88021">
                                                    <button class="increaseBtn" data-pid="<?php echo e($item['id']); ?>"
                                                        class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                                                </div>
                                                <?php if(auth()->check()): ?>
                                                    <form class="cart_form" data-pid="<?php echo e($item['id']); ?>">
                                                        <input type="hidden" class="qty_product<?php echo e($item['id']); ?>">
                                                        <button class="cart_btn" type="submit">
                                                            <img src="<?php echo e(URL::asset("assets/media/svg/cart-check-svgrepo-com.svg")); ?>"
                                                                alt=""
                                                                class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                                        </button>
                                                    </form>
                                                <?php else: ?>
                                                    <a href="<?php echo e(route('user.login')); ?>">
                                                        <img src="<?php echo e(URL::asset("assets/media/svg/cart-check-svgrepo-com.svg")); ?>" alt=""
                                                            class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                            </div>
                            <div class="w-full mt-20">
                                <?php echo e($products->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\learn_laravel\eccom\resources\views/home/product.blade.php ENDPATH**/ ?>