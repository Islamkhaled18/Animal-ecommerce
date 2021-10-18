<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function index(Request $request)
    {
        $replies = Reply::paginate(4);
        return view('dashboard.replies.index', compact('replies'));
    } //end of index

    public function store(Request $request)
    {

        $reply = Reply::create([
            'replier_name' => $request->name,
            'replier_email' => $request->email,
            'replier_phone' => $request->mobile,
            'replier_comment' => $request->text,
            'comment_id' => $request->comment_id,
        ]);
        if ($reply) {
            return true;
        } else {
            return false;
        }
    } //end of store messages that send from user's website un database

    public function destroy($id)
    {
        try {
            //DB
            $reply = Reply::find($id);
            if (!$reply)
                return redirect()->route('reply.index')->with(['error' => __('dashboard.error')]);

            $reply->delete();

            return redirect()->route('reply.index')->with(['success' => __('dashboard.deleted_successfully')]);
        } catch (\Exception $ex) {
            return redirect()->route('reply.index')->with(['error' => __('dashboard.error')]);
        }
    }
}
