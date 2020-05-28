<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\Console\Input\Input;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'all', 'info', 'search']]);
    }

    public function index(Company $company){
        return view('pages.home', ['company'=>$company]);
    }

    public function add(){

        return view('pages.add-company');
    }

    public function edit() {
        $companies = Company::paginate(6);
        return view('pages.edit', compact('companies'));
    }
    public function restrict(){
        return view('pages.restrict');
    }

    public function editCompany(Company $company){
        if (Gate::denies('edit-company', $company)){
            return view('pages.restrict');
        }
        return view('pages.edit-company', ['company'=>$company]);
    }

    public function storeUpdate(Request $request, Company $company){
        $request->validate([
            'pavadinimas'=> ['required', 'max:50'],
            'kodas'=>['required', 'max:15'],
            'pvm_kodas'=>['required', 'max:20'],
            'adresas'=> ['required', 'max:70'],
            'telefonas'=>['required', 'max:12'],
            'el_pastas'=>['required', 'regex:/(.+)@(.+)\.(.+)/i'],
            'veikla'=>['required', 'max:70'],
            'vadovas'=>['required', 'max:40'],
            'user_id'=> auth()->id()
        ]);

        Company::where ('id', $company->id)->update($request->only(['pavadinimas', 'kodas', 'pvm_kodas', 'adresas', 'telefonas', 'el_pastas', 'veikla', 'vadovas']));
        return redirect('/edit');
    }

    public function store(Request $request){
        $request->validate([
            'pavadinimas'=> ['required', 'max:50'],
            'kodas'=>['required', 'max:15'],
            'pvm_kodas'=>['required', 'max:20'],
            'adresas'=> ['required', 'max:70'],
            'telefonas'=>['required', 'max:12'],
            'el_pastas'=>['required', 'regex:/(.+)@(.+)\.(.+)/i'],
            'veikla'=>['required', 'max:70'],
            'vadovas'=>['required', 'max:40']
        ]);

        Company::create([
            'pavadinimas'=> request('pavadinimas'),
            'kodas'=> request('kodas'),
            'pvm_kodas' => request('pvm_kodas'),
            'adresas'=> request('adresas'),
            'telefonas'=> request('telefonas'),
            'el_pastas' => request('el_pastas'),
            'veikla'=> request('veikla'),
            'vadovas'=> request('vadovas'),
            'user_id'=> auth()->id()
        ]);

        session()->flash('notif', 'Informacija sėkmingai išsaugota!');
        return redirect('/add-company');

    }

    public function all() {
        $companies = Company::paginate(6);
        return view('pages.all-companies', compact('companies'));
    }
    public function info(Company $company){
        return view('pages.all-info', ['company'=>$company]);
    }


    public function delete(Company $company){
        if(Gate::denies('delete', $company)){
            return view('pages.restrict');
        }
        $company->delete();
        return view('pages.home');

    }

    public function search(Request $request){
        $request->validate([
            'category' => 'required|min:3'
        ]);

        $category = $request->input('category');

        $companies = Company::where('pavadinimas','like',  '%' . $category . '%')->orWhere('kodas','like',  '%' . $category . '%')-> get();
  //   $companiesCount = $companies->count();
   //    $request->validate([
     //    $companiesCount => 'required|min:1'
     //  ]);


        return view('pages.search-results', compact('companies'));

    }
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

}
