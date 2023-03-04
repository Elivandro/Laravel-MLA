<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;


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
        return view('client');
    }

    public function store(ClientRequest $request)
    {
        $client = Auth::user()->clients()->create($request->validated());

        return redirect()->back()->with('messages', "cliente $client->name cadastrado com sucesso.");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
