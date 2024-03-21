<x-section :alternate="true">
    <footer class="relative grid gap-8 px-4 py-20 mx-auto max-w-7xl">
        <span class="flex flex-col gap-4">
            <x-logo class="h-10 md:h-12 fill-white"/>
            <p class="mt-2"><span class="text-xl">&copy;</span> techbra.in - {{ date("Y") }} - Alle Rechte
                vorbehalten.
            </p>
        </span>

        <span class="flex flex-wrap gap-6">
            <a href="{{ route('imprint') }}"
               class="text-xl hover:underline">Impressum</a>
            <a href="{{ route('imprint') }}#datenschutz"
               class="text-xl hover:underline">Datenschutz</a>
        </span>
    </footer>
</x-section>
