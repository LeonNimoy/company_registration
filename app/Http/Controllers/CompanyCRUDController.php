<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    public function index()
    {
        $data['companies']= Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', $data);
    }

    public function create()
    {
        return view('companies.create');
    }
}
