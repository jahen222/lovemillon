<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $table = 'countries';

    public $fillable = [
        'sortname',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sortname' => 'string',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sortname' => 'required',
        'name' => 'required'
    ];

    public function dogs()
    {
        return $this->hasMany('App\Dog');
    }
}
