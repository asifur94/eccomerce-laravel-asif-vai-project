@extends('home.layouts.master-layout')

@section('title')
    Home Pgae
@endsection

@section('main-content')
    <div class="flex gap-10 my-16 container mx-auto">
        <div> <img src="{{ URL::asset('assets/media/png/RightBanner_1-compressed.png') }}" alt=""></div>
        <div> <img src="{{ URL::asset('assets/media/png/LeftBanner_1-compressed.png') }}" alt=""></div>

    </div>

    <!-- product section start here -->
    {{-- <section>

        <div class="grid grid-cols-12 mt-8 container mx-auto  gap-4 max-sm:grid-cols-1 max-sm:justify-center">
            <!-- left side -->
            <div class="col-span-8 ">
                <div class="mb-6  flex container mx-auto gap-2 items-center border-b border-gray-200">
                    <img src="{{ URL::asset('assets/media/png/list.png') }}" alt="">
                    <h1 class="font-bold">NEW PRODUCTS</h1>
                </div>
                <div
                    class="grid grid-cols-8 gap-6 max-sm:grid-cols-1 max-sm:justify-center max-sm:items-center max-sm:px-8 max-sm:mx-auto">

                    <div
                        class="col-span-3 max-sm:col-span-8 max-sm:mx-auto max-sm:flex max-sm:justify-center max-sm:items-center max-sm:flex-col">

                        <div class=" relative  border-[1px] border-gray-200 max-sm:border-none">
                            <img src="{{ URL::asset('assets/media/png/sub-1.png') }}" alt=""
                                class="w-28 max-sm:w-16 absolute top-[-12px] left-[-52px] max-sm:top-[-26px] max-sm:left-[52px]">
                            <img src="{{ URL::asset('assets/media/png/product-1.jpg') }}" alt=""
                                class="w-86 max-sm:w-36 max-sm:mx-auto">

                        </div>
                        <a href="" class="text-sm text-[#18a6ef] mt-2 max-sm:text-center">LCD ASSEMBLY WITH STEEL
                            PLATE COMPATIBLE
                            FOR IPHONE 8 / SE
                            (2020 /
                            2022)
                            (AFTERMARKET PRO: XO7 INCELL)
                            (BLACK)</a>
                        <p class="text-sm text-[#e62337] mt-2">$14.09</p>
                        <div class="flex mt-2 items-center  w-[80%]  justify-between gap-4 ">
                            <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                <button class="decreaseBtn" class="border-r-2 text-lg text-[#848484]">-</button>
                                <input type="number" value="0" maxlength="12" name="qty"
                                    class="focus:none text-center text-lg text-[#848484] py-[4px] " id="qty_feature_88021">
                                <button class="increaseBtn" class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                            </div>
                            <div>
                                <img src="{{ URL::asset('assets/media/svg/cart-check-svgrepo-com.svg') }}" alt=""
                                    class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                            </div>
                        </div>
                    </div>

                    <!-- second product -->

                    <div class="col-span-5 max-sm:col-span-8 flex flex-col gap-6 ">
                        <!-- one -->
                        <div class="grid grid-cols-4 gap-4 ">
                            <div class=" relative  border-[1px] border-gray-200 col-span-1 h-fit">
                                <img src="assets/media/png/AFTERMARKET.png" alt=""
                                    class="w-12  absolute top-[-12px] left-[-16px]">
                                <img src="assets/media/png/107082080786_7.webp" alt="" class="w-28 py-6">

                            </div>
                            <div class="col-span-3">
                                <a href="#" class="text-sm text-[#18a6ef] ">LCD ASSEMBLY WITH STEEL PLATE COMPATIBLE
                                    FOR IPHONE 8 / SE
                                    (2020
                                    /
                                    2022)
                                    (AFTERMARKET PRO: XO7 INCELL)
                                    (BLACK)</a>
                                <p class="text-sm text-[#e62337] mt-2">$14.09</p>
                                <div class="flex mt-2 items-center  w-[60%] max-sm:w-[100%] justify-between gap-4 ">
                                    <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                        <button class="decreaseBtn" class="border-r-2 text-lg text-[#848484]">-</button>
                                        <input type="number" value="0" maxlength="12" name="qty"
                                            class="focus:none text-center text-lg text-[#848484] py-[4px] "
                                            id="qty_feature_88021">
                                        <button class="increaseBtn"
                                            class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                                    </div>
                                    <div>
                                        <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                            class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- two -->
                        <div class="grid grid-cols-4 gap-4 ">
                            <div class=" relative  border-[1px] border-gray-200 col-span-1 h-fit">
                                <img src="assets/media/png/sub-1.png" alt=""
                                    class="w-12  absolute top-[-12px] left-[-16px]">
                                <img src="assets/media/png/s-pro.png" alt="" class="w-28 py-6">

                            </div>
                            <div class="col-span-3">
                                <p class="text-sm text-[#18a6ef] ">LCD ASSEMBLY WITH STEEL PLATE COMPATIBLE FOR IPHONE 8 /
                                    SE (2020
                                    /
                                    2022)
                                    (AFTERMARKET PRO: XO7 INCELL)
                                    (BLACK)</p>
                                <p class="text-sm text-[#e62337] mt-2">$14.09</p>
                                <div class="flex mt-2 items-center  w-[60%] max-sm:w-[100%] justify-between gap-4 ">
                                    <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                        <button class="decreaseBtn" class="border-r-2 text-lg text-[#848484]">-</button>
                                        <input type="number" value="0" maxlength="12" name="qty"
                                            class="focus:none text-center text-lg text-[#848484] py-[4px] "
                                            id="qty_feature_88021">
                                        <button class="increaseBtn"
                                            class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                                    </div>
                                    <div>
                                        <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                            class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right side  -->
            <div class="col-span-4 max-sm:col-span-8 flex flex-col gap-6 max-sm:px-8">
                <div class="  flex container mx-auto gap-2 items-center border-b border-gray-200">
                    <img src="assets/media/png/list.png" alt="">
                    <h1 class="font-bold">NEW PRODUCTS</h1>
                </div>
                <!-- one -->
                <div class="grid grid-cols-4 gap-4 ">
                    <div class=" relative  border-[1px] border-gray-200 col-span-1 h-fit">
                        <img src="assets/media/png/AFTERMARKET.png" alt=""
                            class="w-12  absolute top-[-12px] left-[-16px]">
                        <img src="assets/media/png/107082080786_7.webp" alt="" class="w-28 py-6">

                    </div>
                    <div class="col-span-3">
                        <a href="#" class="text-sm text-[#18a6ef] ">LCD ASSEMBLY WITH STEEL PLATE COMPATIBLE FOR
                            IPHONE 8 / SE
                            (2020
                            /
                            2022)
                            (AFTERMARKET PRO: XO7 INCELL)
                            (BLACK)</a>
                        <p class="text-sm text-[#e62337] mt-2">$14.09</p>
                        <div class="flex mt-2 items-center  w-[60%] max-sm:w-[100%] justify-between gap-4 ">
                            <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                <button class="decreaseBtn" class="border-r-2 text-lg text-[#848484]">-</button>
                                <input type="number" value="0" maxlength="12" name="qty"
                                    class="focus:none text-center text-lg text-[#848484] py-[4px] "
                                    id="qty_feature_88021">
                                <button class="increaseBtn" class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                            </div>
                            <div>
                                <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                    class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- two -->
                <div class="grid grid-cols-4 gap-4 ">
                    <div class=" relative  border-[1px] border-gray-200 col-span-1 h-fit">
                        <img src="assets/media/png/sub-1.png" alt=""
                            class="w-12  absolute top-[-12px] left-[-16px]">
                        <img src="assets/media/png/s-pro.png" alt="" class="w-28 py-6">

                    </div>
                    <div class="col-span-3">
                        <p class="text-sm text-[#18a6ef] ">LCD ASSEMBLY WITH STEEL PLATE COMPATIBLE FOR IPHONE 8 / SE (2020
                            /
                            2022)
                            (AFTERMARKET PRO: XO7 INCELL)
                            (BLACK)</p>
                        <p class="text-sm text-[#e62337] mt-2">$14.09</p>
                        <div class="flex mt-2 items-center  w-[60%] max-sm:w-[100%] justify-between gap-4 ">
                            <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                <button class="decreaseBtn" class="border-r-2 text-lg text-[#848484]">-</button>
                                <input type="number" value="0" maxlength="12" name="qty"
                                    class="focus:none text-center text-lg text-[#848484] py-[4px] "
                                    id="qty_feature_88021">
                                <button class="increaseBtn" class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                            </div>
                            <div>
                                <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                    class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="bg-[#ff8469] my-8">
        <img src="assets/media/png/Frame-427323564.png" alt="" class="w-fit container mx-auto">
    </div>

    <!-- product section start here -->
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
                            <img src="{{ URL::asset('assets/media/png/sub-1.png') }}" alt=""
                                class="w-28 max-sm:w-16 absolute top-[-12px] left-[-52px] max-sm:top-[-26px] max-sm:left-[52px]">
                            <img src="{{ $lastedProduct['image'] }}" alt="" class="w-86 max-sm:w-36 max-sm:mx-auto">

                        </div>
                        <a href="{{ route('singleProduct', $lastedProduct['id']) }}"
                            class="text-sm text-[#18a6ef] mt-2 max-sm:text-center">{{ $lastedProduct['title'] }}</a>
                        <p class="text-sm text-[#e62337] mt-2">

                            @if (auth()->check())
                                {{ $lastedProduct['price'] }}
                            @else
                                <a href="{{ route('user.login') }}">Login to see the price</a>
                            @endif

                        </p>
                        <div class="flex mt-2 items-center  w-[80%]  justify-between gap-4 ">
                            <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                <button class="decreaseBtn" data-pid="{{ $lastedProduct['id'] }}"
                                    class="border-r-2 text-lg text-[#848484]">-</button>
                                <input type="number" readonly data-pid="{{ $lastedProduct['id'] }}" value="0"
                                    maxlength="12" name="qty"
                                    class="focus:none text-center text-lg text-[#848484] py-[4px] " id="qty_feature_88021">
                                <button class="increaseBtn" data-pid="{{ $lastedProduct['id'] }}"
                                    class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                            </div>
                            @if (auth()->check())
                                <form class="cart_form" data-pid="{{ $lastedProduct['id'] }}">
                                    <input type="hidden" class="qty_product{{ $lastedProduct['id'] }}">
                                    <button class="cart_btn" type="submit">
                                        <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                            class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('user.login') }}">
                                    <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                        class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class=" lg:w-8/12 xl:w-9/12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 px-10">
                            @foreach ($products as $item)
                                <div class="grid grid-cols-4 gap-4 ">
                                    <div class=" relative  border-[1px] border-gray-200 col-span-1 h-fit">
                                        <img src="assets/media/png/AFTERMARKET.png" alt=""
                                            class="w-12  absolute top-[-12px] left-[-16px]">
                                        <img src="{{ $item['image'] }}" alt="" class="w-28 py-6">

                                    </div>
                                    <div class="col-span-3">
                                        <a href="{{ route('singleProduct', $item['id']) }}"
                                            class="text-sm text-[#18a6ef] ">{{ $item['title'] }}</a>
                                        <p class="text-sm text-[#e62337] mt-2">

                                            @if (auth()->check())
                                                ${{ $item['price'] . ' ' . $item['currencyCode'] }}
                                            @else
                                                <a href="" class="text-red-400">Login to see the price</a>
                                            @endif

                                        </p>
                                        <div class="flex mt-2 items-center  w-[60%] max-sm:w-[100%] justify-between gap-4 ">
                                            <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                                <button class="decreaseBtn" data-pid="{{ $item['id'] }}"
                                                    class="border-r-2 text-lg text-[#848484]">-</button>
                                                <input type="number" readonly data-pid="{{ $item['id'] }}"
                                                    value="0" maxlength="12" name="qty"
                                                    class="focus:none text-center text-lg text-[#848484] py-[4px] "
                                                    id="qty_feature_88021">
                                                <button class="increaseBtn" data-pid="{{ $item['id'] }}"
                                                    class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                                            </div>
                                            @if (auth()->check())
                                                <form class="cart_form" data-pid="{{ $item['id'] }}">
                                                    <input type="hidden" class="qty_product{{ $item['id'] }}">
                                                    <button class="cart_btn" type="submit">
                                                        <img src="assets/media/svg/cart-check-svgrepo-com.svg"
                                                            alt=""
                                                            class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                                    </button>
                                                </form>
                                            @else
                                                <a href="{{ route('user.login') }}">
                                                    <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                                        class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="w-full mt-20">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- product section end here -->
@endsection
