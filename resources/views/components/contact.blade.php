<section class="px-4 py-16 mx-auto max-w-7xl">
    <div class="flex flex-col items-center">
        {{ $slot }}
    </div>

    <form action="#" method="POST" class="grid mt-10 gap-y-4 gap-x-12 md:grid-cols-2">
        @csrf
        <span class="flex flex-col">
            <label for="name" class="text-lg opacity-90">Name<span class="text-red">*</span></label>
            <input type="text" name="name" placeholder="John Doe" required class="px-4 py-2 text-lg border-2 border-primary" />
        </span>
        <span class="flex flex-col">
            <label for="email" class="text-lg opacity-90">E-Mail<span class="text-red">*</span></label>
            <input type="email" name="email" placeholder="johndoe@mail.com" required class="px-4 py-2 text-lg border-2 border-primary" />
        </span>
        <span class="relative flex flex-col md:col-span-2" x-data="{l: $refs.msg.value.length }">
            <label for="message" class="text-lg opacity-90">Ihre Nachricht<span class="text-red">*</span></label>
            <textarea id="message" x-ref="msg" x-on:click="l = $refs.msg.value.length" x-on:keydown="l = $refs.msg.value.length" rows="10" name="message" required class="px-4 py-2 text-lg border-2 border-primary"></textarea>
            <input x-bind:class="{'bottom-0': l < 20, 'bottom-5': l >= 20, 'opacity-0': l < 20, 'opacity-100': l>=20}" class="absolute px-4 py-2 text-lg transition-all -translate-x-1/2 bg-white border-2 opacity-0 left-1/2 disabled:border-gray-500 border-primary" type="submit" value="Nachricht senden" x-bind:disabled="l < 20" />
            <span class="absolute -translate-x-1/2 left-1/2" x-bind:class="{'bottom-0': l >= 20, 'bottom-5': l < 20, 'opacity-0': l >= 20, 'opacity-100': l<20}">
                Schreibe bitte etwas mehr..
            </span>
        </span>
    </form>
</section>
