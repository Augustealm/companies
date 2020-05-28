@extends('main')
@section('content')

<h4 class="mt-5 pt-5 ml-3 text-info">Visos įmonės</h4>


<table class="table mt-5">
    <thead>
    <tr>
        <th scope="col">Pvadinimas</th>
        <th scope="col">Adresas</th>
        <th scope="col">El.paštas</th>
    </tr>
    </thead>

    <tbody>
    <tr>
    @foreach($companies as $company)
    <tr>
        <td><a href="/all-info/{{$company->id}}">{{$company->pavadinimas}}</a></td>
        <td>{{$company->adresas}}</td>
        <td>{{$company->el_pastas}}</td>
    </tr>
    @endforeach
    </tbody>

</table>
    {{$companies-> links()}}
@endsection
