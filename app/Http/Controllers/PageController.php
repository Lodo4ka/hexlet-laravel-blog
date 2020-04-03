<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about()
    {
        $team = [
            ['name' => 'Hodor', 'position' => 'programmer'],
            ['name' => 'Joker', 'position' => 'CEO'],
            ['name' => 'Elvis', 'position' => 'CTO'],
        ];
        return view('about', ['team' => $team]);
    }

    public function team()
    {
        return view('team');
    } 
}
