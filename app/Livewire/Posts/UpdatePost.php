<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Http\Response;
use Livewire\Component;

class UpdatePost extends Component
{
    public $id = null;
    public $post = null;
    public function mount(Post $post)
    {
        // $this->post = Post::find($id);
        // // dd($this->post);
        // if(!$this->post){
        //     abort(404);
        // }
        $this->post = $post;
    }
        public function render()
        {
            return view('livewire.posts.update-post')
            // ->response(function(Response $response) {
            //     $response->header('X-Custom-Header', true);
            // })
            ;
            
        }
}
