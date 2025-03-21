<?php

namespace App\Livewire\Todos;

use Livewire\Component;

class TodoList extends Component
{
    public $todoList = [];
    public function mount($todoList = [])
    {
        $this->todoList = $todoList;
    }
    public function handleDelete($id)
    {
        $this->dispatch('delete-todo', $id);
        session()->flash('msg', 'Xóa thành công');
    }
    public function render()
    {
        return view('livewire.todos.todo-list');
    }
}
