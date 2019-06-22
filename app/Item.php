<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ItemChecked;

class Item extends Model
{

    protected $guarded = [];

    public function checklist()
    {
        return $this->belongsTo(Checklist::class);
    }

}
