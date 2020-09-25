<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model{

    public $directory = "/images/";
 	use SoftDeletes;

 	protected $date 	= ['deleted_at'];

    protected $fillable = [
    	'title',
    	'content',
        'path'
    ];

    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }

    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    public function tags(){
    	return $this->morphToMany('App\Tag','taggables');
    }

    public static function scopeLates($query)
    {
        return $query->orderBy('id','asc')->get(); 
    }

    public function getPathAttribute($value)
    {
        return $this->$directory.$value;
    }
}
