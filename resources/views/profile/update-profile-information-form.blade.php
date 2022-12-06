<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Informações do perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Atualizes as informações da sua conta e seu endereço e-mail.') }}
    </x-slot>

    

    <x-slot name="form">
        <!-- ID -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="id" value="{{ __('Código da conta') }}" />
            <x-jet-input readonly id="id" type="text" class="mt-1 block w-full" wire:model.defer="state.id" autocomplete="id" />
            <x-jet-input-error for="id" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nome') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('E-mail') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Seu endereço de e-mail não está verificado.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900" wire:click.prevent="sendEmailVerification">
                        {{ __('Clique aqui para re-enviar o e-mail de verificação.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                        {{ __('Um novo link de verificação foi enviado para o seu e-mail.') }}
                    </p>
                @endif
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Atualizado.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Atualizar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
