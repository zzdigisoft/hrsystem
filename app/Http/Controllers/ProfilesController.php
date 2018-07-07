<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Sentinel;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Sentinel::getUser()->id;        
        
        $profiles = Profile::where('users_id', $id)->get();

        return view('profiles.show', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$profile = new Profile;
        $profile->users_id = Sentinel::getUser()->id;
        $profile->name = $request->name;
        $profile->place_birth = $request->place_birth;
        $profile->date_birth = $request->date_birth;
        $profile->religion = $request->religion;
        $profile->gender = $request->gender;
        $profile->staff_id = $request->staff_id;
        $profile->position = $request->position;
        $profile->unit = $request->unit;
        $profile->bpjs_number = $request->bpjs_number;
        $profile->bank_number = $request->bank_number;
        $profile->phone = $request->phone;
        $profile->current_address = $request->current_address;
        $profile->origin_address = $request->origin_address;
        $profile->email = $request->email;
        $profile->save();
*/
        Profile::create($request->all());

        return redirect('profiles');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('profiles.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        
        return view('profiles.edit', compact('profile'));

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
}
