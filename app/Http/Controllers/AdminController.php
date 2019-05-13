<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Request;
use App\User;
use App\BloodCenter;
use App\Post;
use App\Contact;
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
    
    public function deleteUser($id)
	{
	 	$user = User::findOrFail($id);
	 	$user->delete();

	 	// Flashy::message('User removed','');
	 	return redirect('admin');
    }


    // Blood Centre
    public function bloodCentres()
	{
	 	$centers = BloodCenter::paginate(10);
        return view('admin.centers')->with('centers', $centers);
	}

	public function deleteCenter($id)
	{
	 	$center = BloodCenter::findOrFail($id);
	 	$center->delete();

	 	// Flashy::message('Center removed','');
	 	return redirect('admin/center');
	}

	public function editCenter($id)
	{
 		$center = BloodCenter::findOrFail($id);
 		return view('admin.edit-center')->with('center', $center);
	}

	public function updateCenter($id)
	{
	 	$request = Request::all();
	 	$center = BloodCenter::findOrFail($id);
	 	$center->update($request);

	 	// Flashy::message('Center updated','');
	 	return redirect('admin/center');
	}


	//Posts
	public function post()
	{
	 	$posts = Post::paginate(10);
        return view('admin.post')->with('posts', $posts);
	}

	public function editPost($id)
	{
 		$post = Post::findOrFail($id);
 		return view('admin.edit-post')->with('post', $post);
	}

	public function deletePost($id)
	{
	 	$post = Post::findOrFail($id);
	 	$post->delete();

	 	// Flashy::message('Center removed','');
	 	return redirect('admin/post');
	}

	public function updatePost($id)
	{
	 	$request = Request::all();
	 	$post = Post::findOrFail($id);
	 	$post->update($request);

	 	// Flashy::message('Center updated','');
	 	return redirect('admin/post');
	}

	//Contact admin
	public function contact()
	{
		// $posts = Post::where('user_id', $id);
	 	$contacts = Contact::paginate(10);
        return view('admin.contact')->with('contacts', $contacts);
	}
}
