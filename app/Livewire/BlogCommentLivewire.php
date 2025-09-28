<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class BlogCommentLivewire extends Component
{
    use WithPagination;

    public Blog $blog;

    public string $name;

    public string $email;

    public string $body;

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:120',
            'email' => 'required|email:filter|max:191',
            'body' => 'required|string|min:5|max:2000',
        ];
    }

    public function submitComment()
    {
        $this->validate();

        $this->blog->comments()->create([
            'name' => $this->name,
            'email' => $this->email,
            'body' => $this->body,
            'is_approved' => false,
        ]);

        $this->reset(['name', 'email', 'body']);
        session()->flash('success', 'Your comment has been submitted and is awaiting approval.');
        $this->dispatch('$refresh');
    }

    #[Computed()]
    public function comments()
    {
        return $this->blog?->comments()->approved()->latest()->paginate(5);
    }

    public function render()
    {
        return view('livewire.blog-comment-livewire');
    }
}
