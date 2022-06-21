<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teatcher extends Model
{
    protected $fillable  =['id', 'name','img','spec','desc','email','phone'];

    
    public function course(){
        return $this->hasMany('App\Models\course');
    }




    use HasFactory;
}
