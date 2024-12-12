<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Danh sách sản phẩm</h1>
    <table>
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }} <!-- Phân trang -->
@endsection
