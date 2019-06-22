<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checklist;
use Illuminate\Support\Str;

class ChecklistController extends Controller
{

    public function create()
    {
        $checklist = Checklist::create([
            'hash' => Str::random(32)
        ]);

        return redirect()->route('checklists.show', ['hash' => $checklist->hash]);
    }

    public function show(string $hash)
    {
        $checklist = Checklist::where('hash', $hash)
            ->with('items')
            ->first();

        if(!$checklist) {
            return abort(404);
        }

        return view('checklists.show', [
            'checklist' => $checklist
        ]);
    }

}
