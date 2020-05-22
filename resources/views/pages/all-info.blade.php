@extends('main')
@section('content')
<h4 class="mt-5 ml-3 text-info">Visa informacija apie įmones</h4>

<table class="table mt-5">
    <thead>
    <tr>
        <th scope="col">Įmonės pavadinimas</th>
        <th scope="col">Kodas</th>
        <th scope="col">Pvm_kodas</th>
        <th scope="col">Adresas</th>
        <th scope="col">Telefonas</th>
        <th scope="col">El.paštas</th>
        <th scope="col">Veikla</th>
        <th scope="col">Vadovas</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <tr>
        @foreach($companies as $company)
        <th scope="row">{{$company->pavadinimas}}</th>
        <td>{{$company->kodas}}</td>
        <td>{{$company->pvm_kodas}}</td>
        <td>{{$company->adresas}}</td>
        <td>{{$company->telefonas}}</td>
        <td>{{$company->el_pastas}}</td>
        <td>{{$company->veikla}}</td>
        <td>{{$company->vadovas}}</td>
        @endforeach
    </tr>
    </tbody>
</table>
@endsection
