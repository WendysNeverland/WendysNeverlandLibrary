<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AuthorBook extends Pivot
{
    protected $guarded = [];

    protected function author()
    {
        return $this->belongsTo('App\Author');
    }

    protected function book()
    {
        return $this->belongsTo('App\Book');
    }
}
