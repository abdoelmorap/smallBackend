<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model{
    
    protected $table = 'gallery';
    

   protected $fillable = [
       'alt',
       'url',
       'type'
   ];

    
}