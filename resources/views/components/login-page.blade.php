
<x-layout>
    <div class="container">
            <div class="form_login container w-auto position-absolute top-50 start-50 translate-middle">
                    <div class="login-form__container">
                        <div class="text-center mb-5">
                            <img class="rounded-circle mb-1" src="../img/logo.png" alt="Agripacific logo" width="120" height="120">
                            <p class="h1 fs-4">IT Asset Monitoring</p>
                        </div>
                        
                            <div class="w-100">
                                <form action="{{ route('homepage') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control rounded-pill" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 form-check d-flex justify-content-between">
                                        <div>
                                            <input type="radio" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                        <p class="text-end"><a href="#">Forgot password?</a></p>
                                    </div>
                                    <button type="submit" class="btn btn-dark rounded-pill w-100">Submit</button>
                                </form>
                            </div>
                    </div>
            </div>
    </div>
</x-layout>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->