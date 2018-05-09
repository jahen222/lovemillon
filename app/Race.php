<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    public $table = 'races';

    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function dogs()
    {
        return $this->hasMany('App\Dog');
    }
}
