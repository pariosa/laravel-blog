<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
	protected $table = 'blogs';

    protected $fillable = [
        'title', 'body', 'user_id',
    ];

    public function user(){
    	return $this->hasOne('App\User', 'user_id', 'user_id');
    }
}
