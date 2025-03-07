<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>

    <!-- Bootstrap 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/YOUR-FONT-AWESOME-CODE.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Đảm bảo chiều cao ít nhất bằng màn hình */
        }

        .content {
            flex: 1; /* Mở rộng nội dung để đẩy footer xuống */
        }

        footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">My Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/posts">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 My Blog. All rights reserved.</p>
    </footer>
</div>

<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
