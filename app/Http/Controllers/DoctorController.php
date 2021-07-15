<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Auth;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
   /*  public function __construct()
    {
        $this->middleware('role:doctor');
    }
 */
    public function index()
    {
        return view('doctor.index');
    }
    public function updateProfile(){
        return view('doctor.updateProfile');
    }
    public function store(Request $request){
        $data = $request->all();
        
        $data['sponsor_level']=1;

        $img_path= Storage::put('uploads',$data['img_url']);
        $cv_path= Storage::put('uploads',$data['cv_url']);

        $data['img_url']= $img_path;
        $data['cv_url']= $cv_path;
        $doctor = new Doctor();
        $doctor->fill($data);
        $doctor->save();
        return redirect('/doctors');
    }
}
