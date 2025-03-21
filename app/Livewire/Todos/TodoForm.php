<?php

namespace App\Livewire\Todos;

use Livewire\Component;

class TodoForm extends Component
{
    public $name = null;
    public function handleAdd()
    {
        if ($this->name) {
            $this->dispatch('create_todo', $this->name);
            session()->flash('msg', 'Thêm thành công');
            $this->reset();
        }else{
            session()->flash('msg', 'Tên todo không được để trống');
        }
    }
    public function render()
    {
        return view('livewire.todos.todo-form');
    }
}
