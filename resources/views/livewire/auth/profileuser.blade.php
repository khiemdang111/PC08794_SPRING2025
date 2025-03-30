<div class="container">
    <section class="pt-10 my-auto dark:bg-gray-900">
        <div class="lg:w-[80%] md:w-[90%] w-[96%] mx-auto flex gap-4">
            <div
                class="lg:w-[88%] sm:w-[88%] w-full mx-auto shadow-2xl p-4 rounded-xl h-fit self-center dark:bg-gray-800/40">
                <!--  -->
                <div class="">
                    <h1 class="lg:text-3xl md:text-2xl text-xl font-serif font-extrabold mb-2 dark:text-white">
                        Thông tin
                    </h1>
                    <form wire:submit.prevent="updateUser">
                        <div class="w-full mb-4 mt-6">
                            <label for="name" class="mb-2 dark:text-gray-300">Họ và tên:</label>
                            <input type="text" id="name" wire:model="name" value="{{ $user->name }}"
                                class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    
                        <div class="w-full mb-4 lg:mt-6">
                            <label for="email" class="dark:text-gray-300">Email:</label>
                            <input type="text" id="email" wire:model="email" value="{{ $user->email }}"
                                class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    
                        <div class="w-full rounded-lg bg-blue-500 mt-4 text-white text-lg font-semibold">
                            <button type="submit" class="w-full p-4">Cập nhật</button>
                        </div>
                    
                        @if (session()->has('success'))
                            <div class="mt-2 text-green-500">{{ session('success') }}</div>
                        @endif
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
</div>
