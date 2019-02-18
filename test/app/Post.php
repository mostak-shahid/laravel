<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title', 'content', 'category_id', 'feature'
	];
    public function category()
    {
        return $this -> belongsto('App\Category');
    }   
}
