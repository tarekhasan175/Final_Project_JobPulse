@extends('layout.app')

@section('content')

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <a class="navbar-brand" href="{{ route('home') }}">
                <h2>JobPulse</h2>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contract</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Create Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">As Employer</a>
                            <a class="dropdown-item" href="#">As Job Seeker</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.signin') }}">Sign In</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div>
            <img src="{{ asset('images/banner1.jpg') }}" alt="" class="img-fluid" width="100%" height="100px">
        </div>
        {{-- Top Companies --}}
        <div class="container mt-5 mb-5 text-center">
            <h1>Top Companies</h1>
            <div class="card-deck mt-5">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Explore by Categories --}}
        <div class="container mt-5 mb-5 text-center">
            <h1>Explore by Categories</h1>
            <div class="card-deck mt-5">
                <div class="card text-center mb-3" style="width: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card text-center mb-3" style="width: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card text-center mb-3" style="width: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card text-center mb-3" style="width: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="card-deck mt-5">
                <div class="card text-center mb-3" style="width: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card text-center mb-3" style="width: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card text-center mb-3" style="width: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card text-center mb-3" style="width: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-info">View More Categories ></button>
        </div>

        {{-- Job Posts --}}
        <div class="container mt-5 mb-5">
            <h1 class="text-center">Job Posts</h1>

            <div class="mt-5">
                <div class="card mt-3">
                    <div class="card-body d-flex inline-flex">
                        <div class="">
                            <img src="https://via.placeholder.com/100" alt="">
                        </div>
                        <div class="ml-5">
                            <h5 class="card-title">Job Title</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            <strong class="text-success">on-site</strong>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="card  mt-3">
                    <div class="card-body d-flex inline-flex">
                        <div class="">
                            <img src="https://via.placeholder.com/100" alt="">
                        </div>
                        <div class="ml-5">
                            <h5 class="card-title">Job Title</h5>
                            <p class="card-text">Job Description</p>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="card  mt-3">
                    <div class="card-body d-flex inline-flex">
                        <div class="">
                            <img src="https://via.placeholder.com/100" alt="">
                        </div>
                        <div class="ml-5">
                            <h5 class="card-title">Job Title</h5>
                            <p class="card-text">Job Description</p>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body d-flex inline-flex">
                        <div class="">
                            <img src="https://via.placeholder.com/100" alt="">
                        </div>
                        <div class="ml-5">
                            <h5 class="card-title">Job Title</h5>
                            <p class="card-text">Job Description</p>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="card  mt-3">
                    <div class="card-body d-flex inline-flex">
                        <div class="">
                            <img src="https://via.placeholder.com/100" alt="">
                        </div>
                        <div class="ml-5">
                            <h5 class="card-title">Job Title</h5>
                            <p class="card-text">Job Description</p>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="card  mt-3">
                    <div class="card-body d-flex inline-flex">
                        <div class="">
                            <img src="https://via.placeholder.com/100" alt="">
                        </div>
                        <div class="ml-5">
                            <h5 class="card-title">Job Title</h5>
                            <p class="card-text">Job Description</p>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3 mb-5">
            <button class="btn btn-info">View All Jobs ></button>
        </div>

        {{-- Footer --}}
        <footer class="footer mt-auto py-3 bg-info">
            <div class="container text-center text-white">
                <div class="row">
                    <div class="col text-left">
                        <h2>Quick Links</h2>
                        <p>Home</p>
                        <p>About Us</p>
                        <p>Jobs</p>
                        <p>Blog</p>
                        <p>Contact</p>
                        <p>FAQ</p>
                    </div>
                    <div class="col text-left">
                        <h2>Contact Us</h2>
                        <p>Phone: +1 123-456-7890</p>
                        <p>Email: 8HlBz@example.com</p>
                        <p>Address: 123 Main St, City, Country</p>
                        <p>Website: www.example.com</p>
                    </div>
                    <div class="col text-left">
                        <h2>Follow Us</h2>
                        <p>Facebook</p>
                        <p>Twitter</p>
                        <p>Instagram</p>
                        <p>LinkedIn</p>
                        <p>YouTube</p>
                    </div>
                    <div class="col text-left">
                        <h2>News Letter</h2>
                        <p>Subscribe to our newsletter</p>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
        
                </div>
        
            </div>
            <div class="container text-center">
                <p class="text-center text-white">© 2024 Job Pulse. All rights reserved.</p>
            </div>
        </footer>

        <!-- Bootstrap JS (optional, if you want to use Bootstrap JS features) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
@endsection
