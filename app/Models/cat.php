<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    protected $fillable  =['id', 'name'];


    public function course(){
        return $this->hasMany('App\Models\course');
    }
   



    use HasFactory;
}
