<?php

namespace App\Livewire\Posts;
use Livewire\Attributes\Title;
use Livewire\Component;

class Posts extends Component
{
    #[Title('Danh sách bài viết')] 
    public $posts = [];

    public function render()
    {
        $this->posts = [
            [
                'id' => 1,
                'title' => 'Bài viết thứ nhất',
            ],
            [
                'id' => 2,
                'title' => 'Bài viết thứ hai',
            ],
            [
                'id' => 3,
                'title' => 'Bài viết thứ ba',
            ]

        ];
        return view('livewire.posts.posts');
    }
}
