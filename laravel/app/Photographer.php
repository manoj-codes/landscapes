<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'email', 'bio', 'profile_picture'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
