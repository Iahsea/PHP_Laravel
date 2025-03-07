@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-body">
            <!-- Hiển thị tiêu đề bài viết -->
            <h2 class="card-title text-center text-primary">{{ $post->title }}</h2>
            
            <!-- Ảnh minh họa (nếu có) -->

            <hr>

            <!-- Hiển thị nội dung bài viết -->
            <p class="card-text" style="font-size: 1.1rem; line-height: 1.6;">
                {{ $post->content }}
            </p>

            <!-- Hiển thị thời gian đăng bài -->
            <p class="text-muted"><i class="far fa-calendar-alt"></i> Đăng ngày: {{ $post->created_at->format('d/m/Y') }}</p>

            <!-- Nút quay lại -->
            <div class="text-center mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Quay lại danh sách
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
