<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Vaccine;

class VaccineController extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $vaccines = Vaccine::orderBy('created_at', 'desc')->get();
        return view('admin.vaccines',compact('vaccines'));
    }
}
