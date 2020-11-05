<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Camp
 * @package App\Models
 * @version September 11, 2020, 6:59 pm UTC
 *
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
        'tags'
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
        'tags' => 'string'
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
        'subscriber_count' => 'integer',
        'tags' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


      public function category()
      {   // any camp belongs to a Category, and it's associated category fields should be accessible by this function
          return $this->belongsTo('App\Models\Category');
      }

      public function user()
      {   // any camp belongs to a Category, and it's associated category fields should be accessible by this function
          return $this->belongsTo('App\Models\User');
      }

}
