<section class="px-4 py-20 text-white bg-opacity-100 bg-repeat bg-primary">
    <div class="grid mx-auto max-w-7xl">
        <div class="flex flex-col items-center">
            <h2 class="text-4xl font-semibold text-center">Unsere <x-underline w="1" white>Leistungen</x-underline>
            </h2>
            <p class="mt-3 text-lg">Für jeden das passende Angebot!</p>
        </div>

        <div class="grid grid-cols-1 gap-4 mt-8 grid-flow-dense md:grid-cols-3">
            <x-service-card class="md:col-span-2" price="1" title="Simple" img="illustrations.about_me">
                <ul>
                    <x-li>Persönliche Portfolios</x-li>
                    <x-li>Kleinunternehmen</x-li>
                    <x-li>Hochzeiten / Eventseiten</x-li>
                </ul>
            </x-service-card>
            <x-service-card class="md:col-span-2" price="2" title="Advanced" img="illustrations.heatmap">
                <ul>
                    <x-li>Apps mit Businesslogik</x-li>
                    <x-li>Software als Service</x-li>
                    <x-li>Komplexe CMS</x-li>
                </ul>
            </x-service-card>
            <x-service-card class="md:row-span-2 md:flex-col md:justify-center" price="3" title="Extra: Onlineshop" img="illustrations.shopping">
                <ul>
                    <x-li>Onlineshops</x-li>
                    <x-li>Multishops mit Ebay/Amazon/Etsy</x-li>
                    <x-li>Apps mit Warenwirtschaft</x-li>
                </ul>
            </x-service-card>
        </div>
    </div>

    <div class="flex justify-center w-full mt-12">
        <x-button-primary-light href="{{ route('pricing') }}" class="mx-auto">Zu den Angeboten</x-button-primary-light>
    </div>

</section>
