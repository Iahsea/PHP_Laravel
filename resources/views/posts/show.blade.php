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

                <!-- Nút Like -->
                <div class="text-center mt-3">
                    <button class="btn btn-outline-primary btn-like" data-post-id="{{ $post->id }}">
                        {{ $post->isLikedByUser() ? 'Unlike' : 'Like' }}
                    </button>
                    <span class="ml-2 like-count" data-post-id="{{ $post->id }}">
                        {{ $post->likes->count() }} Likes
                    </span>
                </div>

                <!-- Phần comment -->

                <div class="comments-section">
                    <h4>Bình luận</h4>
                    <ul id="comment-list">
                        @foreach($post->comments as $comment)
                            <li><strong>{{ $comment->user->name }}:</strong> {{ $comment->content }}</li>
                        @endforeach
                    </ul>
                
                    @auth
                        <textarea id="comment-content" class="form-control" placeholder="Viết bình luận..."></textarea>
                        <button id="submit-comment" class="btn btn-primary mt-2" data-post-id="{{ $post->id }}">Gửi</button>
                    @endauth
                </div>
                


                <!-- Hiển thị thời gian đăng bài -->
                <p class="text-muted"><i class="far fa-calendar-alt"></i> Đăng ngày:
                    {{ $post->created_at->format('d/m/Y') }}</p>

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
