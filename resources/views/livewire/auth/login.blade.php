<div>
    <div class="w-screen min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-800 px-4 sm:px-6 lg:px-8">
        <div class="relative py-3 sm:max-w-xs sm:mx-auto">
            <form action="" wire:submit="handleLogin">
                <div class="min-h-96 w-100 px-8 py-6 mt-4 text-left bg-white dark:bg-gray-900  rounded-xl shadow-lg">
                    <div class="flex flex-col justify-center items-center h-full select-none">
                        <div class="flex flex-col items-center justify-center gap-2 mb-8">
                            <h1 class="m-0 text-[26px] font-semibold dark:text-white">Đăng nhập</h1>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <label class="font-semibold text-xs text-gray-400 ">Email</label>
                            <input name="email" wire:model="email"
                                class="border rounded-lg px-3 py-2 mb-5 text-sm w-full text-white outline-none dark:border-gray-500 dark:bg-gray-900"
                                placeholder="Email" />

                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <label class="font-semibold text-xs text-gray-400 ">Password</label>
                        <input type="password" name="password" wire:model="password"
                            class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none text-white dark:border-gray-500 dark:bg-gray-900"
                            placeholder="••••••••" />
                        @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div className="mt-5">
                        <button
                            class="py-1 px-8 bg-blue-500 hover:bg-blue-800 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer select-none">Đăng
                            nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
