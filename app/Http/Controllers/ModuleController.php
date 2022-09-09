<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        return view('modules');
    }
    public function show($id)
    {
        return view('module/{$id}');
    }
}
