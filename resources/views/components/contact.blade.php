<x-section :alternate="false" class="py-8 md:py-16">
    <div class="flex flex-col items-center">
        {{ $slot }}
    </div>

    <livewire:inquiry-form />
</x-section>
