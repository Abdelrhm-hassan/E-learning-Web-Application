<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable  =['id','name','img','spec','desc','cat_id','teatcher_id','price'];

    public function cat(){
        return $this->belongsTo('App\Models\cat');
    }
    public function student(){
        return $this->belongsToMany('App\Models\student');
    }
    public function teatcher(){
        return $this->belongsTo('App\Models\teatcher');
    }



    use HasFactory;
}
