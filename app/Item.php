<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Events\ItemChecked;

class Item extends Model
{

    protected $guarded = [];

    protected static function boot() {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('is_complete', 'asc');
            $builder->orderBy('created_at', 'desc');
        });
    }

    public function checklist()
    {
        return $this->belongsTo(Checklist::class);
    }

}
