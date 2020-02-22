<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $guarded=[];
    protected $fillable = ["title","slug","contents"];
    
    // alias route get by slug
    public function getRouteKeyName(){
        return "slug";
    }
}
