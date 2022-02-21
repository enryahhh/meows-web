<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \DB::table('post')
            ->join('users', 'users.id', '=', 'post.user_id')
            ->select('users.name', 'post.*')
            ->get();
        return view('list-post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $htmlDom = new \DOMDocument;
        // $htmlDom->loadHTML($request->content);
        // $imageTags = $htmlDom->getElementsByTagName('img');
        // dd($imageTags[0]->getAttribute('src'));
        // $file_name = basename($imageTags[0]->getAttribute('src'));
         $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->thumbnail->extension();  
        $request->thumbnail->move(public_path('storage'), $imageName);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->user()->id,
            'thumbnail' => $imageName,
            'total_comments' => 0,
            'category_id' => 1
        ]);

        return redirect('post-admin.create');
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
}
