<div class="max-w-md mx-auto p-6 bg-white shadow-md rounded">
    <h2 class="text-xl font-semibold text-center">Đặt lại mật khẩu</h2>

    @if (session('success'))
        <div class="p-3 mb-4 text-green-600 bg-green-100 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="resetPassword">
        <div>
            <label class="block">Email</label>
            <input type="email" wire:model="email" class="w-full border p-2 rounded">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block">Mật khẩu mới</label>
            <input type="password" wire:model="password" class="w-full border p-2 rounded">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block">Xác nhận mật khẩu</label>
            <input type="password" wire:model="password_confirmation" class="w-full border p-2 rounded">
        </div>

        <button type="submit" class="w-full mt-3 bg-blue-500 text-white p-2 rounded">
            Đặt lại mật khẩu
        </button>
    </form>
</div>
