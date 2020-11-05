<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * @package App\Models
 * @version September 3, 2020, 3:45 am UTC
 *
 * @property integer $user_id
 * @property integer $camp_id
 * @property integer $category_id
 * @property string $body
 */
class Comment extends Model
{
    use SoftDeletes;

    public $table = 'comments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'camp_id',
        'category_id',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'camp_id' => 'integer',
        'category_id' => 'integer',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'camp_id' => 'nullable|integer',
        'category_id' => 'nullable|integer',
        'body' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
