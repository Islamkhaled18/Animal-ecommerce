<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
class SingleBlogController extends Controller
{
    public function showSingleBlog($id)
    {
        $blog     = Blog::with('comments')->find($id);
        $singleblog = Blog::where('id', $id)->first();
        return view('site.blogs.singleBlog', compact('blog', 'singleblog'));
    } //singleBlog page datails
}
