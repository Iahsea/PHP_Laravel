<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function toggleLike(Request $request)
    {

        if (!Auth::check()) {
            return response()->json(['error' => 'Bạn cần đăng nhập để like bài viết!'], 401);
        }

        $user = Auth::user();
        $post = Post::findOrFail($request->post_id);

        // Kiểm tra xem user đã like bài viết chưa
        $like = Like::where('user_id', $user->id)->where('post_id', $post->id)->first();

        if ($like) {
            $like->delete(); // Nếu đã like thì bỏ like
            return response()->json(['message' => 'Unlike thành công!', 'liked' => false, 'likes_count' => $post->likes()->count()]);
        } else {
            Like::create([
                'user_id' => $user->id,
                'post_id' => $post->id
            ]);
            return response()->json(['message' => 'Like thành công!', 'liked' => true, 'likes_count' => $post->likes()->count()]);
        }
    }

}
