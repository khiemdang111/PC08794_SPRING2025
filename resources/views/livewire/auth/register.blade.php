@extends('components.layouts.auth')
@section('content')
    <div>
        <div class="w-screen min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-800 px-4 sm:px-6 lg:px-8">
            <div class=" bg-white rounded-xl shadow-2xl p-8 max-w-md w-full animate-fade-in">
                <h2 class="text-2xl font-bold text-center text-indigo-800 mb-8">Tạo tài khoản</h2>
                <form id="registrationForm" class="space-y-6" novalidate>
                    <div class="grid gird-cols-2 gap-4">
                        <div>
                            <label for="username" class="block text-indigo-900 font-semibold mb-2">Username</label>
                            <input type="text" id="username"
                                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-800 transition-all duration-300"
                                placeholder="Nhập username" required>
                            <p class="text-red-500 text-sm mt-2 hidden" id="usernameError">Nhập username</p>
                        </div>

                        <div>
                            <label for="email" class="block text-indigo-900 font-semibold mb-2">Email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-800 transition-all duration-300"
                                placeholder="Nhập email" required>
                            <p class="text-red-500 text-sm mt-2 hidden" id="emailError">Vui lòng nhập email.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="block text-indigo-900 font-semibold mb-2">Mật khẩu</label>
                            <input type="password" id="password"
                                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-800 transition-all duration-300"
                                placeholder="Nhập mật khẩu" required>
                            <p class="text-red-500 text-sm mt-2 hidden" id="passwordError">Vui lòng nhập mật khẩu.</p>
                        </div>

                        <div>
                            <label for="confirm-password" class="block text-indigo-900 font-semibold mb-2">Nhập lại mật khẩu</label>
                            <input type="password" id="confirm-password"
                                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-800 transition-all duration-300"
                                placeholder="Nhập lại mật khẩu" required>
                            <p class="text-red-500 text-sm mt-2 hidden" id="confirmPasswordError">Vui lòng nhập lại mật khẩu..
                            </p>
                        </div>

                    </div>
                    <button type="submit"
                        class="w-full bg-indigo-800 text-white py-3 rounded-lg font-semibold hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-800 focus:ring-offset-2 transition-all duration-300 transform hover:scale-[1.02]">
                        Đăng kí
                    </button>
                </form>

                <p class="text-center text-gray-600 mt-6">
                    Bạn đã có tài khoản?
                    <a href="https://tailwindflex.com/@nejaa-badr/login-form-12"
                        class="text-indigo-800 font-semibold hover:text-blue-900 transition-colors duration-300">Đăng nhập</a>
                </p>
            </div>
        </div>
    </div>
@endsection
