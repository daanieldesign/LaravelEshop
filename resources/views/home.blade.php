@extends('layouts.app')

@section('content')
    <!-- Hero Section with Image and Gradient -->
    <div class="relative h-screen pt-20">
        <!-- Obrázek na pozadí -->
        
        <!-- Přechodový gradient -->
        
        <!-- Text vycentrovaný přes obrázek -->
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-5xl font-bold text-center">Vítejte na naší stránce!</h1>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="py-10 text-center bg-gray-100">
        <h2 class="text-3xl font-semibold">Proč nakupovat u nás?</h2>
        <p class="mt-4 text-lg text-gray-700">Nabízíme nejlepší produkty za nejlepší ceny!</p>
        <div class="mt-6 flex flex-wrap justify-center gap-6">
            <div class="bg-white shadow-md rounded-lg p-6 max-w-xs">
                <div class="flex justify-center">
                    <x-heroicon-o-truck class="h-16 w-16" />
                </div>
                <h3 class="text-lg font-bold">Rychlá Doprava</h3>
                <p class="mt-2">Zaručujeme rychlé dodání vašich objednávek.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 max-w-xs">
                <div class="flex justify-center">
                    <x-iconsax-bro-sidebar-right class="h-16 w-16" />
                </div>
                <h3 class="text-lg font-bold">Kvalitní Produkty</h3>
                <p class="mt-2">Naše produkty procházejí důkladným výběrem kvality.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 max-w-xs">
                <div class="flex justify-center">
                    <x-gmdi-support-agent-o class="h-16 w-16" />
                </div>
                <h3 class="text-lg font-bold">Zákaznická Podpora</h3>
                <p class="mt-2">Jsme tu pro vás, abychom zodpověděli všechny vaše dotazy.</p>
            </div>
        </div>
    </div>

   @include('components.product-slider')
@endsection

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            },
            loop: true, // Přidá loop efekt
        });
    </script>
@endpush
