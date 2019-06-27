<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Checklist;
use App\Item;
use App\Events\ItemChecked;
use App\Events\ItemAdded;

class ItemController extends Controller
{

    public function store($hash, Request $request)
    {
        $checklist = Checklist::where('hash', $hash)->first();
        if(!$checklist) {
            return response()->json(['error' => 'Sorry, a checklist with this hash does not exist'], 403);
        }

        $item = $checklist->items()->create([
            'item' => $request->input('item')
        ]);

        event(new ItemAdded($item->checklist));

        return $item->checklist;
    }

    public function update($hash, Item $item, Request $request)
    {
        if($item->checklist->hash !== $hash) {
            return response()->json(['error' => 'This item not present in the correct checklist'], 403);
        }

        $item->update($request->all());

        event(new ItemChecked($item->checklist));

        return $item->checklist;
    }

}
