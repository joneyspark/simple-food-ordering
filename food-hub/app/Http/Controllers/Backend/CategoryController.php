<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')
            ->paginate(10);

        return view('layouts.category.index')->with(['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        $slug = Str::of($request->name)->slug('-');

        // return $slug;

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            Category::create([
                'name' => $request->name,
                'slug' => $slug,
                'photo' => $imageName,
            ]);
            $request->photo->move(public_path('assets/images/categories'), $imageName);
        } else {
            Category::create([
                'name' => $request->name,
                'slug' => $slug
            ]);
        }

        return redirect('category')->with('message', 'Category Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        // return $category;
        return view('layouts.category.edit', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);

        $slug = Str::of($request->name)->slug('-');

        $category = new Category();

        $category = Category::find($id);

        $data = [
            'name' => $request->name,
            'name' => $slug,
        ];

        if (request()->hasFile('photo') && request('photo') != '') {
            $imagePath = public_path('assets/images/categories/' . $category->photo);
            if ($category->photo && File::exists($imagePath)) {
                unlink($imagePath);
            }
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images/categories'), $imageName);
            $data['photo'] = $imageName;
            $category->update($data);
        } else {
            $category->update($data);
        }

        return redirect('category')->with('message', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        
        $imagePath = public_path('assets/images/categories/' . $category->photo);
        if (File::exists($imagePath) && $category->photo) {
            unlink($imagePath);
        }
        $category->delete();


        return redirect('category')->with('message', 'Category Deleted Successfully!');
    }
}
