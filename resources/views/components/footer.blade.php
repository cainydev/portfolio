<x-section>
    <footer class="grid gap-8 px-4 py-20 mx-auto max-w-7xl">
        <span>
            <x-logo class="h-12"></x-logo>
            <p class="mt-2"><span class="text-xl">&copy;</span> techbra.in - {{ date("Y") }} - Alle Rechte
                vorbehalten.
            </p>
        </span>

        <span class="flex space-x-6">
            <a href="{{ route('imprint') }}"
               class="text-xl hover:underline">Impressum</a>
            <a href="#"
               class="text-xl hover:underline">Datenschutz</a>
        </span>
    </footer>
</x-section>
