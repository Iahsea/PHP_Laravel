@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3><i class="fas fa-edit"></i> Chỉnh sửa bài viết</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Tiêu đề -->
                        <div class="form-group">
                            <label for="title"><i class="fas fa-heading"></i> Tiêu đề:</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" required>
                        </div>

                        <!-- Nội dung -->
                        <div class="form-group">
                            <label for="content"><i class="fas fa-align-left"></i> Nội dung:</label>
                            <textarea id="content" name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
                        </div>

                        <!-- Nút Cập nhật -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-4">
                                <i class="fas fa-save"></i> Cập nhật
                            </button>
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary px-4 ml-2">
                                <i class="fas fa-arrow-left"></i> Quay lại
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
