<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(10);
        $user = User::findOrFail( Auth::user()->id );         // $user = User::where('id',$id)->firstOrFail();
        
        
        return view('backend.posts.index',compact('posts','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        $file = $request->file('file');
        $filename = time().'_'. $file->getClientOriginalName();
        $file->move(public_path().'/images/post_pic/',$filename);

        Post::create([ 
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'images'=>$filename,
            'user_id'=>auth()->id(),
        ]);
        // Posts::create($request->all());
        return redirect('admin/post')->with('status','Successfully Uploaded Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=Post::findOrFail($id);
        return view('backend.posts.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, $id)
    {
        $file = $request->file('file');
        $filename = time().'_'. $file->getClientOriginalName();
        $file->move(public_path().'/images/post_pic/',$filename);

        Post::findOrFail($id)->update([ 
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'images'=>$filename,
            'user_id'=>auth()->id(),
        ]);
        // Posts::findOrFail($id)->update($request->all());
        return redirect ('admin/post')->with('status','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect('admin/post')->with('status','Successfully Deleted');
    }
}
