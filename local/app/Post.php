<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'path', 'description', 'content', 'img_primary','img_sub_list', 'is_active', 'post_type', 'user_id', 'seo_id','is_hot'
];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function manaycategoryitems($type)
    {
        return $this->belongsToMany('App\ManyCategoryItem', 'many_category_items', 'item_id', 'category_id')->withPivot('type')->wherePivot('type',$type)->withTimestamps();
    }
    public function seos(){
        return $this->belongsTo('App\Seo','seo_id');
    }
    public function prepareParameters($parameters)
    {
        return $parameters;
    }
}
