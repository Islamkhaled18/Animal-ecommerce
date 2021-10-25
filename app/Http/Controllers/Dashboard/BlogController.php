<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(5);
        return view('dashboard.blogs.index', compact('blogs'));
    } //enf of index

    public function create()
    {
        return view('dashboard.blogs.create');
    }

    public function store(BlogRequest $request)
    {

        $this->validate($request, [
            'blog_title_en' => 'required',
            'blog_title_ar' => 'required',
            'short_description_en' => 'required',
            'short_description_ar' => 'required',
            'long_description_en' => 'required',
            'long_description_ar' => 'required',
            'blog_photo' => 'required',
        ]);


        $blogs = Blog::first();

        if ($request->hasFile('blog_photo')) {
            $imageName = $request->blog_photo->getClientOriginalName();
            $imageExt  = $request->blog_photo->getClientOriginalExtension();
            $newName = uniqid("", true) . '.' . $imageExt;
            $path = $request->blog_photo->move('uploads/blogs', $imageName);
            $blog_photo_value = $path;
        } else {
            $blog_photo_value = ' ';
        }

        $blogs = new Blog();
        $blogs->blog_title         = ['en' => $request->blog_title_en, 'ar' => $request->blog_title_ar];
        $blogs->short_description  = ['en' => $request->short_description_en, 'ar' => $request->short_description_ar];
        $blogs->long_description   = ['en' => $request->long_description_en, 'ar' => $request->long_description_ar];
        $blogs->blog_video         = $request->blog_video;
        $blogs->blog_photo         = $blog_photo_value;
        $blogs->save();

        session()->flash('success', __('dashboard.added_successfully'));
        return redirect()->route('admin.blogs');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.blogs.edit', compact('blog'));
    } //end of edit



    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'blog_title_en' => 'required',
            'blog_title_ar' => 'required',
            'short_description_en' => 'required',
            'short_description_ar' => 'required',
            'long_description_en' => 'required',
            'long_description_ar' => 'required',
            'blog_photo' => 'required',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('blog_photo')) {
            $imageName = $request->blog_photo->getClientOriginalName();
            $imageExt  = $request->blog_photo->getClientOriginalExtension();
            $newName = uniqid("", true) . '.' . $imageExt;
            $path = $request->blog_photo->move('uploads/blogs', $imageName);
            $blog_photo_value = $path;
        } else {
            $blog_photo_value = ' ';
        }

        $blog->update([
            'blog_title'       => ['en' => $request->blog_title_en, 'ar' => $request->blog_title_ar],
            'short_description' => ['en' => $request->short_description_en, 'ar' => $request->short_description_ar],
            'long_description' => ['en' => $request->long_description_en, 'ar' => $request->long_description_ar],
            'blog_video'       => $request->blog_video,
            'blog_photo'       => $blog_photo_value,
        ]);
        session()->flash('success', __('dashboard.updated_successfully'));
        return redirect()->route('admin.blogs');
    }


    public function destroy($id)
    {
        try {
            //DB
            $blog = Blog::find($id);
            if (!$blog)
                return redirect()->route('admin.blogs')->with(['error' => __('dashboard.error')]);

            $blog->delete();

            return redirect()->route('admin.blogs')->with(['success' => __('dashboard.deleted_successfully')]);
        } catch (\Exception $ex) {
            return redirect()->route('admin.blogs')->with(['error' => __('dashboard.error')]);
        }
    }
}
