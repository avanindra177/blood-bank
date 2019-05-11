<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Request;
use App\User;
use App\BloodCenter;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
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
        //return view('auth.admin');
        $users = User::paginate(10);
	 	return view('admin.index')->with('users', $users);	
    }

    // Users
    public function editUser($id)
	{
	    $user = User::findOrFail($id);
	 	return view('admin.edit-user')->with('user', $user);
	}

	public function updateUser($id)
	{
	 	$user = User::findOrFail($id);
	 	$request = Request::all();
  	 	$user->update($request);
	 	// Flashy::message('User updated','');

  	 	return redirect('admin/');	
    }
    
    // public function deleteUser($id)
	// {
	//  	$user = User::findOrFail($id);
	//  	$user->delete();

	//  	// Flashy::message('User removed','');
	//  	return redirect('admin');
    // }


    // // Blood Centre
    // public function bloodCentres()
	// {
	//  	$centers = BloodCenter::paginate(10);
    //     return view('admin.centers')->with('centers', $centers);
	// }

	// public function deleteCenter($id)
	// {
	//  	$center = BloodCenter::findOrFail($id);
	//  	$center->delete();

	//  	// Flashy::message('Center removed','');
	//  	return redirect('admin/center');
	// }

	// public function editCenter($id)
	// {
 	// 	$center = BloodCenter::findOrFail($id);
 	// 	return view('admin.edit-center')->with('center', $center);
	// }

	// public function updateCenter($id)
	// {
	//  	$request = Request::all();
	//  	$center = BloodCenter::findOrFail($id);
	//  	$center->update($request);

	//  	// Flashy::message('Center updated','');
	//  	return redirect('admin/center');
	// }
}
