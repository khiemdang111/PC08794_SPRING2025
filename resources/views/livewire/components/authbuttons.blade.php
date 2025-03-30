<div class="hidden md:block">
    @if (!$isLoggedIn)
        <a href="{{ route('login.user') }}"
            class="bg-yellow-500 hover:bg-yellow-400 text-black py-2 px-6 rounded-full text-lg transition-all me-3">
            Đăng nhập
        </a>
        <a href="{{ route('register.user') }}"
            class="border border-yellow-500 text-white hover:bg-yellow-400 text-black py-2 px-6 rounded-full text-lg transition-all">
            Đăng kí
        </a>
    @else
        <div class="dropdown relative">
            <label tabindex="0" class="btn focus:btn-outline focus:text-orange-500 normal-case text-orange-500 ml-2">
                <span>Chào, {{ $user->name }}</span>  {{-- Hiển thị tên user --}}
                <svg width="12px" height="12px" class="h-2 w-2 fill-current opacity-60 inline-block"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
                    <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
                </svg>
            </label>

            <div tabindex="0" class="dropdown-content z-[1] menu shadow bg-base-300 rounded-box">
                <div class="rounded-lg bg-base-300 drop-shadow-xl divide-y divide-neutral">
                    <div aria-label="navigation">
                        <nav class="grid gap-1">
                            <a href="/profile/{{ $user->id }}"
                                class="flex items-center leading-6 space-x-1 w-full text-lg text-gray-600 focus:outline-none hover:bg-gray-100 rounded-md">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 7.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM5.25 18a6.75 6.75 0 0113.5 0" />
                                </svg>
                                <span>Thông tin</span>
                            </a>
                        </nav>
                    </div>
                    <div class="pt-2">
                        <a href="{{ route('logout.user') }}"
                            class="flex items-center space-x-1 w-full leading-6 text-lg text-gray-600 focus:outline-none hover:bg-gray-100 rounded-md">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                </path>
                                <path d="M9 12h12l-3 -3"></path>
                                <path d="M18 15l3 -3"></path>
                            </svg>
                            <span>Đăng xuất</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
