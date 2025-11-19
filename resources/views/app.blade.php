<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">My CV</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/pendidikan/1">Education</a></li>
        <li class="nav-item"><a class="nav-link" href="/pengalaman/1">Experience</a></li>
        <li class="nav-item"><a class="nav-link" href="/keahlian/1">Skills</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
