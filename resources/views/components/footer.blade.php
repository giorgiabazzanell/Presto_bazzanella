<!-- Footer -->
<footer class="bg-dark text-light mt-5">
    <div class="container py-5">
        <div class="row">
            <!-- Colonna principale -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="fw-bold mb-3">
                    <i class="fas fa-bolt text-warning me-2"></i>Presto.it
                </h5>
                <p class="mb-3">
                    La piattaforma più veloce per comprare e vendere online.
                    Trova ciò che cerchi o vendi i tuoi prodotti in pochi clic.
                </p>
                <div class="d-flex">
                    <a href="#" class="text-light me-3 fs-4" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-light me-3 fs-4" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-light me-3 fs-4" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-light fs-4" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Link utili -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="fw-bold mb-3">Piattaforma</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ route('articles.index') }}" class="text-light text-decoration-none">
                            <i class="fas fa-search me-2"></i>Sfoglia annunci
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('create.article') }}" class="text-light text-decoration-none">
                            <i class="fas fa-plus-circle me-2"></i>Pubblica annuncio
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-light text-decoration-none">
                            <i class="fas fa-star me-2"></i>Annunci premium
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Supporto -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="fw-bold mb-3">Supporto</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#" class="text-light text-decoration-none">
                            <i class="fas fa-question-circle me-2"></i>Centro assistenza
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-light text-decoration-none">
                            <i class="fas fa-shield-alt me-2"></i>Sicurezza
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-light text-decoration-none">
                            <i class="fas fa-file-contract me-2"></i>Termini di servizio
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-light text-decoration-none">
                            <i class="fas fa-user-shield me-2"></i>Privacy
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contatti -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="fw-bold mb-3">Contatti</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:info@presto.it" class="text-light text-decoration-none">info@presto.it</a>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone me-2"></i>
                        <a href="tel:+390123456789" class="text-light text-decoration-none">+39 012 345 6789</a>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-clock me-2"></i>
                        Lun-Ven: 9:00-18:00
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="fw-bold mb-3">Newsletter</h6>
                <p class="small mb-3">Ricevi le ultime novità e offerte speciali</p>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                    <button class="btn btn-warning" type="button">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <!-- Copyright -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0 small">
                    &copy; 2026 Presto.it - Tutti i diritti riservati
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0 small">
                    Made with <i class="fas fa-heart text-danger"></i> in Italy
                </p>
            </div>
        </div>
    </div>
</footer>