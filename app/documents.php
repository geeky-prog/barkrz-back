<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    //
    protected $fillable = [
        "name", "user_id" , "url"
    ];
    
    function user() {
        return $this->belongsTo(User::class,"user_id");
    }
}
