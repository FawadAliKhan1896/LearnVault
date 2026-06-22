<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnVault - Knowledge Management Platform</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#fff;
            color:#000;
            font-family: Inter, sans-serif;
        }

        .navbar{
            background:#fff;
            border-bottom:1px solid #e5e5e5;
        }

        .hero{
            padding:120px 0;
        }

        .hero h1{
            font-size:4rem;
            font-weight:700;
            line-height:1.1;
        }

        .hero p{
            color:#666;
            font-size:1.1rem;
            max-width:600px;
        }

        .btn-dark-custom{
            background:#000;
            color:#fff;
            border:1px solid #000;
            padding:12px 28px;
        }

        .btn-dark-custom:hover{
            background:#fff;
            color:#000;
        }

        .btn-outline-custom{
            border:1px solid #000;
            color:#000;
            padding:12px 28px;
        }

        .section{
            padding:100px 0;
        }

        .feature-card{
            border:1px solid #e5e5e5;
            border-radius:20px;
            padding:40px;
            height:100%;
            transition:.3s;
        }

        .feature-card:hover{
            transform:translateY(-5px);
            border-color:#000;
        }

        .stats{
            background:#000;
            color:#fff;
            border-radius:30px;
            padding:70px;
        }

        .stat-number{
            font-size:3rem;
            font-weight:700;
        }

        .notes-card{
            border:1px solid #e5e5e5;
            border-radius:15px;
            padding:25px;
            height:100%;
        }

        .cta{
            background:#f8f8f8;
            border-radius:30px;
            padding:80px 50px;
        }

        footer{
            background:#000;
            color:#fff;
            padding:80px 0;
        }

        footer a{
            color:#aaa;
            text-decoration:none;
        }

        footer a:hover{
            color:#fff;
        }

        @media(max-width:768px){
            .hero h1{
                font-size:2.5rem;
            }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="#">
            LearnVault
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Recent Notes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>

            @if (Route::has('login'))
                <div class="d-flex gap-2">

                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="btn btn-dark">
                            Dashboard
                        </a>
                    @else

                        <a href="{{ route('login') }}"
                           class="btn btn-outline-dark">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="btn btn-dark">
                                Register
                            </a>
                        @endif

                    @endauth

                </div>
            @endif

        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">
                <h1>
                    Organize Everything You Learn
                </h1>

                <p class="mt-4">
                    Create, organize, search, and manage learning notes,
                    tutorials, resources, and bookmarks in one powerful platform.
                </p>

                <div class="mt-4 d-flex gap-3">
                    <a href="#" class="btn btn-dark-custom">
                        Explore Notes
                    </a>

                    <a href="#" class="btn btn-outline-custom">
                        Learn More
                    </a>
                </div>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://placehold.co/600x450/ffffff/000000?text=LearnVault"
                     class="img-fluid">
            </div>

        </div>

    </div>
</section>

<!-- FEATURES -->
<section class="section">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Everything in One Place</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="feature-card">
                    <h4>Create Notes</h4>
                    <p>
                        Build your personal knowledge base with rich text notes.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <h4>Save Resources</h4>
                    <p>
                        Organize articles, tutorials and useful references.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <h4>Powerful Search</h4>
                    <p>
                        Instantly find any note, bookmark or learning resource.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- RECENT NOTES -->
<section class="section bg-light">
    <div class="container">

        <div class="d-flex justify-content-between mb-5">
            <h2 class="fw-bold">Recent Notes</h2>
            <a href="#" class="btn btn-outline-dark">
                View All
            </a>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="notes-card">
                    <h5>Mastering React Hooks</h5>
                    <p class="text-muted">
                        Learn advanced React hooks patterns.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="notes-card">
                    <h5>Laravel Authentication</h5>
                    <p class="text-muted">
                        Complete guide to Laravel auth system.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="notes-card">
                    <h5>Docker Basics</h5>
                    <p class="text-muted">
                        Containerization explained simply.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- STATS -->
<section class="section">
    <div class="container">

        <div class="stats">

            <div class="row text-center">

                <div class="col-md-3">
                    <div class="stat-number">10K+</div>
                    <p>Resources</p>
                </div>

                <div class="col-md-3">
                    <div class="stat-number">1500+</div>
                    <p>Public Notes</p>
                </div>

                <div class="col-md-3">
                    <div class="stat-number">100+</div>
                    <p>Categories</p>
                </div>

                <div class="col-md-3">
                    <div class="stat-number">50K+</div>
                    <p>Bookmarks</p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container">

        <div class="cta text-center">

            <h2 class="fw-bold">
                Start Building Your Knowledge Library
            </h2>

            <p class="text-muted mt-3">
                Join LearnVault and organize everything you learn.
            </p>

            <a href="{{ route('register') }}"
               class="btn btn-dark btn-lg mt-3">
                Get Started Free
            </a>

        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>

    <div class="container">

        <div class="row">

            <div class="col-lg-4">
                <h3>LearnVault</h3>
                <p class="text-secondary">
                    Organize notes, tutorials, resources and bookmarks.
                </p>
            </div>

            <div class="col-lg-2">
                <h6>Pages</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Notes</a></li>
                </ul>
            </div>

            <div class="col-lg-2">
                <h6>Resources</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Tutorials</a></li>
                    <li><a href="#">Bookmarks</a></li>
                </ul>
            </div>

            <div class="col-lg-2">
                <h6>Support</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>

        </div>

        <hr class="border-secondary mt-5">

        <p class="text-center text-secondary mb-0">
            © {{ date('Y') }} LearnVault. All Rights Reserved.
        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
