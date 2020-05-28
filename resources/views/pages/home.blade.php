@extends('main')
@section('content')
    @if (session()->has('success_message'))
        <div class="alert alert-success pt-5 mt-5">
            {{session()->get('success_message')}}
        </div>
    @endif

    @if(count($errors)>0)
        <div class="alert alert-danger mt-5">
                @foreach($errors->all() as $error)
                    {{$error}}
                    @endforeach
        </div>
        @endif

    <body class="text-center mt-5 pt-5">
        <div class="cover-container d-flex w-100 h-100 p-5 mt-5 mx-auto flex-column">
            <header class="masthead mb-auto">
                <main role="main" class="inner cover">
                    <h1 class="covers-heading text-info">Įmonių paieška.</h1>
                    <p class="lead">Atlikite įmonės paiešką pagal įmonės pavadinimą arba kodą.</p>
                    <form action="/search" method="GET" class="search-form">
                        {{csrf_field()}}
                        <div class="input-group mb-3 col-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text align-middle" id="basic-addon1"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" name="category" id="category" class="form-control" placeholder="Įmonių paieška">
                            <button type="submit" class="btn btn-lg bg-info text-white">Paieška</button>

                        </div>
                    </form>
                </main>
            </header>
        </div>
    </body>

@endsection
