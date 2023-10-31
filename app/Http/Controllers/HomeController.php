<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index(){
        $proyectos = Project::all();
        return view('index', [
            'proyectos' => $proyectos
        ]);
    }
}
