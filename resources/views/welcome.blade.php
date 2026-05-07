<x-layout>
    <!-- Hero Section -->
    <section class="hero-section position-relative d-flex align-items-center justify-content-center text-white" style="min-height: 80vh;">
        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.3) 100%), url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); background-size: cover; background-position: center;"></div>

        <div class="container position-relative text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <h1 class="display-3 fw-bold mb-4">Compra e Vendi su Presto.it</h1>
                    <p class="lead fs-4 mb-5">La piattaforma più veloce per pubblicare annunci e trovare ciò che cerchi. Registrati gratuitamente e inizia subito!</p>

                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        @auth
                            <a href="{{ route('create.article') }}" class="btn btn-dark btn-lg px-5 py-3">
                                <i class="fas fa-plus-circle me-2"></i>Pubblica un Annuncio
                            </a>
                            <a href="{{ route('articles.index') }}" class="btn btn-dark btn-lg px-5 py-3">
                                <i class="fas fa-search me-2"></i>Sfoglia Annunci
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-dark btn-lg px-5 py-3">
                                <i class="fas fa-user-plus me-2"></i>Registrati Gratis
                            </a>
                            <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-5 py-3">
                                <i class="fas fa-sign-in-alt me-2"></i>Accedi
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="display-5 fw-bold">Perché scegliere Presto.it?</h2>
                    <p class="lead text-muted">La tua piattaforma di annunci affidabile e veloce</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-rocket text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Veloce</h5>
                            <p class="card-text text-muted">Pubblica il tuo annuncio in pochi secondi e raggiungi migliaia di potenziali acquirenti.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-shield-alt text-success" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Sicuro</h5>
                            <p class="card-text text-muted">Piattaforma sicura con verifica degli utenti e transazioni protette.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-tags text-warning" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Gratuito</h5>
                            <p class="card-text text-muted">Pubblicare annunci è completamente gratuito. Paga solo per le funzionalità premium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>