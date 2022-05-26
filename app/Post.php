<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [ 'title','slug','id','content' ];


    public function tag(){
        return $this->belongsToMany('App\Tag');
    }

    static public function slugheratore($title) {
        $slug = Str::of($title)->slug('-');
        $i = 1;
        while (Post::where('slug', $slug)->first()) {
            $slug = "$slug - $i" ;
            $i++;
        }
        return $slug;
    }
}
