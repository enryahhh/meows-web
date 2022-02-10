<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Traits\ApiResponser;

class PostController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('user:id,name')->get();
        // $post = \DB::table('post')
        //     ->join('users','users.id','=','post.user_id')
        //     ->select('post.id','users.id as user_id','post.title','post.content','post.total_likes','post.total_comments')
        // ->get();
        return $this->success([
            "post" => $post
        ]);

    }

    public function indexArticle()
    {
        $post = Post::where('thumbnail' ,'!=', null)->with('user:id,name')->orderBy('created_at')->limit(5)->get();
        // $post = \DB::table('post')
        //     ->join('users','users.id','=','post.user_id')
        //     ->select('post.id','users.id as user_id','post.title','post.content','post.total_likes','post.total_comments')
        // ->get();
        return $this->success([
            "post" => $post
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->user()->id,
            'category_id' => 1,
            'total_comments' => 0,
            'thumbnail' => $request->thumbnail
        ]);

        return $this->success([
            "post" => $post
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id',$id)->with('comments:id,text,post_id,user_id')->first();
        return $this->success([
            'post' => $post
        ]);
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

    public function myPost(){
        $mypost = Post::where('user_id',auth()->user()->id)->get();
        return $this->success([
            "post" => $mypost
        ]);
    }
}
