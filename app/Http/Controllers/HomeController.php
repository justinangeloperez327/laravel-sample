<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $plans = Plan::all();

        return view('home', [
            'plans' => $plans
        ]);
    }
}
