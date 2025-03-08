<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function likePost(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
        $user = Auth::user();

        $like = Like::where('post_id', $post->id)->where('user_id', $user->id)->first();

        if ($like) {
            $like->delete();
            return response()->json(['liked' => false, 'like_count' => $post->likes()->count()]);
        } else {
            Like::create(['post_id' => $post->id, 'user_id' => $user->id]);
            return response()->json(['liked' => true, 'like_count' => $post->likes()->count()]);
        }
    }

}
