<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="mb-2">Articles</h1>
            <p class="text-secondary mb-4">Search by title, then open an article for the full text.</p>

            <div class="mb-4">
                <label for="article-search" class="form-label">Search</label>
                <input id="article-search" type="search" class="form-control" placeholder="Filter by title" wire:model.live="search">
            </div>

            <div class="list-group">
                @forelse ($this->articles() as $article)
                    <a class="list-group-item list-group-item-action py-3" href="{{ route('articles.show', $article) }}" wire:key="article-{{ $article->id }}">
                        <div class="d-flex justify-content-between gap-3 mb-1">
                            <span class="badge text-bg-secondary">{{ $article->category?->name ?? 'Uncategorized' }}</span>
                            <time class="text-secondary small">{{ $article->published_at?->toFormattedDateString() ?? 'Unpublished' }}</time>
                        </div>
                        <h2 class="h5 mb-1">{{ $article->title }}</h2>
                        <p class="mb-0 text-secondary">{{ $article->summary }}</p>
                    </a>
                @empty
                    <p class="text-secondary mb-0">No articles match that title.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
