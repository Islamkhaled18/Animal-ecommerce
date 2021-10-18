<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $comments = Comment::paginate(4);
        return view('dashboard.comments.index', compact('comments'));
    } //end of index

    public function store(Request $request)
    {
       
        $comment = Comment::create([
            'user_name' => $request->name,
            'user_email' => $request->email,
            'user_phone' => $request->mobile,
            'user_comment' => $request->text,
            'blog_id' => $request->blog_id,
        ]);
        if ($comment) {
            return true;
        } else {
            return false;
        }
    } //end of store messages that send from user's website un database

    public function destroy($id)
    {
        try {
            //DB
            $comment = Comment::find($id);
            if (!$comment)
                return redirect()->route('comment.index')->with(['error' => __('dashboard.error')]);

            $comment->delete();

            return redirect()->route('comment.index')->with(['success' => __('dashboard.deleted_successfully')]);
        } catch (\Exception $ex) {
            return redirect()->route('comment.index')->with(['error' => __('dashboard.error')]);
        }
    }
}
