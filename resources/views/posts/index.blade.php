@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Danh sách bài viết</h1>
    
    <div class="text-right mb-3">
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Tạo bài viết
        </a>
    </div>

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('posts.show', $post) }}" class="text-dark">
                                {{ $post->title }}
                            </a>
                        </h5>
                        <p class="text-muted small">Đăng vào: {{ $post->created_at->format('d/m/Y H:i') }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Sửa
                            </a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Xóa
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
