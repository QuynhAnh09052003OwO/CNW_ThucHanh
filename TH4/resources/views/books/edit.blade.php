@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sửa Task</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên sách:*</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
            </div>
            <div class="form-group">
                <label for="author">Tác giả:*</label>
                <textarea class="form-control" id="author" name="author" required>{{ $book->author }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Thể loại:*</label>
                <textarea class="form-control" id="category" name="category">{{ $book->category }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Năm xuất bản:</label>
                <input type="number" class="form-control" id="year" name="year" min="0" max="2025"  value="{{ $book->year }}" >
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="0" value="{{ $book->quantity }}" >
            </div>
            <div class="form-group form-check">
                <input type="hidden" name="completed" value="0"> <!-- Trường ẩn để gửi giá trị 0 -->
                <input type="checkbox" class="form-check-input" id="completed" name="completed" value="1"
                    {{ $book->completed ? 'checked' : '' }}>
                <label class="form-check-label" for="completed">Hoàn thành</label>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
