<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function welcome()
    {
        return view('page.welcome');
    }
    public function about()
    {
        $tags = ['обучение', 'программирование', 'php', 'oop'];    
        $team = [
            ['name' => 'Hodor', 'position' => 'programmer'],
            ['name' => 'Joker', 'position' => 'CEO'],
            ['name' => 'Elvis', 'position' => 'CTO'],
        ];
        return view('page.about');
    }
    public function articles()
    {
        return view('page.articles');
    }
    public function users()
    {
        return view('layouts.users');
    }

}
