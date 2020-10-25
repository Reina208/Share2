<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LikesController extends Controller
{
    public function post(Request $request)
    {
        $now = Carbon::now();
        $param = [
            "share_id" => $request->share_id,
            "user_id" => $request->user_id,
            "created_at" => $now,
            "updated_at" => $now
        ];
        DB::table('likes')->insert($param);
        return response()->json([
            'message' => 'Like created susccussfully',
            'data' => $param
        ], 200);
    }
    public function deleted(Request $request)
    {
        DB::table('likes')->where('share_id', $request->share_id)->where('user_id' , $request->user_id)->delete();
        return response()->json([
            'message' => 'Like deleted succussfullly'
        ],200);
    }
}
