<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use App\Http\Requests\WeightLogRequest;
use App\Http\Requests\WeightTargetRequest;

class WeightLogController extends Controller {
    public function index()
    {
        $weight_logs = WeightLog::all();
        return view('weight_logs', ['weight_logs' => $weight_logs]);
    }

    public function add(){
        return view('create');
    }

    public function create(Request $request) 
    {
        $form = $request->all();
        WeightLog::create($form);
        return view('/weight_logs');
    }
}
