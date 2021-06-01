<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cover_image', 'description',
    ];

     /**
     * An album has many photos
     *
     * @var array
     */

    public function photos(){
        return $this->hasMany('App\Photo');
    }
}


