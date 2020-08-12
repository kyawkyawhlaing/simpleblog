<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = ['name'];
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'images',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
