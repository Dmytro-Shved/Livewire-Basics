<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Post')]
class CreatePost extends Component
{
    #[Rule('required')]
    public $title = '';

    #[Rule('required')]
    public $content = '';

    public function create()
    {
        $this->validate();

        Posts::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset('title');
        $this->reset('content');

        $this->redirect('/posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
