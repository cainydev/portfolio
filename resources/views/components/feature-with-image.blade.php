@props(['description', 'leftTitle', 'leftText', 'rightTitle', 'rightText', 'illustration'])

<x-section>
    <div class="lg:py-20 py-8 mx-auto max-w-7xl">
        <div class="grid items-center grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
            <div class="order-first block w-full mt-12 lg:mt-0">
                <div class="overflow-hidden border-4 border-white shadow-lg bg-white rounded-3xl">
                    <x-dynamic-component class="text-primary fill-primary stroke-primary"
                                         :component="$illustration"/>
                </div>
            </div>
            <div class="md:order-first">
                <h3 class="text-4xl font-semibold tracking-tighter text-balance">
                    {{ $slot }}
                </h3>
                <p class="mt-4 text-base font-medium">
                    {{ $description }}
                </p>

                <dl class="grid grid-cols-2 gap-4 mt-6 list-none lg:gap-6 text-pretty">
                    <div>
                        <dt class="mt-4 font-semibold flex">
                            {{ $leftTitle }}
                        </dt>
                        <dd class="mt-2 text-sm">
                            {{ $leftText }}
                        </dd>
                    </div>
                    <div>
                        <dt class="mt-4 font-medium">
                            {{ $rightTitle }}
                        </dt>
                        <dd class="mt-2 text-sm">
                            {{ $rightText }}
                        </dd>
                    </div>
                </dl>
            </div>

        </div>
    </div>
</x-section>


