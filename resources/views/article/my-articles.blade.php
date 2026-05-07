<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bold mb-3">I Miei Articoli</h1>
                    <p class="lead text-muted">Gestisci tutti i tuoi annunci pubblicati</p>
                </div>

                @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($articles->count() > 0)
                    <div class="row g-4 justify-content-center">
                        @foreach($articles as $article)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $article->title }}</h5>
                                        <p class="card-text text-truncate">{{ $article->description }}</p>
                                        <p class="card-text"><small class="text-muted">Categoria: {{ $article->category->name }}</small></p>
                                        <p class="card-text"><strong class="text-primary fs-5">€{{ number_format($article->price, 2, ',', '.') }}</strong></p>
                                        <p class="card-text"><small class="text-muted">Creato il: {{ $article->created_at->format('d/m/Y H:i') }}</small></p>
                                    </div>
                                    <div class="card-footer bg-transparent border-top text-start">
                                        <a href="{{ route('articles.show', $article) }}" class="btn btn-dark">
                                            <i class="fas fa-eye me-1"></i>Vedi annuncio
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row mt-5">
                        <div class="col-12 d-flex justify-content-center">
                            {{ $articles->links() }}
                        </div>
                    </div>
                @else
                    <div class="text-center py-5">
                        <div class="mb-4">
                            <i class="fas fa-plus-circle text-muted" style="font-size: 4rem;"></i>
                        </div>
                        <h4 class="text-muted">Non hai ancora pubblicato annunci</h4>
                        <p class="text-muted">Inizia a vendere i tuoi prodotti creando il tuo primo annuncio.</p>
                        <a href="{{ route('create.article') }}" class="btn btn-dark mt-3">
                            <i class="fas fa-plus-circle me-2"></i>Crea il tuo primo annuncio
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
