<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ViewPost extends Component
{

    public function render($postId)
    {
        $post = Post::with('user')->find($postId);

        return view('livewire.view-post', ['post' => $post]);
    }
}
