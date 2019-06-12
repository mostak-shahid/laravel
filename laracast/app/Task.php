<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $guarded = [];
    public function project()
    {
    	return $this->belongsTo(Project::class);
    }
    public  function complete($completed = true)
    {
    	// $this->update(['completed' => $completed]);
    	//or we can use 
    	$this->update(compact('completed'));

    }
    public function incomplete()
    {
    	$this->complete(false);
    }
}
