<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class DeleteController extends Controller
{
    public function __invoke(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index');

    }
}
