<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:patient');
    }
    public function index()
    {
        return view('patient.index');
    }
}
