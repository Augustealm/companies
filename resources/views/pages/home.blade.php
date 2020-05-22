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
    <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-5 mt-5 mx-auto flex-column">
        <header class="masthead mb-auto">
            <main role="main" class="inner cover">
                <h1 class="cover-heading text-info">Įmonių paieška.</h1>
                <p class="lead">Įmonių paiešką galima atlikti pagal įmonės pavadinimą.</p>
                <div class="input-group mb-3 col-10">
                    <div class="input-group-prepend">
                        <span class="input-group-text align-middle" id="basic-addon1"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" name="pavadinimas" id="pavadinimas" class="form-control">

                    <a href="#" class="btn btn-lg bg-info text-white">Paieška</a>
                </div>
            </main>
        </header>
    </div>
    </body>
 </form>
@endsection
