<div>
    {{--
        <h2>
        {{ $title}}  
        </h2>
        <p>
            {{ $content}}
        </p>
        <h3>Danh sách bài viết</h3>
        @foreach ($posts as $item)
            <h5 wire:key={{$item['id']}}>{{ $item['title'] }}</h5>
        @endforeach
        <livewire:posts.button />
    --}}
    @if (session('msg'))
        {{ session('msg') }}
    @endif
    <h2>Cập nhật bài viết id: {{ $id }}</h2>
    <form action="" wire:submit="handleSubmit">
        <input type="text" name="name" placeholder="Tên" wire:model="name" value="{{ $post->name}}">
        <button type="submit">Thêm bài viết</button>
    </form>
</div>

