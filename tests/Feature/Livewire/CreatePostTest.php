<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Posts;
use GuzzleHttp\Promise\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    /** @test */
    public function can_create_new_post()
    {
        $post = Posts::whereTitle('dadasdawde ')->first();

        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', 'Some title')
            ->set('content', 'Some content')
            ->call('create');

        $post =  Posts::whereTitle('Some title')->first();

        $this->assertNotNull($post);
        $this->assertEquals('Some title', $post->title);
        $this->assertEquals('Some content', $post->content);
    }

    public function title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('create')
            ->assertHasErrors(['content' => 'min:4']);
    }
}
