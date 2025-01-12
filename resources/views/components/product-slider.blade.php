<!-- Products Horizontal Scroll Section -->
<div class="py-10 bg-gray-100 dark:bg-gray-900"">
    <h2 class=" text-white text-3xl font-semibold text-center">Naše Produkty</h2>
    <div class="overflow-x-auto mt-6">
        <div class="flex space-x-4">
            @foreach($products as $product)
                <div class="flex-shrink-0 w-64">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col justify-between h-full">
                        <div>
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="object-cover w-full h-48">
                            <div class="p-4">
                                <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                                <p class="mt-2 text-gray-600">{{ $product->description }}</p>
                                <p class="mt-4 text-xl font-bold">{{ number_format($product->price, 2) }} Kč</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary inline-block px-6 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 transition">Zobrazit detaily</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>