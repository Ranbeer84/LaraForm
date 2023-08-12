<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
{
    $people = Person::all();
    return view('person', compact('people'));
}

public function store(Request $request)
{
    Person::create($request->all());
    return redirect('/');
}
}

