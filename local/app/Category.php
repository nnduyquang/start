<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id','title','path','description','img_primary','image_mobile','img_sub_list','img_primary_mobile','parent_id','type','level','is_active','user_id','created_at','updated_at'
    ];
    protected $table = 'categories';
    protected $hidden = ['id'];
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'many_category_items', 'category_id', 'item_id')->withTimestamps();
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'many_category_items', 'category_id', 'item_id')->withTimestamps();
    }
}
