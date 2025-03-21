<ul>
    @foreach ($todoList as $item)
        <li wire:key={{ $item['id'] }}>
            <input type="checkbox">
            <span>{{ $item['name'] }}</span>
            <button wire:confirm="Bạn có chắc chắn muốn xóa?" wire:click="handleDelete('{{ $item['id'] }}')">&times;</button>
        </li>
    @endforeach
</ul>
