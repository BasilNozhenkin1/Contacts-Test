<?php

namespace App\Http\Controllers\Contact;


use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $contacts = $user->contacts;
        return view('contact.index', compact('user', 'contacts'));
    }
}