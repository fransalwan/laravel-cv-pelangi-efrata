<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' dari ' . $category->name;
        }

        return view('items', [
            "title" => "Semua Barang" . $title,
            "items" => Item::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString()
        ]);
    }

public function show(Item $item)
    {
        return view('detail_item', [
            "title" => "Detail Item",
            "item" => $item
        ]);
    }
}
