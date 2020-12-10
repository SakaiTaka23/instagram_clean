<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit($id)
    {
        dd($id);
    }

    public function index()
    {
        dd("index");
    }

    public function show($id)
    {
        dd($id);
    }

    public function update(Request $request, $id)
    {
        dd($request, $id);
    }
}
