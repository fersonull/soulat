<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{

    public $title;
    public $content;
    public $image;
    
    public function render()
    {
       $posts = Post::with('user')->latest()->get();
        
        return view('livewire.posts', ['posts' => $posts]);
    }

    protected $listeners = ['postCreated' => '$refresh'];
}
