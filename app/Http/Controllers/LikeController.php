<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Create a  Middleware instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
            // 'user_id' => auth()->id
            'user_id' => '1'
        ]);
    }

    public function unlikeIt(Reply $reply)
    {
        $reply->like()
            // ->where('user_id', auth()->id)
            ->where('user_id', '1')
            ->first()
            ->delete();
    }
}
