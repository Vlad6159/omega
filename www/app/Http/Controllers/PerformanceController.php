<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PerformanceController extends Controller
{
    public function indexPage():View
    {
        return \view('performances.index');
    }
}
