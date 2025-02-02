<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $contacts = DB::table('contacts')->get();
        return view('contacts.index', compact('contacts'));
    }

    public function show($id): View
    {
        $contact = DB::table('contacts')->where('id', $id)->first();

        if (!$contact) {
            abort(404, 'Contatto non trovato');
        }

        return view('contacts.show', compact('contact'));
    }
}
