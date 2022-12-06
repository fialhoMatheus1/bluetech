@extends('padrao')
@section('content')

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{'/img/logo-footer.png'}}" alt=""> 
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('dispositivo') }}">
            @csrf

            <div>
                <x-jet-label for="local" value="{{ __('Local do sensor') }}" />
                <x-jet-input id="local" class="block mt-1 w-full" type="text" name="local" :value="old('local')" required autofocus autocomplete="local" />
            </div>

            <div class="mt-4">
                <x-jet-label for="serial" value="{{ __('Número serial') }}" />
                <x-jet-input id="serial" class="block mt-1 w-full" type="text" name="serial" :value="old('serial')" required />
            </div>

            <div>
                <x-jet-label for="FK_Usuario" value="{{ __('Código da conta') }}" />
                <x-jet-input id="FK_Usuario" class="block mt-1 w-full" type="text" name="FK_Usuario" :value="old('FK_Usuario')" required autofocus autocomplete="FK_Usuariocal" />
            </div>

            <div class="flex items-center justify-end mt-4">
            
                <x-jet-button class="ml-4">
                    {{ __('Cadastrar') }}
                </x-jet-button>
            </div>
        </form>

    </x-jet-authentication-card>
</x-guest-layout>
@endsection