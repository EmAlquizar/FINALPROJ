<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class InventoryController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('master')->with('items', $items);
    }
    public function store()
    {
    	$item = new Item;
    	$item->name = request()->name;
        $item->quantity = request()->quantity;
        $item->category = request()->category;
        $item->save();
        return $item;
    }
     public function delete(Item $item)
    {
          $item->delete();
          return "Item was deleted successfully";     
    }
    
}
