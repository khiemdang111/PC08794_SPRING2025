<div>
    <h1>Danh sách bài viết</h1>
    @foreach ($posts as $item)
        <h5 wire:key={{ $item['id'] }}>{{ $item['title'] }}</h5>
    @endforeach
</div>
