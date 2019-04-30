<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\BloodCenter;

class BloodCenterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $centers = BloodCenter::paginate(10);
        return view('centers.blood-center')->with('centers', $centers);
    }

    public function addCenter()
    {
        return view('centers.new-center');
    }

    public function storeCenter(Request $request)
    {
        $center =  new BloodCenter;
        $center->name = $request->input('name');
        $center->phone = $request->input('phone');
        $center->city = $request->input('city');
        $center->district = $request->input('district');
        $center->place = $request->input('place');
        $center->save();

    	#$request = Request::all();
    	#BloodCenter::create($center);
    	#Flashy::message('Test','');    
        return redirect('center');
    }
}
