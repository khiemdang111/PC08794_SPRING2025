@extends('components.layouts.master')
@section('content')
    <div class="py-3">
        <div class="py-10">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                            <img class="w-full h-full object-cover" src="{{ asset('assets/images/' . $data->thumbnail) }}"
                                alt="Product Image">
                        </div>
                        <div class="flex -mx-2 mb-4">
                            <div class="w-1/2 px-2">
                                <button
                                    class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Thêm
                                    giỏ hàng</button>
                            </div>
                            <div class="w-1/2 px-2">
                                <button
                                    class="w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Mua
                                    ngay</button>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex-1 px-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $data->title }}</h2>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                            {{ $data->description }}
                        </p>
                        <div class="flex mb-4">
                            <div class="mr-4">
                                <span class="font-bold text-gray-700 dark:text-gray-300">Giá giảm: </span>
                                <span class="text-gray-600 dark:text-gray-300">{{ number_format($data->price) }}</span>
                            </div>
                            <div>
                                <span class="font-bold text-gray-700 dark:text-gray-300">Giá:</span>
                                <span class="text-gray-600 dark:text-gray-300">{{ number_format($data->sale_price) }}</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300">Select Color:</span>
                            <div class="flex items-center mt-2">
                                <button class="w-6 h-6 rounded-full bg-gray-800 dark:bg-gray-200 mr-2"></button>
                                <button class="w-6 h-6 rounded-full bg-red-500 dark:bg-red-700 mr-2"></button>
                                <button class="w-6 h-6 rounded-full bg-blue-500 dark:bg-blue-700 mr-2"></button>
                                <button class="w-6 h-6 rounded-full bg-yellow-500 dark:bg-yellow-700 mr-2"></button>
                            </div>
                        </div>
                        <div class="mb-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300">Select Size:</span>
                            <div class="flex items-center mt-2">
                                <button
                                    class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">S</button>
                                <button
                                    class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">M</button>
                                <button
                                    class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">L</button>
                                <button
                                    class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">XL</button>
                                <button
                                    class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">XXL</button>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700 dark:text-gray-300">Product Description:</span>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                                {{ $data->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto">
            @if ($data->comments)
                @foreach ($data->comments as $comment)
                    <div class="border rounded-md p-3 my-3">
                        <div class="flex gap-3 items-center">

                            <img src="https://avatars.githubusercontent.com/u/22263436?v=4"
                                class="object-cover w-8 h-8 rounded-full 
                    border-2 border-emerald-400  shadow-emerald-400
                    ">
                            <h3 class="font-bold">
                                {{ $comment->name }}</h3>
                            <span>{{ $comment->created_at->format('d/m/Y H:i') }}</span>
                        </div>
                        <p class="text-gray-600 mt-2">
                            {{ $comment->comment }}
                        </p>
                    </div>
                @endforeach
            @else
                <h3 class="text-red-500">Chưa có bình luận</h3>
            @endif
            <div class="border border-gray-300 p-4 rounded-lg max-w-xl mt-10">
                <h2 class="text-lg font-medium mb-2">Bình luận</h2>
                <form action="{{ route('commentproduct', $data->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2" for="name">
                            Tên:
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-500"
                            id="name" name="name" type="text" placeholder="Tên của bạn">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2" for="comment">
                            Nội dung bình luận
                        </label>
                        <textarea rows="4" name="comment"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-500"
                            id="comment" placeholder="Viết tại đây"></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
