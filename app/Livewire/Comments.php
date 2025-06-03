<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Comments extends Component
{

    public $postId;

    public function mount($postId)
    {
        $this->postId = $postId;

        // sleep(5);
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div class="animate-pulse relative mb-10">
            <p class="absolute text-stone-500 text-7xl font-bold top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 animate-bounce">...</p>
            <div class="rounded-lg flex-1 flex flex-col rounded-bl-none px-3 py-1 bg-stone-200 h-9 w-[50%] mb-3"></div>
            <div class="rounded-lg flex-1 flex flex-col rounded-bl-none px-3 py-1 bg-stone-200 h-12  w-full"></div>
        </div>
        HTML;
    }

    public function render()
    {
        $post = Post::with([
            'comments' => function ($q) {
                $q->latest();
            },
            'comments.user'
        ])->findOrFail($this->postId);

        return view('livewire.comments', ['post' => $post]);
    }
}
