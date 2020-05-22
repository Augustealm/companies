<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function add(){
        return view('pages.add-company');
    }

    public function edit() {
        $companies = Company::all();
        return view('pages.edit', compact('companies'));
    }

    public function editCompany(Company $company){
        return view('pages.edit-company', ['company'=>$company]);
    }
    public function storeUpdate(Request $request, Company $company){
        $request->validate([
            'pavadinimas'=> ['required', 'max:50'],
            'kodas'=>['required', 'max:15'],
            'pvm_kodas'=>['required', 'max:20'],
            'adresas'=> ['required', 'max:50'],
            'telefonas'=>['required', 'max:15'],
            'el_pastas'=>['required', 'max:20'],
            'veikla'=>['required', 'max:40'],
            'vadovas'=>['required', 'max:20']
        ]);
        Company::where ('id', $company->id)->update($request->only(['pavadinimas', 'kodas', 'pvm_kodas', 'adresas', 'telefonas', 'el_pastas', 'veikla', 'vadovas']));
        return redirect('/');
    }

    public function store(Request $request){
        $request->validate([
            'pavadinimas'=> ['required', 'max:50'],
            'kodas'=>['required', 'max:15'],
            'pvm_kodas'=>['required', 'max:20'],
            'adresas'=> ['required', 'max:50'],
            'telefonas'=>['required', 'max:15'],
            'el_pastas'=>['required', 'max:20'],
            'veikla'=>['required', 'max:40'],
            'vadovas'=>['required', 'max:20']
        ]);

        Company::create([
            'pavadinimas'=> request('pavadinimas'),
            'kodas'=> request('kodas'),
            'pvm_kodas' => request('pvm_kodas'),
            'adresas'=> request('adresas'),
            'telefonas'=> request('telefonas'),
            'el_pastas' => request('el_pastas'),
            'veikla'=> request('veikla'),
            'vadovas'=> request('vadovas')
        ]);

    }

    public function all() {
        $companies = Company::all();
        return view('pages.all-companies', compact('companies'));
    }
    public function info() {
        $companies = Company::all();
        return view('pages.all-info', compact('companies'));
    }


}
