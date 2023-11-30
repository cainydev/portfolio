<div x-data="{sent: @entangle('sent')}" class="grid mt-10 gap-y-8 gap-x-12 md:grid-cols-2">
    <span class="flex flex-col space-y-1" x-show="!sent" x-transition>
        <label for="name" class="text-lg opacity-90">Name<span class="text-red">*</span></label>
        <input wire:model="name" type="text" name="name" placeholder="John Doe" required
               class="px-4 py-2 text-lg border-2 border-primary" />
        @error('name') <span class="text-sm text-red">{{ $message }}</span> @enderror
    </span>
    <span class="flex flex-col space-y-1" x-show="!sent" x-transition>
        <label for="email" class="text-lg opacity-90">E-Mail<span class="text-red">*</span></label>
        <input wire:model="email" type="email" name="email" placeholder="johndoe@mail.com" required
               class="px-4 py-2 text-lg border-2 border-primary" />
        @error('email') <span class="text-sm text-red">{{ $message }}</span> @enderror
    </span>
    <span class="relative flex flex-col space-y-1 md:col-span-2" x-data="{l: $refs.msg.value.length }" x-show="!sent"
          x-transition>
        <label for="message" class="text-lg opacity-90">Ihre Nachricht<span class="text-red">*</span></label>
        <textarea wire:model="message" id="message" x-ref="msg" x-on:click="l = $refs.msg.value.length"
                  x-on:keydown="l = $refs.msg.value.length" rows="10" name="message" required
                  class="px-4 py-2 text-lg border-2 border-primary"></textarea>
        <button wire:click="send"
                x-bind:class="{'bottom-0': l < 20, 'bottom-5': l >= 20, 'opacity-0': l < 20, 'opacity-100': l>=20}"
                class="absolute px-4 py-2 text-lg transition-all -translate-x-1/2 bg-white border-2 opacity-0 left-1/2 disabled:border-gray-500 border-primary"
                type="submit" x-bind:disabled="l < 20">Nachricht senden</button>
        <span class="absolute -translate-x-1/2 left-1/2"
              x-cloak
              x-bind:class="{'bottom-0': l >= 20, 'bottom-5': l < 20, 'opacity-0': l >= 20, 'opacity-100': l<20}">
            Schreiben Sie bitte etwas mehr..
        </span>
        @error('message') <span class="text-sm text-red">{{ $message }}</span> @enderror
    </span>

    <div x-cloak x-show="sent" class="flex justify-center">
        <p>Vielen Dank für Ihre Nachricht! Wir melden uns so schnell wie möglich bei Ihnen zurück!</p>
    </div>
</div>
