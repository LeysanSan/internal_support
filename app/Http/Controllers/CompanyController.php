<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

public function index()
{
    $companies = Company::all();

    return view('companies.index', compact('companies'));
}

public function show($id)
{
    $company = Company::findOrFail($id);

    return view('companies.show', compact('company'));
}


}
