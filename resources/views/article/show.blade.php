<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="card-title display-6 fw-bold mb-4">{{ $article->title }}</h1>

                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <p class="mb-2"><strong class="text-muted">Categoria:</strong> {{ $article->category->name }}</p>
                                <p class="mb-2"><strong class="text-muted">Autore:</strong> {{ $article->user->name }}</p>
                                <p class="mb-0"><strong class="text-muted">Pubblicato:</strong> {{ $article->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <div class="price-display">
                                    <span class="badge bg-primary fs-4 px-3 py-2">€{{ number_format($article->price, 2, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="description-section">
                            <h4 class="fw-bold mb-3">Descrizione</h4>
                            <div class="description-content">
                                <p class="lead">{{ $article->description }}</p>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{ route('articles.index') }}" class="btn btn-dark">
                                <i class="fas fa-arrow-left me-2"></i>Torna agli articoli
                            </a>
                            @auth
                                @if($article->user_id === auth()->id())
                                    <a href="#" class="btn btn-dark">
                                        <i class="fas fa-edit me-2"></i>Modifica annuncio
                                    </a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
