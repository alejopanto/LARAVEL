<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->query('title'));
        $title = $request->query('title');


        return view('test', compact('title'));
    }
}
