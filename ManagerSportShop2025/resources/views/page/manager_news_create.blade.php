@extends('dashboard_master')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Thêm tin tức mới</h4>
        </div>  
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('manager_news.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Tên tiêu đề</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">  
                    <label class="form-label">Nội dung</label>
                    <textarea name="content" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hình ảnh URL</label>
                    <input type="text" name="image" class="form-control" placeholder="Dán URL hình ảnh vào đây">
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Lưu tin tức</button>
                <a href="{{ route('manager_products') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay lại</a>
            </form>
        </div>
    </div>
</div>
@endsection
