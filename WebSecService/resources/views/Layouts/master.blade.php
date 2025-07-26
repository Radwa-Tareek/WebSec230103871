<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel Project')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="/">WebSec Project</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse show" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/minitest">MiniTest</a></li>
                <li class="nav-item"><a class="nav-link" href="/transcript">Transcript</a></li>
                <li class="nav-item"><a class="nav-link" href="/numbers">Numbers</a></li>
                <li class="nav-item"><a class="nav-link" href="/form">Form</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
