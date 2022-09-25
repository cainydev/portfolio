<section class="grid content-center gap-16 px-4 py-32 mx-auto md:grid-cols-2 max-w-7xl">
    <div class="flex flex-col items-start">
        <h2 class="text-4xl">
            <x-underline w="1">Was</x-underline> wird abgeliefert?
        </h2>
        <p class="mt-3">Wir arbeiten mit modernen Technologien um eine stabile, SEO-gerechte Codebase abzuliefern.</p>
        <p class="mt-3">Diese Technologien bilden die Grundlage für jede unserer Seiten. Es gilt allerdings zu beachten, dass in speziellen Fällen wie Online-Shops zusätzliche Software verwendet wird. An der Grundlage ändert sich jedoch nichts.</p>
        <p class="my-6">Falls Sie Fragen zu den abgebildeten Technologien und deren Möglichkeiten haben freuen wir uns über Ihren Kontakt:</p>
        <x-button-primary class="mt-6">Kontakt</x-button-primary>

    </div>
    <div class="grid gap-y-8">
        <x-technology title="Laravel - The PHP Framework for Web Artisans" desc="Laravel bildet bei allen unseren Projekten die Grundlage als funktionsreiches PHP-Framework." url="laravel.com" img="{{ Vite::asset('resources/images/laravel.svg') }}" />
        <x-technology title="TailwindCSS - A utility-first CSS framework" desc="TailwindCSS sorgt bei unseren Seiten für den nötigen Pep im Design. Tailwind erlaubt es sehr dynamisches CSS direkt im Markup der Seite zu schreiben." url="tailwindcss.com" img="{{ Vite::asset('resources/images/tailwind.svg') }}" />
        <x-technology title="AlpineJS - Your new, lightweight, JavaScript framework" desc="AlpineJS ist das JavaScript-Framework der Wahl wenn es darum geht mit simpler, flexibler Syntax und minimalen Ladezeiten Seiten Dynamik zu verleihen." url="alpinejs.dev" img="{{ Vite::asset('resources/images/alpine.svg') }}" />
    </div>
</section>
