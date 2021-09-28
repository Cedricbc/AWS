<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Agent;
use App\Models\Vaccine;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $patients = Patient::orderBy('created_at', 'desc')->get();
        $patientsCount = $patients->count();
        
        $agents = Agent::orderBy('created_at', 'desc')->get();
        $agentsCount = $agents->count();
        
        $vaccines = Vaccine::orderBy('created_at', 'desc')->get();
        $vaccineCount = $vaccines->count();
        
        return view('admin.dashboard',compact('patients','patientsCount','agents','agentsCount','vaccines','vaccineCount'));
    }

    public function settings(){
        return view('admin.settings');
    }
}
