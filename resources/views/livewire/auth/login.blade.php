@extends('components.layouts.auth')
@section('content')
    <div>
        <div class="w-screen min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-800 px-4 sm:px-6 lg:px-8">
            <div class="relative py-3 sm:max-w-xs sm:mx-auto">
                <div class="min-h-96 w-100 px-8 py-6 mt-4 text-left bg-white dark:bg-gray-900  rounded-xl shadow-lg">
                    <div class="flex flex-col justify-center items-center h-full select-none">
                        <div class="flex flex-col items-center justify-center gap-2 mb-8">
                            <h1 class="m-0 text-[26px] font-semibold dark:text-white">Đăng nhập</h1>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <label class="font-semibold text-xs text-gray-400 ">Username</label>
                            <input class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none dark:border-gray-500 dark:bg-gray-900" placeholder="Username" />
        
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <label class="font-semibold text-xs text-gray-400 ">Password</label>
                        <input type="password" class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none dark:border-gray-500 dark:bg-gray-900" placeholder="••••••••" />
        
                    </div>
                    <div className="mt-5">
                        <button class="py-1 px-8 bg-blue-500 hover:bg-blue-800 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer select-none">Đăng nhập</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
