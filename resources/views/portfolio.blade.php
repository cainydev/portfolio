<x-layout>
    <x-hero
        subtitle="Unsere Software ist von Menschen, für Menschen - saubere und intuitive Seiten für mehr Conversions"
        cta_text="Zum Angebot"
        href="#service-anker"
        img="illustrations.static_website">
        Unsere Projekte aufbereitet als
        <x-underline>Portfolio</x-underline>
    </x-hero>

    <x-portfolio-entry title="Byggito - Kleinzeigen für Baumaterialien"
                       subtitle="Klimakrise und Materialknappheit. Immer wieder bleiben auf Baustellen Baumaterialen übrig und können nicht weitervermittelt werden. Diese Seite haben wir für einen schwedischen Kunden gebaut, der dieses Problem lösen wollte.">
        <img class="object-cover md:col-span-3 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/hemio_fullscreen.jpg') }}"
             alt="">
        <img class="object-cover md:col-span-2 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/hemio_login.jpg') }}"
             alt="">
        <img class="object-cover md:col-span-2 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/hemio_newadd.jpg') }}"
             alt="">
        <img class="object-cover md:col-span-3 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/hemio_messenger.jpg') }}"
             alt="">
    </x-portfolio-entry>

    <x-contact>
        <h2 class="text-4xl font-semibold text-center">
            <x-underline w="1">Interesse</x-underline>
            geweckt? Schreiben Sie uns!
        </h2>
        <p class="mt-3 text-lg">Wir freuen uns über Ihre Nachricht und richten gerne eine Erstberatung ein.</p>
    </x-contact>

    <x-footer/>
</x-layout>
