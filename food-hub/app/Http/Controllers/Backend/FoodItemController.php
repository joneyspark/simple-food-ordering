<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FoodItem;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class FoodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = FoodItem::with('category')
            ->orderBy('name', 'asc')
            ->paginate(10);

        // return $foods;

        return view('layouts.food.index')->with(['foods' => $foods]);
    }

    // api foods
    public function foods()
    {
        $foods = FoodItem::with('category')
            ->orderBy('name', 'asc')
            ->get();
        // ->paginate(10);

        // return $foods;

        return response($foods);
        // return view('layouts.food.index')->with(['foods' => $foods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('layouts.food.create')->with(['categories' => $categories]);
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
            'name' => 'required|unique:food_items,name',
            'price' => 'required|decimal:2',
            'photo' => 'required|image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048',
            'ingredients' => 'required|string|max:500',
            'categories_id' => 'required|string',
            'rating' => 'required|numeric|between:0,5.00',
        ]);

        $imageName = time() . '.' . $request->photo->extension();

        FoodItem::create([
            'name' => $request->name,
            'price' => $request->price,
            'ingredients' => $request->ingredients,
            'description' => $request->description,
            'rating' => $request->rating,
            'categories_id' => $request->categories_id,
            'photo' => $imageName,
        ]);
        $request->photo->move(public_path('assets/images/foods'), $imageName);
        return redirect('foods')->with('message', 'Food Item Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = FoodItem::find($id);
        $categories = Category::orderBy('name', 'asc')->get();
        return view('layouts.food.edit', compact('food', 'categories'));
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
            'price' => 'required|decimal:2',
            'photo' => 'image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048',
            'ingredients' => 'required|string|max:500',
            'categories_id' => 'required|string',
            'rating' => 'required|numeric|between:0,5.00',
        ]);

        $food = new FoodItem();
        $food = FoodItem::find($id);
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'ingredients' => $request->ingredients,
            'description' => $request->description,
            'rating' => $request->rating,
            'categories_id' => $request->categories_id,
            // 'photo' => $imageName,
        ];

        if (request()->hasFile('photo') && request('photo') != '') {
            $imagePath = public_path('assets/images/foods/' . $food->photo);
            if ($food->photo && File::exists($imagePath)) {
                unlink($imagePath);
            }
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images/foods'), $imageName);
            $data['photo'] = $imageName;
            $food->update($data);
        } else {
            $food->update($data);
        }

        return redirect('foods')->with('message', 'Food Item Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = FoodItem::find($id);
        
        $imagePath = public_path('assets/images/foods/' . $food->photo);
        if (File::exists($imagePath) && $food->photo) {
            unlink($imagePath);
        }
        $food->delete();


        return redirect('foods')->with('message', 'Food Item Deleted Successfully!');
    }
}
