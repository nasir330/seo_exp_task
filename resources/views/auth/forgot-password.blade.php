<!-- include theame header -->
<x-header />

<body>
    <main class="section-forgot-password">
        <section class="section-forgot-password--logo">
            <a href="index.html">
                <img src="assets/images/logo.png" alt="logo" class="img-fluid" />
            </a>
        </section>

        <section class="section-forgot-password--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">Forgot Password</div>
                            <div class="card-body">
                            <form method="POST" action="{{ route('password.email') }}">
        @csrf
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control u-box-shadow-1" name="email" />
                                    </div>
                                    <div class="my-5">
                                        <button class="btn btn-green">Request Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   
<!-- include theme footer -->
<x-footer />