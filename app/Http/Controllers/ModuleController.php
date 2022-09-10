<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view('modules',[
            'modules'=>$modules
        ]);

    }

    public function show($id)
    {
        $module = Module::find($id);

        return view('module/{$id}');
    }
}
