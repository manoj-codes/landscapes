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
        'title', 'description', 'img', 'date', 'featured'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function photographer()
    {
        return $this->belongsTo(Photographer::class);
    }
}
