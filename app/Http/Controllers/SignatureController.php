<?php

namespace App\Http\Controllers;

class SignatureController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $name = $user->name;
        $clients = $user->clients;

        return view('dashboard', compact('name', 'clients'));
    }

    public function create()
    {
        return 'crie a view';
    }
}
