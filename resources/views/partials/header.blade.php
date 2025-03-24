<div>
    <header class="bg-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
            <div class="flex items-center justify-between">
                <!-- Logo Section -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold">K-FOOF </a>
                </div>

                <!-- Navigation Menu -->
                <nav class="hidden md:flex space-x-10 text-lg">
                    <a href="/" class="hover:text-gray-300 transition-all">Trang chủ</a>
                    <a href="{{ route('product.index') }}" class="hover:text-gray-300 transition-all">Sản phẩm</a>
                    <a href="#about" class="hover:text-gray-300 transition-all">Giới thiệu</a>
                    <a href="#about" class="hover:text-gray-300 transition-all">Tin tức</a>
                    <a href="#contact" class="hover:text-gray-300 transition-all">Liên hệ</a>
                </nav>

                <!-- Call-to-Action Button -->
                <div class="hidden md:block">
                    <a href="{{ route('login.user') }}" class="bg-yellow-500 hover:bg-yellow-400 text-black py-2 px-6 rounded-full text-lg transition-all me-3">
                        Đăng nhập
                    </a>
                    <a href="{{ route('register.user') }}" class="border border-yellow-500 text-white hover:bg-yellow-400 text-black py-2 px-6 rounded-full text-lg transition-all">
                        Đăng kí
                    </a>
                </div>

                <!-- Mobile Menu Button (for smaller screens) -->
                <div class="md:hidden flex items-center">
                    <button id="menu-button" class="text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="md:hidden mt-5 hidden space-y-4">
                <a href="#" class="block text-lg hover:text-gray-300 transition-all">Home</a>
                <a href="#services" class="block text-lg hover:text-gray-300 transition-all">Services</a>
                <a href="#about" class="block text-lg hover:text-gray-300 transition-all">About Us</a>
                <a href="#contact" class="block text-lg hover:text-gray-300 transition-all">Contact</a>
            </div>
        </div>
    </header>

</div>
