<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h1 class="display-4 p-5">Accedi</h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12 col-md-6 shadow rounded p-5 bg-white">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form2Example1" name="email" class="form-control" required autofocus />
                        <label class="form-label" for="form2Example1">Indirizzo email</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form2Example2" name="password" class="form-control" required />
                        <label class="form-label" for="form2Example2">Password</label>
                    </div>

                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="form2Example31" />
                                <label class="form-check-label" for="form2Example31">Ricordami</label>
                            </div>
                        </div>

                        <div class="col text-end">
                            <a class="text-dark fw-bold text-decoration-none" href="{{ route('password.request') }}">Password dimenticata?</a>
                        </div>
                    </div>

                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-block mb-4">Accedi</button>

                    <div class="text-center">
                        <p>Non sei registrato? <a class="text-dark fw-bold text-decoration-none" href="{{ route('register') }}">Registrati</a></p>
                        <p>o accedi con:</p>
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>