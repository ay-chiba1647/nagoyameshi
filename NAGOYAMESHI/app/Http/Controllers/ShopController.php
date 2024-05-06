<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        if ($request->category !== null) {
            $shops = Shop::where('category_id', $request->category)->sortable()->paginate(5);
            $total_count = Shop::where('category_id', $request->category)->count();
            $category = Category::find($request->category);
        }elseif ($keyword !== null){
            $shops = Shop::where('name', 'like', "%{$keyword}%")->sortable()->paginate(5);
            $total_count = $shops->total();
            $category = null;
        } else {
            $shops = Shop::sortable()->paginate(5);
            $total_count = "";
            $category = null;
        }
        $categories = Category::all();
        $major_category_names = Category::pluck('major_category_name')->unique();

        return view('shops.index', compact('shops','category', 'categories','major_category_names', 'total_count', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('shops.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new Shop();
        $shop->name = $request->input('name');
        $shop->description = $request->input('description');
        $shop->price_under = $request->input('price_under');
        $shop->price_over = $request->input('price_over');
        $shop->category_id = $request->input('category_id');
        $shop->open_our = $request->input('open_our');
        $shop->close_our = $request->input('close_our');
        $shop->postal_code = $request->input('postal_code');
        $shop->address = $request->input('address');
        $shop->phone = $request->input('phone');
        $shop->holiday = $request->input('holiday');
        $shop->save();

        return to_route('shops.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        $reviews = $shop->reviews()->get();
  
        return view('shops.show', compact('shop', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        $categories = Category::all();
  
        return view('shops.edit', compact('shop', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $shop->name = $request->input('name');
        $shop->description = $request->input('description');
        $shop->price_under = $request->input('price_under');
        $shop->price_over = $request->input('price_over');
        $shop->category_id = $request->input('category_id');
        $shop->open_our = $request->input('open_our');
        $shop->close_our = $request->input('close_our');
        $shop->postal_code = $request->input('postal_code');
        $shop->address = $request->input('address');
        $shop->phone = $request->input('phone');
        $shop->holiday = $request->input('holiday');
        $shop->update();

        return to_route('shops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();

        return to_route('shops.index');
    }
}
