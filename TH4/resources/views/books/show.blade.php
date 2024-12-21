@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chi tiết Book</h1>
        <p><strong>Tên sách:</strong> {{ $book->name }}</p>
        <p><strong>Tác giả:</strong> {{ $book->author }}</p>
        <p><strong>Thể loại:</strong> {{ $book->category }}</p>
        <p><strong>Năm xuất bản:</strong> {{ $book->year }}</p>
        <p><strong>Số lượng:</strong> {{ $book->quantity }}</p>
        <p><strong>So nguoi muon:</strong> {{ $book->borrows()->count() }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>
    </div>
@endsection


