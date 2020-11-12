<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comments";

    protected $fillable = ['comment','namePersonComment','item_id','created_at','updated_at'];


    public function item(){
        return $this->belongsTo('App\Item','item_id');
    }
}
