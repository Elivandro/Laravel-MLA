<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkToken:general-token')
            ->only('index');

        $this->middleware('checkToken:simple-token')
            ->only('create');
    }

    public function index()
    {
        return 'index funcionario';
    }

    public function create()
    {
        return 'create funcionario';
    }

    public function store(Request $request)
    {
        //
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
