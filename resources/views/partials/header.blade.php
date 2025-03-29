<div>
    <!-- Header -->
    <header class="bg-black text-white fixed top-0 left-0 w-full z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold">K-FOOD</a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8 text-lg">
                    <a href="/" class="hover:text-gray-400 transition-all">Trang chủ</a>
                    <a href="{{ route('product.index') }}" class="hover:text-gray-400 transition-all">Sản phẩm</a>
                    <a href="#about" class="hover:text-gray-400 transition-all">Giới thiệu</a>
                    <a href="#news" class="hover:text-gray-400 transition-all">Tin tức</a>
                    <a href="#contact" class="hover:text-gray-400 transition-all">Liên hệ</a>
                </nav>

                <!-- Auth Buttons -->
                <div class="hidden md:block">
                    <livewire:components.authbuttons />
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="menu-button" class="text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-3 bg-black p-4 rounded-lg">
                <a href="/" class="block text-lg text-white hover:text-gray-400 transition-all">Trang chủ</a>
                <a href="{{ route('product.index') }}" class="block text-lg text-white hover:text-gray-400 transition-all">Sản phẩm</a>
                <a href="#about" class="block text-lg text-white hover:text-gray-400 transition-all">Giới thiệu</a>
                <a href="#news" class="block text-lg text-white hover:text-gray-400 transition-all">Tin tức</a>
                <a href="#contact" class="block text-lg text-white hover:text-gray-400 transition-all">Liên hệ</a>
            </div>
        </div>
    </header>

    <!-- Đẩy nội dung xuống để tránh bị header che -->
    <div class="pt-[72px]"></div>
</div>

<script>
    document.getElementById("menu-button").addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
</script>
