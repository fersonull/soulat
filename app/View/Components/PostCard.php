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
    public $userId;
    public $title;
    public $author;
    public $date;
    public $body;
    public $image;

    public function __construct($title, $userId, $author, $date, $body, $image = '')
    {
        $this->title = $title;
        $this->author = $author;
        $this->userId = $userId;
        $this->date = $date;
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
