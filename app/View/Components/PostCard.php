<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $author;
    public $body;
    public $image;

    public function __construct($title, $author, $body, $image = [])
    {
        $this->title = $title;
        $this->author = $author;
        $this->body = $body;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
