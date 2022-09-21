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
        $module = Module::findOrFail($id);

        return view('module', [
            'module' => $module
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store (Request $request)
    {

        Module::create([
            'name' => $request->name,
            'number_of_data' => $request->number_of_data,
            'vitesse' => $request->vitesse,
            'temperature' => $request->temperature,
        ]);

        return redirect(route("welcome"));

    }
}
