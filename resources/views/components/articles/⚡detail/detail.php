<?php

use App\Models\Article;
use Livewire\Component;

new class extends Component
{
    public Article $article;

    public function mount(Article $article): void
    {
        $this->article = $article->load('category');
    }
};
