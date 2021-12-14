<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){

        $cursos = Curso::orderBy('id','desc')->paginate();

        return view('home', compact('cursos'));
    }
}
