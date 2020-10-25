<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentsController extends Controller
{
    public function post(Request $request)
    {
        $now = Carbon::now();
        $param = [
            "share_id" => $request->share_id,
            "user_id" => $request->user_id,
            "content" => $request->content,
            "created_at" => $now,
            "updated_at" => $now
        ];
        DB::table('commnents')->insert($param);
        return response()->json([
            'message' => 'Comment created successfully',
            'data' => $param
        ], 200);
    }
}
