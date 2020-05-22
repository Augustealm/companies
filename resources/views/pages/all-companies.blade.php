@extends('main')
@section('content')

<h4 class="mt-5 pt-5 ml-3 text-info">Visos įmonės</h4>


<table class="table mt-5">
    <thead>
    <tr>
        <th scope="col">Įmonės pavadinimas</th>
        <th scope="col">Adresas</th>
        <th scope="col">El.paštas</th>
    </tr>
    </thead>
    @foreach($companies as $company)
    <tbody>
    <tr>
    <tr>
        <th scope="row"><a href="/all-info">{{$company->pavadinimas}}</a></th>
        <td>{{$company->adresas}}</td>
        <td>{{$company->el_pastas}}</td>
    </tr>
    </tbody> @endforeach
</table>
@endsection
