<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'title', 'slug', 'content', 'category_id', 'feature'
	];

	public function getFeatureAttribute($feature)
	{
		return asset($feature);
	}

	protected $dates = ['deleted_at'];
    public function category()
    {
        return $this -> belongsto('App\Category');
    }   
}
