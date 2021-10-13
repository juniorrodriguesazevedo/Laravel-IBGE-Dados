@extends('layout.main')
@section('title', 'Habitantes por Estado')

@section('content')
<div class="container text-center">

    <h1 class="h1">Habitantes por Estado</h1>

    @include('includes.alerts')

    <form class="row m-4" action="{{ route('state.store') }}" method="post">
      @method('post')
      @csrf
      <div class="col-11">
        <select class="form-select" name="state">
            <option value="00" selected>Selecione um estado...</option>
            <option value="12">Acre</option>
            <option value="27">Alagoas</option>
            <option value="16">Amapá</option>
            <option value="13">Amazonas</option>
            <option value="29">Bahia</option>
            <option value="23">Ceará</option>
            <option value="32">Espírito Santo</option>
            <option value="52">Goiás</option>
            <option value="21">Maranhão</option>
            <option value="51">Mato Grosso</option>
            <option value="50">Mato Grosso do Sul</option>
            <option value="31">Minas Gerais</option>
            <option value="15">Pará</option>
            <option value="25">Paraíba</option>
            <option value="41">Paraná</option>
            <option value="26">Pernambuco</option>
            <option value="22">Piauí</option>
            <option value="33">Rio de Janeiro</option>
            <option value="24">Rio Grande do Norte</option>
            <option value="43">Rio Grande do Sul</option>
            <option value="11">Rondônia</option>
            <option value="14">Roraima</option>
            <option value="42">Santa Catarina</option>
            <option value="35">São Paulo</option>
            <option value="28">Sergipe</option>
            <option value="17">Tocantins</option>
            <option value="53">Distrito Federal</option>
        </select>
      </div>
      <div class="col-1">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>

      @if (isset($numberOfCities, $state))
        <b>Estado: </b>{{ $state }} <br>
        <b>Número de Municípios: </b> {{ $numberOfCities }}
      @endif

      <table class="table table-bordered table-striped table-hover mt-4">
          <thead class="table-secondary">
          <tr>
              <th scope="col" style="width: 75%">Cidade</th>
              <th scope="col">Número de Habitantes</th>
          </tr>
          </thead>
          <tbody>
            @if (isset($city, $population))
              @foreach (array_combine($city, $population) as $city => $population)
                  <tr>
                      <td>{{ Str::beforeLast($city, '-') }}</td>
                      <td>{{ Str::replace(',', '.', number_format($population)) }}</td>
                  </tr>
              @endforeach
            @endif
          </tbody>
      </table>
</div>
@endsection