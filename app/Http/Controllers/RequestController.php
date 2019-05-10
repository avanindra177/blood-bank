<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodRequest;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('request.request-blood');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = new BloodRequest;
        $req->patient = $request->input('patient');
        $req->group = $request->input('group');
        $req->city = $request->input('city');
        $req->location = $request->input('location');
        $req->hospital = $request->input('hospital');
        $req->contact_person = $request->input('contact_person');
        $req->contact_email = $request->input('contact_email');
        $req->contact_phone = $request->input('contact_phone');
        $req->when = $request->input('when');

        $req->save();
        return redirect('request.who-needs-blood');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $req = new BloodRequest;
        $req->patient = $request->input('patient');
        $req->group = $request->input('group');
        $req->city = $request->input('city');
        $req->location = $request->input('location');
        $req->hospital = $request->input('hospital');
        $req->contact_person = $request->input('contact_person');
        $req->contact_email = $request->input('contact_email');
        $req->contact_phone = $request->input('contact_phone');
        $req->when = $request->input('when');
        $conditions = [];

        if(isset($input['group'])) $conditions = array_add($conditions, 'group', $input['group']);
        if(isset($input['city']))  $conditions = array_add($conditions, 'city', $input['city']);
        if(isset($input['location'])) $conditions = array_add($conditions, 'location', $input['location']);

        $requests = BloodRequest::where($conditions)->where('when', '>=', time() - (24*60*60))->get();;
        return view('request.who-needs-blood')->with('requests', $requests);	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function requestDetails($id)
    {
        $request = BloodRequest::findOrFail($id);
        return view('request.request-details')->with('request', $request);
    }
}
