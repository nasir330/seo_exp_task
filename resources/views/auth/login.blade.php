<!-- include theame header -->
<x-header />

<body>
    <main class="section-login">
        <section class="section-login--logo">
            <a href="index.html">
                <img src="assets/images/logo.png" alt="logo" class="img-fluid" />
            </a>
        </section>

        <section class="section-login--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">Sign In</div>
                            <div class="card-body">
                                <!-- Login form start -->
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control u-box-shadow-1" name="email" />
                                    </div>
                                    <div class="mt-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control u-box-shadow-1" name="password" />
                                    </div>
                                    <div class="mt-5">
                                        <button class="btn btn-green">Sign In</button>
                                    </div>
                                </form>
                                <!-- Login form end -->
                                <div class="links">
                                    <p>
                                        <a href="{{route('register')}}">Need an account?</a>
                                        <a href="{{route('password.request')}}">Forgot Password?</a>
                                    </p>
                                </div>
                                <div class="back-button">
                                    <a href="{{route('main')}}">
                                        <i class="bi bi-arrow-left-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>