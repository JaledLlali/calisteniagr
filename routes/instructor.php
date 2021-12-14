<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InstructorCursos;

Route::get('cursos', InstructorCursos::class);
