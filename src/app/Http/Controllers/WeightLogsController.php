<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeightLogsController extends Controller {
    public function index()
    {
        return view('weight_logs');
    }
}
