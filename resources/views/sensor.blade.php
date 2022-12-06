@extends('padrao')
@section('content')

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seu Sensor') }}
        </h2>
    </x-slot>

    <div class="py-12 tabela">
        <table class="table">
            <thead>
                <tr class="txt-tabela">
                    <th scope="col">Local</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrosSensor as $sensor)
                @foreach($registrosDispositivo as $dispositivo)
                <tr>
                    <th class="txt-tabela2">{{$dispositivo->local}}</th>
                    <td class="txt-tabela2">
                    @if($sensor->status == 1)
                        Aberto 

                    @endif
                    @if($sensor->status == 0)
                        Fechado

                    @endif
                    </td>
                </tr>
                @endforeach
                @endforeach
            </tbody>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </table>

        <div class="espacamento">
            <form action="{{ route('dispositivo')}}">
                <x-jet-button class="ml-4">
                    {{ __('Cadastre um dispositivo') }}
                </x-jet-button>
            
            </form>
        </div>

    </div>

</x-app-layout>
@endsection