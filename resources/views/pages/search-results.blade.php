@extends('main')
@section('content')

    <h4 class="mt-5 pt-5 ml-3 text-info">Paieškos rezultatai</h4>
    <p class="pt-3 font-weight-bold mb-1">Rezultatai: "{{request()->input('category')}}" :</p>
    <p>Rasta: {{$companies->count()}}</p>

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
            @foreach($companies as $company)
            <tr>
                <td>{{$company->pavadinimas}}</td>
                <td>{{$company->kodas}}</td>
                <td>{{$company->pvm_kodas}}</td>
                <td>{{$company->adresas}}</td>
                <td>{{$company->telefonas}}</td>
                <td>{{$company->el_pastas}}</td>
                <td>{{$company->veikla}}</td>
                <td>{{$company->vadovas}}</td>
            </tr>
                @endforeach
            </tbody>

    </table>
@endsection
