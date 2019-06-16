<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded =[];
    public static function findBySlug($slug)
    {
    	return new Page([
    		'title' => Str::title(str_replace('-', ' ', $slug)),
    		'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia totam distinctio repellat blanditiis, quam perferendis, qui, natus dolores expedita excepturi iure fugit. Saepe nihil beatae, quisquam commodi modi, ipsum, aperiam ipsa esse nulla, quaerat rem. Dignissimos magni iusto tempora perspiciatis veniam facilis quo explicabo, aut qui obcaecati laudantium. Quaerat, repellat.',
    		'slug' => $slug,
    	]);
    }
}
