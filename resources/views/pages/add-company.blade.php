@extends('main')
@section('content')
<h4 class="mt-5 ml-3 text-info">Naujos įmonės pridėjimas</h4>
<form method="post">
    <div class="form-inline mt-4">
        <div class="input-group mb-3 pl-0 col-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Įmonės pavadinimas</span>
            </div>
            <input type="text" name="title" id="input_cat" class="form-control" placeholder="" aria-label="Title" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 pl-0 col-6">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Adresas</span>
            </div>
            <input type="text" name="director" id="input_cat" class="form-control" placeholder="" aria-label="Director" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="form-inline">
        <div class="input-group mb-3 pl-0 col-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Pvm_kodas</span>
            </div>
            <input type="text" name="imdb" id="input_cat" class="form-control" placeholder="" aria-label="IMDB" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 pl-0 col-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Įmonės kodas</span>
            </div>
            <input type="text" name="year" id="input_cat" class="form-control" placeholder="" aria-label="years" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 pl-0 col-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Telefono numeris</span>
            </div>
            <input type="text" name="year" id="input_cat" class="form-control" placeholder="" aria-label="years" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="form-inline">
        <div class="input-group mb-3 pl-0 col-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">El.paštas</span>
            </div>
            <input type="text" name="imdb" id="input_cat" class="form-control" placeholder="" aria-label="IMDB" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 pl-0 col-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Veikla</span>
            </div>
            <input type="text" name="year" id="input_cat" class="form-control" placeholder="" aria-label="years" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 pl-0 col-4">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Vadovas</span>
            </div>
            <input type="text" name="year" id="input_cat" class="form-control" placeholder="" aria-label="years" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="float-right mr-3">
    <a class="btn btn-info mb-3 mb-sm-0 pr-2" role="button">Pridėti<i class="pl-2 fas fa-plus fa-lg"></i></a>
    <a class="btn btn-danger mb-3 mb-sm-0 pr-2" role="button">Atšaukti<i class="pl-2 fa-lg fas fa-undo"></i></a>
    </div>
</form>

@endsection
