<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dadosdispositivos;
use App\Models\dadossensores;

class SensorController extends Controller
{
    //Tela do usuario é puxada daqui, pois os dados de "registrosDispositivo" não puxam de outra forma. Não sei o motivo - Matheus
    public function MostrarSensor(Request $request)
    {
        //array de dados do sensor:
        $dadosSensor = dadossensores::query();
        $dadosSensor = $dadosSensor->get();

        //array de dados do dispositivo:
        $dadosDispositivo = dadosdispositivos::query();
        $dadosDispositivo = $dadosDispositivo->get();
        
        //acesso aos dados
        return view('sensor', ['registrosSensor' => $dadosSensor], ['registrosDispositivo' => $dadosDispositivo]);
    } //fim da funcao

}//fim da classe