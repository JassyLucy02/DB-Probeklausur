<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\View\View;



class ItemController extends Controller
{
    public function showAllItems(): View
    {   
        // hier wird die view angegeben 
        return view('items', [
            // allItems ist hier als variabel deklariert worden
            'allItems' => Item::all()
        ]);
    }

    public function showSingleItems(string $item_id): View
    {   
        // hier wird die view angegeben 
        return view('item', [
            // allItems ist hier als variabel deklariert worden
            'singleItem' => Item::findOrFail($item_id)
        ]);
    }
}