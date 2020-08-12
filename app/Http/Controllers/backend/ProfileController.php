<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.profile.index',compact('posts'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('backend.profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->has('image')) {

            $image = $request->file('image');
            $imageName = time().'_'. $image->getClientOriginalName();
            $image->move(public_path().'/images/profile_pic/', $imageName);

            $oldImage = public_path()."/images/profile_pic/". $user->avatar;
            if(file_exists($oldImage)) {
              storage::delete($oldImage);
            }
            $user->avatar = $imageName;

        }

            
        if($request->password) {
            $user->password = bcrypt($request->password);
        }
       $user->save();

        return redirect('admin/profile')
        ->with('status', 'Profile has been updated successfully.');
    }
}
