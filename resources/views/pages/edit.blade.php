@extends('main')
@section('content')

    <h4 class="mt-5 ml-3 pt-5 text-info">Visos įmonės</h4>

    <table class="table mt-4">
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
                    <button type="submit" class="btn btn-info mb-3 mb-sm-0 px-1 py-2">Redaguoti<a href="/edit/{{$company->id}}"><i class="fas fa-edit pt-1 pl-2 text-primary"></i></a></button>
                    <button type="submit" class="btn btn-danger mb-3 mb-sm-0 pr-2">Ištrinti<a href="/delete/{{$company->id}}"><i class="pl-2 fa-lg fas fa-undo"></i></a></button>
                </td>
                @endforeach
            </tr>
            </tbody>
    </table>
@endsection




