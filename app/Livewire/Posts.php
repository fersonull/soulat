<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{

    public $title;
    public $content;
    public $image;
    public $posts = [];
    
    protected $listeners = ['postCreated' => '$refresh'];

    public function render()
    {
        $this->posts = Post::with('comments.user')->latest()->get();
        
        return view('livewire.posts', ['posts' => $this->posts]);
    }


    // public function loadPosts()
    // {
    //     sleep(2);
    //     $this->posts = Post::with('user')->latest()->get();
    // }

}
