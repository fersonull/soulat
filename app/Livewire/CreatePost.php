<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use App\Models\Post;
use Illuminate\Http\Client\Request;
use Livewire\Component;

class CreatePost extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $image;

    protected $rules = [
        'title' => 'required|string',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ];

    public function post()
    {
        $this->validate();

        $imagePath = $this->image ? $this->image->store('images', 'public') : null;

        Post::create([
            'title' => $this->title,
            'body' => $this->content,
            'user_id' => auth()->user()->id,
            'images' => $imagePath,
        ]);

        return $this->dispatch('postCreated');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
