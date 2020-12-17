<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Camp
 * @package App\Models
 * @version December 16, 2020, 4:18 pm UTC
 *
 * @property \App\Models\Event $event
 * @property integer $user_id
 * @property integer $category_id
 * @property string $title
 * @property string $description
 * @property string $photo
 * @property string $video
 * @property integer $status
 * @property string $what_will_student_learn
 * @property string $age_group
 * @property integer $capacity
 * @property number $discount_price
 * @property number $standard_price
 * @property integer $subscriber_count
 * @property string $tags
 * @property integer $event_id
 * @property string $start
 * @property string $end
 * @property boolean $allDay
 */
class Camp extends Model
{
    use SoftDeletes;

    public $table = 'camps';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'photo',
        'video',
        'status',
        'what_will_student_learn',
        'age_group',
        'capacity',
        'discount_price',
        'standard_price',
        'subscriber_count',
        'tags',
        'event_id',
        'start',
        'end',
        'allDay'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'photo' => 'string',
        'video' => 'string',
        'status' => 'integer',
        'what_will_student_learn' => 'string',
        'age_group' => 'string',
        'capacity' => 'integer',
        'discount_price' => 'float',
        'standard_price' => 'float',
        'subscriber_count' => 'integer',
        'tags' => 'string',
        'event_id' => 'integer',
        'start' => 'date',
        'end' => 'date',
        'allDay' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'integer',
        'category_id' => 'required|integer',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'photo' => 'nullable|string|max:255',
        'video' => 'nullable|string|max:255',
        'status' => 'required|integer',
        'what_will_student_learn' => 'nullable|string',
        'age_group' => 'nullable|string|max:255',
        'capacity' => 'nullable|integer',
        'discount_price' => 'nullable|numeric',
        'standard_price' => 'required|numeric',
        'subscriber_count' => 'nullable|integer',
        'tags' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'event_id' => 'nullable',
        'start' => 'required',
        'end' => 'required',
        'allDay' => 'required|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function event()
    {
        return $this->belongsTo(\App\Models\Event::class, 'event_id');
    }
}
