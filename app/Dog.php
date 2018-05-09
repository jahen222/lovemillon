<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public $table = 'dogs';

    public $fillable = [
        'name',
        'image',
        'race',
        'bio',
        'gender',
        'age',
        'dead',
        'country',
        'owner_name',
        'owner_email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'image' => 'string',
        'race' => 'string',
        'bio' => 'string',
        'gender' => 'string',
        'age' => 'integer',
        'dead' => 'boolean',
        'country' => 'string',
        'owner_name' => 'string',
        'owner_email' => 'string'
    ];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function race()
    {
        return $this->belongsTo('App\Race');
    }
}
