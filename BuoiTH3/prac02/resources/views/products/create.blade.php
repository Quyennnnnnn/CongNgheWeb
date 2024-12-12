<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Thêm sản phẩm mới</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="name">Tên sản phẩm</label>
        <input type="text" name="name" id="name" required>

        <label for="price">Giá</label>
        <input type="number" name="price" id="price" required>

        <label for="description">Mô tả</label>
        <textarea name="description" id="description"></textarea>

        <button type="submit">Thêm sản phẩm</button>
    </form>
@endsection
