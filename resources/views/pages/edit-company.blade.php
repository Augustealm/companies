@extends('main')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger mt-5 pt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h4 class="mt-5 pt-5 ml-3 text-info">Įmonių redagavimas</h4>
    <form method="POST" action="/store-update/{{$company->id}}" class="form-horizontal">
            {{csrf_field()}}
            {{method_field('PATCH')}}

        <div class="form-inline mt-4">
            <div class="input-group mb-3 pl-0 col-6">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Įmonės pavadinimas</span>
                </div>
                <input type="text" name="pavadinimas" id="pavadinimas" class="form-control" value="{{$company->pavadinimas}}">
            </div>
            <div class="input-group mb-3 pl-0 col-6">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Adresas</span>
                </div>
                <input type="text" name="adresas" id="adresas" class="form-control" value="{{$company->adresas}}">
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group mb-3 pl-0 col-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Pvm_kodas</span>
                </div>
                <input type="text" name="pvm_kodas" id="pvm_kodas" class="form-control" value="{{$company->pvm_kodas}}">
            </div>
            <div class="input-group mb-3 pl-0 col-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Įmonės kodas</span>
                </div>
                <input type="text" name="kodas" id="kodas" class="form-control" value="{{$company->kodas}}" >
            </div>
            <div class="input-group mb-3 pl-0 col-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Telefono numeris</span>
                </div>
                <input type="text" name="telefonas" id="telefonas" class="form-control" value="{{$company->telefonas}}">
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group mb-3 pl-0 col-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">El.paštas</span>
                </div>
                <input type="text" name="el_pastas" id="el_pastas" class="form-control" value="{{$company->el_pastas}}">
            </div>
            <div class="input-group mb-3 pl-0 col-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Įmonės veikla</span>
                </div>
                <input type="text" name="veikla" id="veikla" class="form-control" value="{{$company->veikla}}">
            </div>
            <div class="input-group mb-3 pl-0 col-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Vadovas</span>
                </div>
                <input type="text" name="vadovas" id="vadovas" class="form-control" value="{{$company->vadovas}}">
            </div>
        </div>
        <div class="float-right mr-3">
            <button type="submit" class="btn btn-primary mb-3 mb-sm-0 pr-2">Saugoti<i class="pl-2 fas fa-save fa-lg"></i></button>
            <a class="btn btn-danger mb-3 mb-sm-0 pr-2" role="button" href="/edit-company/">Atšaukti<i class="pl-2 fa-lg fas fa-undo"></i></a>
        </div>

    </form>


@endsection
