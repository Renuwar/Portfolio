<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $biodata->nama ?? 'My Portfolio CV' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212; /* Dark background */
            color: #fff;
        }

        .navbar {
            background-color: #000; /* Black navbar */
            box-shadow: 0 4px 6px -6px #ffcc00; /* subtle yellow shadow */
        }

        .navbar .nav-link {
            color: #ffcc00 !important; /* yellow links */
            font-weight: 500;
        }

        .navbar .nav-link:hover {
            color: #ff4444 !important; /* red hover */
        }

        .hero {
            background: linear-gradient(135deg, #ffcc00, #ff4444);
            color: #000;
            padding: 120px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .section-title {
            margin: 50px 0 20px;
            text-align: center;
            font-weight: bold;
            color: #ffcc00; /* yellow section titles */
        }

        .card {
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: #1e1e1e; /* dark card */
            border: 2px solid #ffcc00; /* yellow border */
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255,204,0,0.4); /* yellow glow */
        }

        footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #000; /* black footer */
            color: #ffcc00; /* yellow text */
            text-align: center;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-warning" href="{{ route('home') }}">My Portfolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/pendidikan/1">Education</a></li>
        <li class="nav-item"><a class="nav-link" href="/pengalaman/1">Experience</a></li>
        <li class="nav-item"><a class="nav-link" href="/keahlian/1">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="/portofolio/1">Portfolio (WIP)</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container text-center">
        <!-- Round Profile Picture -->
        <img src="{{ asset('portfolio.jpg') }}"
            alt="Profile Photo"
            class="profile-photo animated-fade-up mb-4">

        <h1>{{ $biodata->nama ?? 'Your Name' }}</h1>
        <p>{{ $biodata->email ?? 'email@example.com' }} | {{ $biodata->telepon ?? '08123456789' }}</p>
        <p>{{ $biodata->alamat ?? 'Your Address' }}</p>
    </div>
</section>

<!-- Main Content -->
<div class="container my-5">
    @yield('content')
</div>

<!-- Footer -->
<footer>
    &copy; {{ date('Y') }} {{ $biodata->nama ?? 'Your Name' }}. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
