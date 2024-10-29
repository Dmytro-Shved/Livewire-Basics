<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class ShowPosts extends Component
{
    public function delete($postId)// or Posts $post
    {
        Posts::find($postId)->delete(); // or $post->delete();
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Posts::all()
        ]);
    }
}
