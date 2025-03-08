@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-gradient-primary text-white text-center">
                    <h3 class="mb-0"><i class="fas fa-edit"></i> Chỉnh sửa bài viết</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Tiêu đề -->
                        <div class="form-group">
                            <label for="title" class="font-weight-bold"><i class="fas fa-heading"></i> Tiêu đề:</label>
                            <input type="text" id="title" name="title" class="form-control rounded-lg shadow-sm" 
                                   value="{{ $post->title }}" required>
                        </div>

                        <!-- Nội dung -->
                        <div class="form-group">
                            <label for="content" class="font-weight-bold"><i class="fas fa-align-left"></i> Nội dung:</label>
                            <textarea id="content" name="content" class="form-control rounded-lg shadow-sm" rows="5" required>{{ $post->content }}</textarea>
                        </div>

                        <!-- Nút Cập nhật -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success px-4 py-2 rounded-lg shadow">
                                <i class="fas fa-save"></i> Cập nhật
                            </button>
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary px-4 py-2 rounded-lg shadow ml-2">
                                <i class="fas fa-arrow-left"></i> Quay lại
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS tùy chỉnh -->
<style>
    .bg-gradient-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
    }
    .btn-success, .btn-secondary {
        transition: all 0.3s ease-in-out;
    }
    .btn-success:hover {
        background: #28a745;
        box-shadow: 0 4px 10px rgba(40, 167, 69, 0.3);
    }
    .btn-secondary:hover {
        background: #6c757d;
        box-shadow: 0 4px 10px rgba(108, 117, 125, 0.3);
    }
</style>
@endsection
