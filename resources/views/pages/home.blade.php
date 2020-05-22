@extends('main')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/store-company" class="form-horizontal">
        {{csrf_field()}}
        <h3 class="mt-5 ml-3 text-info">Įmonių paieška</h3>
        <div class="input-group mt-4">
            <div class="input-group mb-3 col-10">
                <div class="input-group-prepend">
                    <span class="input-group-text align-middle" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ieškoti įmonės" aria-label="Ieškoti įmonės" aria-describedby="basic-addon1">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary bg-info text-white" type="button">Paieška</button>
            </div>
            </div>
        </div>
    </form>
@endsection
