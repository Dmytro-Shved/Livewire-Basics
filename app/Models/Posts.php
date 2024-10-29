<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable =[
        'title',
        'content',
        'archive'
    ];

    public function archive()
    {
        $this->update(['archive' => true]);
    }
}
