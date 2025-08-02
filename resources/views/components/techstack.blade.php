<x-section>
    <x-two-col-layout>
        <div class="flex flex-col items-start">
            <h2 class="text-4xl">
                <x-underline w="1">Womit</x-underline>
                arbeiten wir?
            </h2>
            <p class="mt-12">Bei uns kommen moderne Technologien zum Einsatz um eine stabile, SEO-gerechte Codebase
                abzuliefern.</p>
            <p class="mt-3">PHP & Laravel bilden die Grundlage für jede unserer Seiten.</p>
            <p class="mt-3">Zusätzlich zu Laravel verwendet wir in den meisten Fällen TailwindCSS für das Styling sowie
                AlpineJS für die
                Interaktivität.</p>
            <p class="mt-3">Für komplexere Anwendung mit Content-Management-Systemen (CMS) verwenden wir zusätzlich Statamic CMS, sowie Shopware 6 oder LunarPHP für Onlineshops.
            </p>
            <p class="my-6">Falls Sie Fragen zu den abgebildeten Technologien und deren Möglichkeiten haben freuen wir
                uns
                über eine Nachricht.</p>
            <x-button-primary href="{{ route('home') }}#kontakt" class="mt-6">Kontakt</x-button-primary>
        </div>
        <div class="grid gap-y-8">
            <x-technology title="Laravel - The PHP Framework for Web Artisans"
                          desc="Laravel bildet bei allen unseren Projekten die Grundlage als funktionsreiches PHP-Framework."
                          url="laravel.com"
                          img="{{ Vite::asset('resources/images/laravel.svg') }}"/>
            <x-technology title="TailwindCSS - A utility-first CSS framework"
                          desc="TailwindCSS sorgt bei unseren Seiten für den nötigen Pep im Design. Tailwind erlaubt es sehr dynamisches CSS direkt im Markup der Seite zu schreiben."
                          url="tailwindcss.com"
                          img="{{ Vite::asset('resources/images/tailwind.svg') }}"/>
            <x-technology title="AlpineJS - Your new, lightweight, JavaScript framework"
                          desc="AlpineJS ist das JavaScript-Framework der Wahl wenn es darum geht mit simpler, flexibler Syntax und minimalen Ladezeiten Seiten Dynamik zu verleihen."
                          url="alpinejs.dev"
                          img="{{ Vite::asset('resources/images/alpine.svg') }}"/>
        </div>
    </x-two-col-layout>
</x-section>
