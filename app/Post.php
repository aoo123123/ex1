<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //SELECT * FROM post INNER JOIN categories ON posts.category_id
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
