<div class="h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold text-center mb-4">Quên mật khẩu?</h2>

        @if (session('success'))
            <div class="p-3 mb-4 text-green-600 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit="sendResetLink">
            <div>
                <label class="block font-medium mb-1">Email</label>
                <input type="email" wire:model="email" class="w-full border p-3 rounded-lg">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold p-3 rounded-lg transition">
                Gửi liên kết đặt lại mật khẩu
            </button>
        </form>
    </div>
</div>
