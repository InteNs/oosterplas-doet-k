<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategory;
use App\Category;
use App\Http\Controllers\Controller;
use Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (Request::get('order') != null && Request::get('direction') != null) {
            $categories = Category::orderBy(Request::get('order'), Request::get('direction'))->paginate(15);
        } else {
            $categories = Category::orderBy('id', 'asc')->paginate(15);
        }
        return view('admin.category.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        Category::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('beheer/categorie');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.category.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('beheer/categorie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/categorie');
    }
}
