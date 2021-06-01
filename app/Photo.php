<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * The attributes that are mass assignable.
     *album_id	photo	title	size	description
     * @var array
     */
    protected $fillable = [
        'album_id', 'photo', 'title','size','description'
    ];

    /**
     * A photo belongs to an Album
     *
     * @var array
     */

    public function album(){
        return $this->belongsTo('App\Album');
    }
}
