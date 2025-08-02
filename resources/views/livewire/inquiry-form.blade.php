<div id="kontakt" x-data="{sent: @entangle('sent').live}">
    <div class="grid scroll-mt-44 mt-10 gap-y-8 gap-x-12 md:grid-cols-2" x-transition x-show="!sent">
        <div class="absolute inset-x-0 -translate-x-full overflow-hidden h-px opacity-0" aria-hidden="true">
            <label for="code">&nbsp;</label>
            <!-- Honeypot field, don't fill out if you are a human ;) -->
            <input type="text" name="code" id="code" autocomplete="off" value="" tabindex="-1">
        </div>
        <span class="flex flex-col space-y-1">
            <label for="name" class="text-lg opacity-90">Name<span class="text-red">*</span></label>
            <input wire:model.live="name" type="text" name="name" placeholder="John Doe" required
                   class="px-4 py-2 text-lg border-2 border-primary"/>
            @error('name') <span class="text-sm text-red">{{ $message }}</span> @enderror
        </span>
        <span class="flex flex-col space-y-1">
            <label for="email" class="text-lg opacity-90">E-Mail<span class="text-red">*</span></label>
            <input wire:model.live="email" type="email" name="email" placeholder="johndoe@mail.com" required
                   class="px-4 py-2 text-lg border-2 border-primary"/>
            @error('email') <span class="text-sm text-red">{{ $message }}</span> @enderror
        </span>
        <span class="flex flex-col space-y-1 md:col-span-2" x-data="{l: $refs.msg.value.length }">
            <label for="message" class="text-lg opacity-90">Ihre Nachricht<span class="text-red">*</span></label>
            <span class="relative w-full">
                <textarea wire:model.live="message" id="message" x-ref="msg" x-on:click="l = $refs.msg.value.length"
                          x-on:keydown="l = $refs.msg.value.length" rows="8" name="message" required
                          class="px-4 w-full py-2 pb-16 text-lg border-2 border-primary"></textarea>
                <button wire:click="send"
                        class="absolute flex items-center justify-center px-4 py-2 bottom-4 left-4 text-lg transition-all bg-white border-2 disabled:border-gray-500 border-primary"
                        type="submit">
                    <span wire:loading.class.delay="opacity-0">Nachricht senden</span>
                    <x-spinner wire:loading.delay class="absolute aspect-square h-3/4"/>
                </button>
            </span>
            @error('message') <span class="text-sm text-red">{{ $message }}</span> @enderror
        </span>
    </div>

    <div x-cloak x-show="sent" x-transition class="flex justify-center gap-3 py-12">
        <div class="flex flex-col items-center text-center gap-3 max-w-md">
            <p>Vielen Dank für Ihre Nachricht! Wir melden uns so schnell wie möglich bei Ihnen zurück!</p>
            <x-button-primary wire:click.prevent="resetForm">Neue Anfrage</x-button-primary>
        </div>
    </div>
</div>
