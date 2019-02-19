<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AudioBookNarrator extends Pivot
{

    protected $guarded = [];

    protected function audioBook()
    {
        return $this->belongsTo('App\AudioBook');
    }

    protected function narrator()
    {
        return $this->belongsTo('App\Narrator');
    }

}
