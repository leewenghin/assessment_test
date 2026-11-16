<?php

use App\Models\Article;
use Livewire\Component;

new class extends Component
{
    public string $search = '';

    public function articles()
    {
        return Article::query()
            ->with('category')
            ->when($this->search !== '', function ($query) {
                $query->where('title', 'like', '%'.$this->search.'%');
            })
            ->latest('published_at')
            ->get();
    }
};
