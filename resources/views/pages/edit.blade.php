@extends('main')
@section('content')

    <h4 class="mt-5 ml-3 pt-5 text-info">Visos įmonės</h4>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">Pavadinimas</th>
            <th scope="col">Kodas</th>
            <th scope="col">Pvm_kodas</th>
            <th scope="col">Adresas</th>
            <th scope="col">Telefonas</th>
            <th scope="col">El.paštas</th>
            <th scope="col">Veikla</th>
            <th scope="col">Vadovas</th>
            <th scope="col" class="pl-5">Veiksmai</th>
        </tr>
        </thead>
            <tbody>
            <tr>
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
                <td>
                    <a class="ml-4 pl-3 py-2" href="/edit-company/{{$company->id}}" role="button"><i class="text-info fas fa-edit pt-1 pl-2 "></i></a>
                    <a class="mb-3 mb-sm-0 pr-2" href="/delete/{{$company->id}}" role="button"><i class="text-danger fas fa-trash-alt pt-1 pl-2 "></i></a>
                </td>
                @endforeach
            </tr>
            </tbody>
    </table>
    {{$companies-> links()}}
@endsection




