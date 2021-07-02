<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    //==========ここから追加==========
    protected $fillable = [
        'title',
        'body',
    ];
    //==========ここまで追加==========

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
