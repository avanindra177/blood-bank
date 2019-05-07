<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\User;
use App\Post;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }

    public function about()
    {
        return view ('about');
    }

    public function donors()
    {
        $input = Request::all();
        $conditions = [ 'is_donor' => '1' ];

        if(isset($input['group']))        $conditions = array_add($conditions, 'group', $input['group']);
        if(isset($input['city']))         $conditions = array_add($conditions, 'city', $input['city']);
        if(isset($input['district']))        $conditions = array_add($conditions, 'district', $input['district']);

        $users = User::where($conditions)->paginate(9);
        return view('donors')->with('users', $users);
    }

    public function donorProfile($id)
    {
        $donor = User::findOrFail($id);
        return view('donor-profile')->with('donor', $donor);
    }
}
