<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $guarded = ['id']; 
    // protected $garted =['id'];

    public function course(){
        return $this->belongsToMany('App\Models\course');
    }

    use HasFactory;
}
