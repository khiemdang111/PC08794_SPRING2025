<div>

    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1>Todo App</h1>
    <livewire:todos.todo-list :todoList="$todoList" key="{{ count($todoList) }}" />
    <livewire:todos.todo-form />
    @if ($msg)
        <p>{{ $msg }}</p>
    @endif
</div>
