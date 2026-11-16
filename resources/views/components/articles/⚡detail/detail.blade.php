<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <a class="link-secondary" href="{{ route('articles.index') }}">Back to articles</a>

            <div class="d-flex justify-content-between align-items-center gap-3 mt-3 mb-2">
                <span class="badge text-bg-secondary">{{ $article->category?->name ?? 'Uncategorized' }}</span>
                <time class="text-secondary small">{{ $article->published_at?->toFormattedDateString() ?? 'Unpublished' }}</time>
            </div>

            <h1 class="mb-4">{{ $article->title }}</h1>

            <div class="fs-5">{!! nl2br(e($article->body)) !!}</div>
        </div>
    </div>
</div>
