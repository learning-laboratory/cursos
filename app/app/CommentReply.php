<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    protected $fillable = [
		'commment_id',
		'author',
		'email',
		'body',
		'is_active'
	];

	public function comment()
	{
		return $this->belongsTo('App\Comment');
	}
}
