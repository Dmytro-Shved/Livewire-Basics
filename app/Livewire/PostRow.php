<?php

namespace App\Livewire;

use Livewire\Component;

class PostRow extends Component
{
    public $post;

    public function mount($post)
    {
        $this->post = $post;
    }

    public function archive()
    {
        $this->post->archive();
    }
//    We can comment this code because we don't need it actuaally
//    public function render()
//    {
//        return view('livewire.post-row');
//    }
}
