<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.items.index', [
            'items' => Item::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.items.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:items',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('item-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Item::create($validatedData);

        return redirect('/dashboard/items')->with('success', 'Data Barang berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('dashboard.items.show', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('dashboard.items.edit', [
            'item' => $item,
            'categories' => Category::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $rules = [
            'name' => 'required|max:255',
            'price' => 'required',
            'stock' => 'required',
            'slug' => 'required|unique:categories',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required'
        ];

        if($request->slug != $item->slug) {
            $rules['slug'] = 'required|unique:items';
        }

        $validatedData = $request->validate($rules);
        
        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('item-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Item::where('id', $item->id)
                ->update($validatedData);

        return redirect('/dashboard/items')->with('success', 'Data Barang berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if($item->image) {
            Storage::delete($item->image);
        }

        Item::destroy($item->id);

        return redirect('/dashboard/items')->with('success', 'Data Barang Berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Item::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
