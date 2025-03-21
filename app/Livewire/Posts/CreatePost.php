<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = null;
    public $posts = [];
    public $name = null;
    public $result = null;
    public function mount($title = null)
    {
        $this->title = $title;
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
    }
    public function handleSubmit()
    {
        $this->result = $this->name;
        return redirect()->to('/')->with('msg', 'Thêm thành công');
    }
    public function render()
    {
        
        $content = 'Xin chào bạn nhỏ';
        return view('livewire.posts.create-post')->with(compact('content'));
    }
}
