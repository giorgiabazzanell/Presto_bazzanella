<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-6">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bold mb-3">Pubblica un articolo</h1>
                    <p class="lead text-muted">Compila il form per creare il tuo annuncio</p>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <livewire:create-article-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
