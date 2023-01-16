<!-- include theame header -->
<x-header />

<body>
    <header>
        <!-- nav menu start -->
        <nav class="navbar navbar-expand-lg navbar-blue">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('dashboard')}}">
                    <img src="{{asset('assets/images/logo.png')}}" alt="logo" class="logo" />
                </a>
                <h4>
                    <a href="{{ route('dashboard') }}" class="text-white">Dashboard</a>
                </h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Article Writing</a></li>
                                <li><a class="dropdown-item" href="#">Blog Posts</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Copywriting</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Ghostwriting</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Local SEO City Pages</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Press Releases</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Product Descriptions</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">SEO Content</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Subject Matter Experts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Website Content</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">White Papers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Managed Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <!-- user action start -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ 'Hello' }}&nbsp;{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Logout</button>
                                    </form>

                                </li>

                            </ul>
                        </li>
                        <!-- user action start -->

                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav menu end -->
    </header>
    <main class="section-register">
        <section class="section-register--left">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Welcome {{ Auth::user()->name }}</h1>
                    <h2>This dashbaord is only accessable for authenticate user</h2>
                </div>
            </div>
        </section>
        <section style="margin:auto;" class="section-register--right bg-transparent">
            <h1 class="heading">
                {{ 'Hello' }}&nbsp;{{ Auth::user()->name }}
            </h1>
            <h2 class="heading">You have successfully created your account</h2>
            <p class="heading--sub mb-4 d-inline">
                High-quality content written on demand by the
                <span class="green"> web's best writers. </span>
            </p>
        </section>
    </main>
    <footer></footer>

    <!-- include theme footer -->
    <x-footer />