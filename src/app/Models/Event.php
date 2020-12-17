<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Event
 * @package App\Models
 * @version December 15, 2020, 12:51 am UTC
 *
 * @property string $title
 * @property string $start
 * @property string $end
 * @property boolean $allDay
 * @property string $description
 * @property string $type
 */
class Event extends Model
{
    use SoftDeletes;

    public $table = 'events';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'start',
        'end',
        'allDay',
        'description',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'start' => 'date',
        'end' => 'date',
        'allDay' => 'boolean',
        'description' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'title' => 'required|string|max:255',
        'start' => 'required',
        'end' => 'required',
        'allDay' => 'required|boolean',
        'description' => 'required|string|max:255',
        'type' => 'required|string|max:255'
    ];

    
}
