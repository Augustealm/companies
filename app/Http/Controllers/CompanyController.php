<?php

namespace App\Http\Controllers;

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
        return view('pages.edit');
    }
    public function store(){
        return redirect('/');
    }

    public function all() {
        return view('pages.all-companies');
    }
    public function info() {
        return view('pages.all-info');
    }


}
