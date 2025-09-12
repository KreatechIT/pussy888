<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogLivewire extends Component
{
    use WithPagination;

    public $latestBlog = null;

    public function render()
    {
        // Get the latest blog post
        $this->latestBlog = Blog::active()->latest()->first();

        return view('livewire.blog-livewire', [
            'latestBlog' => $this->latestBlog,
            'blogs' => Blog::active()->paginate(3),
        ]);
    }
}
