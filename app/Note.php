<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

use \Conner\Tagging\Taggable;

	protected $fillable = [
		'title',
		'body'
	];
	
	public function user() {
		return $this->belongsTo('App\User');
	}
	
// 	public function tags() {
// 		return $this->belongsToMany('App\Tag')->withTimestamps();
// 	}
}
