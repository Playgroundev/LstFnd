<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function StoreItem(Request $request){
        $this->validate($request,[
            'category' => 'required',
            'item_name' => 'required',
            'serial_number' => 'required',
            'description' => 'required'
        ]);
        $item = new Item([
            'category' => $request->input('category'),
            'item_name' => $request->input('item_name'),
            'serial_number' => $request->input('serial_number'),
            'description' => $request->input('description'),
            'user_id'=>Auth::user()->id,
        ]);
        $item->save();
        return redirect()->back()->with("status","Item Have Been Saved");
    }

    public function showGetPage(){
        return view('Items.create');
    }

    public function showAll(){
        $items = Item::paginate(10);

        return view('Items.show',compact('items'));
    }
}
