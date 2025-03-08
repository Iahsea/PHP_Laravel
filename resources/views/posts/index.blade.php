@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Danh sách bài viết</h1>

    <!-- Hiển thị thông báo thành công -->
    @if(session('success'))
    <div id="alert-box" class="alert alert-success alert-dismissible fade show shadow-lg" role="alert">
        <strong>Thành công!</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="hideAlert()">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <script>
        // Ẩn thông báo sau 5 giây
        setTimeout(() => {
            document.getElementById('alert-box')?.classList.add('fade-out');
        }, 5000);

        // Ẩn thông báo khi nhấn nút đóng
        function hideAlert() {
            document.getElementById('alert-box')?.classList.add('fade-out');
        }
    </script>

    <style>
        /* Làm đẹp thông báo */
        #alert-box {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease-in-out;
        }

        /* Hiệu ứng biến mất */
        .fade-out {
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.5s, transform 0.5s;
        }
    </style>
@endif



    <div class="text-right mb-3">
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Tạo bài viết
        </a>
    </div>

    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Ảnh bài viết">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            <a href="{{ route('posts.show', $post) }}" class="text-dark">
                                {{ Str::limit($post->title, 50) }}
                            </a>
                        </h5>
                        <p class="text-muted small mb-2">Đăng vào: {{ $post->created_at->format('d/m/Y H:i') }}</p>
                        <p class="card-text text-muted">{{ Str::limit($post->content, 80) }}</p>

                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Chỉnh sửa bài viết">
                                <i class="fas fa-edit"></i> Sửa
                            </a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Xóa bài viết">
                                    <i class="fas fa-trash"></i> Xóa
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Chưa có bài viết nào.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
