<?php

namespace App\Livewire;


use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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
        'image' => 'required|image|mimes:jpg,jpeg,png',
    ];

    public function post()
    {
        $this->validate($this->rules, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'image.image' => 'invalid format',
        ]);

        $imagePath = $this->image->store('images', 'public');

        Post::create([
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'body' => $this->content,
            'images' => $imagePath,
        ]);
        
        $this->reset(['title', 'content', 'image']);
        return $this->dispatch('postCreated');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
