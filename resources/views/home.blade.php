<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog Cá Nhân</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero {
            background: url('https://source.unsplash.com/1600x600/?nature,landscape') no-repeat center center;
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }
        .post img {
            width: 100%;
            height: auto;
        }
        .sidebar .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">My Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Bài viết</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero text-center">
        <h1>Chào mừng đến với Blog của tôi!</h1>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Blog Posts -->
            <div class="col-md-8">
                <div class="post mb-4">
                    <img src="https://source.unsplash.com/800x400/?technology" alt="Post Image">
                    <h2 class="mt-2">Bài viết đầu tiên</h2>
                    <p class="text-muted">Đăng ngày 10/03/2025</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies orci at magna pharetra...</p>
                    <a href="#" class="btn btn-primary">Đọc thêm</a>
                </div>

                <div class="post mb-4">
                    <img src="https://source.unsplash.com/800x400/?coding" alt="Post Image">
                    <h2 class="mt-2">Lập trình là gì?</h2>
                    <p class="text-muted">Đăng ngày 05/03/2025</p>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae...</p>
                    <a href="#" class="btn btn-primary">Đọc thêm</a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4 sidebar">
                <div class="card">
                    <div class="card-header">Danh mục</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Công nghệ</a></li>
                        <li class="list-group-item"><a href="#">Lập trình</a></li>
                        <li class="list-group-item"><a href="#">Thiết kế</a></li>
                        <li class="list-group-item"><a href="#">Khác</a></li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">Bài viết nổi bật</div>
                    <div class="card-body">
                        <p><a href="#">Làm thế nào để trở thành lập trình viên giỏi?</a></p>
                        <p><a href="#">Top 5 công nghệ đáng chú ý năm 2025</a></p>
                        <p><a href="#">Hướng dẫn sử dụng Bootstrap 4</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-4">
        &copy; 2025 Blog Cá Nhân - Thiết kế bởi Tôi
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
