<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use \App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
     return view('admin.contact.index', compact('contacts'));
    }
}
