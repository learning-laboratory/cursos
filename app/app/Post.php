<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    
    
    protected $fillable = [ 'user_id','photo_id','title','body' ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function categories(){
    	return $this->belongsToMany('App\Category');
    }
    
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
    
    public function photo(){
    	return $this->belongsTo('App\Photo');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }


    /**
     * Sluggable configuration.
     *
     * @var array
     */
    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title',
            ]
        ];
    }
}
