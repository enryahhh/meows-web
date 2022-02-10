<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;

class CommentController extends Controller
{
    use ApiResponser;

    public function createComment($id,Request $request){
        $comment = Comment::create([
            'post_id' => $id,
            'text' => $request->comment,
            'user_id' => auth()->user()->id
        ]);

        $post = Post::find($id);
        $post->total_comments += 1;
        $post->save();
        $comment->user = $comment->user->only(['id','name']);
        return $this->success([
            'comment' => $comment
        ]);
    }

    public function getComment($postId){
        $comments = Comment::where('post_id',$postId)->latest()->get();
        // $comments->created_at = Carbon::parse()
        return $this->success([
            'comments' => $comments
        ]);   
    }
}
