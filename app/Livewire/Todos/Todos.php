<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use Livewire\Attributes\On;

class Todos extends Component
{
    public $todoList = [];
    public $msg = null;
    public function mount()
    {
        $this->todoList = [
            [
                'id' => 1,
                'name' => 'Công việc 1',
                'completed' => false,
            ],
            [
                'id' => 2,
                'name' => 'Công việc 2',
                'completed' => false,
            ],
        ];
    }
    #[On('create_todo')]
    public function createTodo($name)
    {
        $this->todoList[] = [
            'id' => uniqid(),
            'name' => $name,
            'completed' => false,
        ];
        $this->msg = "Thêm thành công";
    }
    #[On('delete-todo')]
    public function deleteTodo($id)
    {
        $this->todoList = array_filter($this->todoList, function ($item) use ($id) {
            return $item['id']!== $id;
        });
       
    }
    public function render()
    {
        return view('livewire.todos.todos');
    }
}
