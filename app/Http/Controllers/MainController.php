<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController
{
    public function getMain()
    {
        $skills = DB::table('skills')
            ->select('name')
            ->get();

        return view('about_me')
            ->with('skills', $skills);
    }
}
