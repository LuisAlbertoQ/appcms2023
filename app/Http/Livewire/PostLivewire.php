<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostLivewire extends Component
{
    use WithPagination;
    public function render()
    {
        $posts=Post::paginate(6);
        return view('livewire.post-livewire',compact('posts'));
    }

    public function show(Post $post){
        return view('livewire.post-show');
    }
}
