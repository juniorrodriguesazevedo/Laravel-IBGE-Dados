<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StateController extends Controller
{
    public function index(Request $request, $id)
    {
        $api = Http::get("https://servicodados.ibge.gov.br/api/v3/agregados/6579/periodos/2021/variaveis/9324?localidades=N6[N3[{$id}]]");
        $response = $api->json();

        $base = $response[0]['resultados'][0]['series'];
        $numberOfCities = count($base);
        $state = $this->getState($id);
        
        $city = [];
        $population = [];

        for ($i=0; $i < $numberOfCities; $i++) { 
            array_push($city, $base[$i]['localidade']['nome']);
            array_push($population, $base[$i]['serie']['2021']);
        }
    
        return view('home', compact('city', 'population', 'numberOfCities', 'state'));
    }

    public function store(Request $request)
    {
        $id = $request->state;

        return redirect()->route('state.index', $id);
    }

    public function getState($id)
    {
        switch ($id) {
            case '12':
                return 'Acre';
                break;
            case '27':
                return 'Alagoas';
                break;
            case '16':
                return 'Amapá';
                break;
            case '13':
                return 'Amazonas';
                break;
            case '29':
                return 'Bahia';
                break;
            case '23':
                return 'Ceará';
                break;
            case '32':
                return 'Espírito Santo';
                break;
            case '52':
                return 'Goiás';
                break;
            case '21':
                return 'Maranhão';
                break;
            case '51':
                return 'Mato Grosso';
                break;
            case '31':
                return 'Minas Gerais';
                break;
            case '15':
                return 'Pará';
                break;
            case '25':
                return 'Paraíba';
                break;
            case '41':
                return 'Paraná';
                break;
            case '26':
                return 'Pernambuco';
                break;
            case '22':
                return 'Piauí';
                break;
            case '33':
                return 'Rio de Janeiro';
                break;
            case '24':
                return 'Rio Grande do Norte';
                break;
            case '43':
                return 'Rio Grande do Sul';
                break;
            case '11':
                return 'Rondônia';
                break;
            case '14':
                return 'Roraima';
                break;
            case '42':
                return 'Santa Catarina';
                break;
            case '25':
                return 'São Paulo';
                break;
            case '28':
                return 'Sergipe';
                break;
            case '17':
                return 'Tocantins';
                break;
            case '53':
                return 'Distrito Federal';
                break;
        }
    }
}
