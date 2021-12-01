<?php

namespace App\Http\Controllers\Main;


use App\Http\Controllers\Controller;
use App\Models\Contact;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        return view('main.index', compact('contacts'));
    }
}