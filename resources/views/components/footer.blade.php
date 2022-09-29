<footer class="px-4 py-20 text-white bg-primary">
    <div class="grid gap-8 mx-auto max-w-7xl">
        <span>
            <x-logo class="h-12 fill-white"></x-logo>
            <p class="mt-2"><span class="text-xl">&copy;</span> techbra.in - {{ date("Y") }} - Alle Rechte vorbehalten.</p>
        </span>

        <span class="flex space-x-6">
            <a href="{{ route('imprint') }}" class="text-xl hover:underline">Impressum</a>
            <a href="#" class="text-xl hover:underline">Datenschutz</a>
        </span>
    </div>
</footer>
