<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index () {
        $tactics = Tactic::all();
        return view('welcome', compact('tactics'));

    }
}
