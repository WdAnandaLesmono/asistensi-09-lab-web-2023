<nav class="navbar sticky-top" style="background-color: #00e16d">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <button class="btn category-button">Categories</button>
            <div class="input-group has-validation ms-3">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
                <div class="form-floating">
                    <input type="text" class="form-control custom-search-input" id="search" name="search" placeholder="{{ $search }}" required>
                    <label for="floatingInputGroup2">{{ $search }}</label>
                </div>
            </div>
        </div>
        <div class="buttons-container d-flex">
            <a class="btn login-button me-2" href="/login">Login</a>
            <a class="btn register-button" href="/register">Register</a>
        </div>
    </div>
</nav>
