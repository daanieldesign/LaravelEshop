@extends('layouts.app')

@section('content')
<div class="h-20"> </div>
<div class="container py-10 mx-auto mt-8">
    <h1 class="text-3xl font-semibold text-center mb-8 text-white mt-8 !important">Naše Produkty</h1>

    <!-- CSS pro Grid -->
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-card .product-description {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .btn-primary {
            display: block;
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="product-grid">
        @foreach($products as $product)
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="{{ $product->name }}">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-center">{{ $product->name }}</h2>
                    <p class="text-gray-600 mb-4 product-description">{{ $product->description }}</p>
                    <p class="font-bold text-lg text-blue-600 mb-4 text-center">Cena: {{ $product->price }} Kč</p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn-primary">Zobrazit detaily</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
