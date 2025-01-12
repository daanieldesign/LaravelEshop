@extends('layouts.app')

@section('content')
<div class="h-20"> </div>
    <div class="container mt-20 px-4 sm:px-6 lg:px-8 mx-auto relative top-11">

        <div class="fixed top-10 left-6 z-50">
            <a href="{{ route('products.index') }}" class="btn btn-secondary bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-md">
                Back to Products
            </a>
        </div>


        <div class="product-details bg-white p-6 shadow-lg rounded-lg mx-auto w-full lg:w-4/5 flex justify-between"
             style="{{ $product->price > 1000 ? 'border: 5px solid #ffd700;' : '' }}">

            <div class="w-1/3 pr-4">
                <div class="main-image mb-6">
                    <img src="{{ $product->image_url ?? 'https://i00.eu/img/454/1024x1024/4z4vdp0f/669.webp' }}" alt="{{ $product->name }}"
                         class="product-image mx-auto w-full h-auto object-cover rounded-lg">
                </div>

                <div class="flex justify-between">
                    <img src="{{ $product->additional_images[0] ?? 'https://i00.eu/img/454/1024x1024/1tag8gyv/682.webp' }}" alt="Image 1" class="w-1/4 h-24 object-cover rounded-lg">
                    <img src="{{ $product->additional_images[1] ?? 'https://i00.eu/img/454/1024x1024/azyojmhh/672.webp' }}" alt="Image 2" class="w-1/4 h-24 object-cover rounded-lg">
                    <img src="{{ $product->additional_images[2] ?? 'https://i00.eu/img/454/1024x1024/8ph263y0/679.webp' }}" alt="Image 3" class="w-1/4 h-24 object-cover rounded-lg">
                </div>
            </div>


            <div class="w-1/2 pl-4">
                <h1 class="text-3xl font-semibold text-gray-800 mb-4">{{ $product->name }}</h1>
                <p class="text-lg text-gray-600 mb-4">{{ $product->description }}</p>
                <div class="flex justify-between text-lg font-medium text-gray-800">
                    <p><strong>Price: </strong>{{ number_format($product->price, 2, ',', ' ') }} Kč</p>
                    <p><strong>SKU: </strong>{{ $product->sku }}</p>
                </div>
                @if($product->in_stock < 5)
                    <div class="text-red-600 font-bold mt-4">
                        Pozor: Skladem už jen {{ $product->in_stock }} kusů!
                    </div>
                @endif
            </div>
        </div>
        <div class="p-8 m-8">
        <x-infinite_slider :products="$relatedProducts" />
        </div>
    </div>
@endsection
