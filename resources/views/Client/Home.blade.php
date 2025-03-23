@extends('client.layout.master')
@section('content')
    <div>
        <div class="container">
            <section
                class="relative w-full min-h-[90vh] flex flex-col items-center justify-center text-center px-6 lg:px-16 py-16 md:py-32">
                <!-- Hình nền -->
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('https://plus.unsplash.com/premium_photo-1695762436987-1cf827e5f1dd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGJ1cmdlcmFpfGVufDB8MHwwfHx8MA%3D%3D');">
                </div>
                <div class="absolute inset-0 bg-black opacity-50"></div>

                <!-- Nội dung -->
                <div class="relative z-10 text-white max-w-2xl">
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                        Chào mừng đến với nền tảng của chúng tôi
                    </h1>
                    <p class="mt-4 text-lg md:text-xl">
                        Khám phá các tính năng tuyệt vời và tham gia cùng chúng tôi ngay hôm nay.
                    </p>
                    <div class="mt-6">
                        <a href="#"
                            class="group px-6 py-3 bg-red-500 hover:bg-red-600 rounded-lg text-lg font-semibold transition inline-flex items-center">
                            Bắt đầu ngay
                            <i class="fa-solid fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </section>

            <section class="px-8 mt-8 mb-5">
                <div class="w-full flex justify-between items-center">
                    <h1 class="text-start font-semibold text-xl md:text-2xl">Món ăn phổ biến</h1>
                    <a href="#" class="px-6 py-3 text-red-500 font-semibold rounded-lg hover:text-red-600 transition">Tất cả</a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-5">
                    <!-- Thẻ món ăn 1 -->
                    <div class="rounded-lg overflow-hidden border border-gray-300 shadow-lg flex flex-col bg-white">
                        <div class="relative">
                            <img class="w-full h-56 object-cover"
                                src="https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="Công thức salad đơn giản">
                            <div class="absolute inset-0 bg-black opacity-25 hover:opacity-0 transition"></div>
                            <div class="text-xs absolute top-2 right-2 bg-red-500 px-3 py-1 text-white rounded-lg">#1</div>
                        </div>
                        <div class="px-6 py-4 flex-grow">
                            <h2 class="font-semibold text-lg hover:text-red-600 transition">Công thức salad đơn giản</h2>
                            <p class="text-gray-500 text-sm mt-1">Một công thức salad tươi ngon và dễ chế biến.</p>
                        </div>
                        <div class="px-6 py-3 flex justify-between bg-gray-100">
                            <button
                                class="px-4 py-2 text-red-500 border border-red-500 rounded-lg hover:bg-red-500 hover:text-white transition">Xem</button>
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Thêm <i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                    <div class="rounded-lg overflow-hidden border border-gray-300 shadow-lg flex flex-col bg-white">
                        <div class="relative">
                            <img class="w-full h-56 object-cover"
                                src="https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="Công thức salad đơn giản">
                            <div class="absolute inset-0 bg-black opacity-25 hover:opacity-0 transition"></div>
                            <div class="text-xs absolute top-2 right-2 bg-red-500 px-3 py-1 text-white rounded-lg">#1</div>
                        </div>
                        <div class="px-6 py-4 flex-grow">
                            <h2 class="font-semibold text-lg hover:text-red-600 transition">Công thức salad đơn giản</h2>
                            <p class="text-gray-500 text-sm mt-1">Một công thức salad tươi ngon và dễ chế biến.</p>
                        </div>
                        <div class="px-6 py-3 flex justify-between bg-gray-100">
                            <button
                                class="px-4 py-2 text-red-500 border border-red-500 rounded-lg hover:bg-red-500 hover:text-white transition">Xem</button>
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Thêm <i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                    <div class="rounded-lg overflow-hidden border border-gray-300 shadow-lg flex flex-col bg-white">
                        <div class="relative">
                            <img class="w-full h-56 object-cover"
                                src="https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="Công thức salad đơn giản">
                            <div class="absolute inset-0 bg-black opacity-25 hover:opacity-0 transition"></div>
                            <div class="text-xs absolute top-2 right-2 bg-red-500 px-3 py-1 text-white rounded-lg">#1</div>
                        </div>
                        <div class="px-6 py-4 flex-grow">
                            <h2 class="font-semibold text-lg hover:text-red-600 transition">Công thức salad đơn giản</h2>
                            <p class="text-gray-500 text-sm mt-1">Một công thức salad tươi ngon và dễ chế biến.</p>
                        </div>
                        <div class="px-6 py-3 flex justify-between bg-gray-100">
                            <button
                                class="px-4 py-2 text-red-500 border border-red-500 rounded-lg hover:bg-red-500 hover:text-white transition">Xem</button>
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Thêm <i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
            </section>

            <div class="bg-gray-900 py-16">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-white mb-8">Giới thiệu sản phẩm mới nhất</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-lg shadow-lg p-8">
                            <h3 class="text-xl font-bold text-gray-900 mt-4">Tên sản phẩm</h3>
                            <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-900 font-bold text-lg">$29.99</span>
                                <button class="bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800">Thêm vào giỏ</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow-lg p-8">
                            <h3 class="text-xl font-bold text-gray-900 mt-4">Tên sản phẩm</h3>
                            <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-900 font-bold text-lg">$29.99</span>
                                <button class="bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800">Thêm vào giỏ</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow-lg p-8">
                            <h3 class="text-xl font-bold text-gray-900 mt-4">Tên sản phẩm</h3>
                            <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-900 font-bold text-lg">$29.99</span>
                                <button class="bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>

            <section class="bg-white dark:bg-gray-900">
                <div class="text-center py-10">
                  <h1 class="text-4xl font-bold text-black dark:text-white mb-4">Khám phá những cuộc phiêu lưu mới</h1>
                  <p class="text-lg text-gray-600 dark:text-gray-400">Khám phá, tìm hiểu và lấy cảm hứng từ những hành trình thú vị.</p>
                </div>
                <div class="px-8 py-10 mx-auto lg:max-w-screen-xl">
                  <div class="grid gap-x-8 gap-y-12 md:grid-cols-2 lg:grid-cols-3">
                    <div class="relative">
                      <a href="#" class="block overflow-hidden group rounded-xl shadow-lg">
                        <img src="https://images.unsplash.com/photo-1511497584788-876760111969" class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110" alt="Cuộc phiêu lưu">
                      </a>
                      <div class="relative mt-5">
                        <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">10 Tháng 9 2023</p>
                        <a href="#" class="block mb-3 hover:underline">
                          <h2 class="text-2xl font-bold leading-5 text-black dark:text-white transition-colors duration-200 hover:text-purple-700">Chuyến đi đến núi</h2>
                        </a>
                        <p class="mb-4 text-gray-700 dark:text-gray-300">Thoát khỏi sự hối hả và khám phá vẻ đẹp yên bình của núi rừng.</p>
                        <a href="#" class="font-medium underline text-purple-600 dark:text-purple-400">Đọc thêm</a>
                      </div>
                    </div>
                    <div class="relative">
                        <a href="#" class="block overflow-hidden group rounded-xl shadow-lg">
                          <img src="https://images.unsplash.com/photo-1511497584788-876760111969" class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110" alt="Cuộc phiêu lưu">
                        </a>
                        <div class="relative mt-5">
                          <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">10 Tháng 9 2023</p>
                          <a href="#" class="block mb-3 hover:underline">
                            <h2 class="text-2xl font-bold leading-5 text-black dark:text-white transition-colors duration-200 hover:text-purple-700">Chuyến đi đến núi</h2>
                          </a>
                          <p class="mb-4 text-gray-700 dark:text-gray-300">Thoát khỏi sự hối hả và khám phá vẻ đẹp yên bình của núi rừng.</p>
                          <a href="#" class="font-medium underline text-purple-600 dark:text-purple-400">Đọc thêm</a>
                        </div>
                      </div>
                      <div class="relative">
                        <a href="#" class="block overflow-hidden group rounded-xl shadow-lg">
                          <img src="https://images.unsplash.com/photo-1511497584788-876760111969" class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110" alt="Cuộc phiêu lưu">
                        </a>
                        <div class="relative mt-5">
                          <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">10 Tháng 9 2023</p>
                          <a href="#" class="block mb-3 hover:underline">
                            <h2 class="text-2xl font-bold leading-5 text-black dark:text-white transition-colors duration-200 hover:text-purple-700">Chuyến đi đến núi</h2>
                          </a>
                          <p class="mb-4 text-gray-700 dark:text-gray-300">Thoát khỏi sự hối hả và khám phá vẻ đẹp yên bình của núi rừng.</p>
                          <a href="#" class="font-medium underline text-purple-600 dark:text-purple-400">Đọc thêm</a>
                        </div>
                      </div>
                  </div>
                </div>
              </section>
        </div>
    </div>
@endsection
