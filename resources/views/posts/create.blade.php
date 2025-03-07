@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">

                <div class="card-body p-4">
                    <h2 class="text-center text-primary font-weight-bold mb-4">
                        ✍️ Tạo bài viết mới
                    </h2>

                    <!-- Hiển thị lỗi khi nhập sai -->
                    @if ($errors->any())
                        <div class="alert alert-danger p-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form nhập bài viết -->
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="title" class="font-weight-bold">
                                <i class="fas fa-heading"></i> Tiêu đề bài viết
                            </label>
                            <input type="text" name="title" id="title" 
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Nhập tiêu đề..."
                                required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="content" class="font-weight-bold">
                                <i class="fas fa-file-alt"></i> Nội dung bài viết
                            </label>
                            <textarea name="content" id="content" rows="6" 
                                class="form-control @error('content') is-invalid @enderror"
                                placeholder="Nhập nội dung bài viết..."
                                required></textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nút Submit -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success btn-lg px-4 py-2">
                                <i class="fas fa-upload"></i> Đăng bài viết
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Nút quay lại -->
            <div class="text-center mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary px-4 py-2">
                    <i class="fas fa-arrow-left"></i> Quay lại danh sách
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Background CSS -->
<style>
    body {
        background: url('https://source.unsplash.com/1600x900/?technology,writing') no-repeat center center fixed;
        background-size: cover;
    }
</style>
@endsection
