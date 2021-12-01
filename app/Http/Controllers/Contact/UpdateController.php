<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\UpdateRequest;
use App\Models\Contact;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Contact $contact)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $contact->update($data);

        return redirect()->route('contact.show', compact('contact'));

    }
}
