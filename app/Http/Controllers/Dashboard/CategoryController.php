<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::get();

        return view('dashboard.categories.index');
    }

    public function create()
    {

        $categories = Category::select('id', 'parent_id', 'category_name')->get();
        return view('dashboard.categories.create', compact('categories'));
    }

    public function store(Request $request, Category $category)
    {

        $this->validate($request, [
            'category_name_ar' => 'required',
            'category_name_en' => 'required',

        ]);

        if ($request->type == 1) {
            $request['parent_id'] = null;
        }
        $request_data = $request->except(['category_name_ar', 'category_name_en', 'slug_ar', 'slug_en', 'type']);

        $request_data['category_name']  = ['en' => $request->category_name_en,  'ar' => $request->category_name_ar];
        $request_data['slug']           =   ['en' => $request->slug_en, 'ar' => $request->slug_ar];

        Category::create($request_data);

        session()->flash('success', __('dashboard.added_successfully'));
        return redirect()->route('admin.categories');
    }


    public function edit($id)
    {

        $category = Category::orderBy('id', 'DESC')->find($id);

        if (!$category)
            return redirect()->route('admin.categories')->with(['error' => __('dashboard.not_found')]);

        return view('dashboard.categories.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'category_name_ar' => 'required',
            'category_name_en' => 'required',

        ]);

        $category = Category::find($id);

        if (!$category)
            return redirect()->route('admin.categories')->with(['error' => __('dashboard.error')]);

        $category->update([
            'category_name'    => ['en' => $request->category_name_en, 'ar' => $request->category_name_ar],
            'slug'            => ['en' => $request->slug_en, 'ar' => $request->slug_ar],
        ]);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.categories');
    }

    public function destroy($id)
    {
        try {
            //DB
            $category = Category::orderBy('id', 'DESC')->find($id);
            if (!$category)
                return redirect()->route('admin.categories')->with(['error' => __('dashboard.error')]);

            $category->delete();

            return redirect()->route('admin.categories')->with(['success' => __('dashboard.deleted_successfully')]);
        } catch (\Exception $ex) {
            return redirect()->route('admin.categories')->with(['error' => __('dashboard.error')]);
        }
    }
}
