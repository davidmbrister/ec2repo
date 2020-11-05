<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Coupon
 * @package App\Models
 * @version September 11, 2020, 3:26 pm UTC
 *
 * @property integer $user_id
 * @property integer $category_id
 * @property integer $user_account_id
 * @property string $available_on_course_page
 * @property string $type
 * @property number $price
 * @property string $status
 * @property string|\Carbon\Carbon $expiry
 * @property number $countdown_timer
 * @property integer $total_available
 * @property integer $remaining
 */
class Coupon extends Model
{
    use SoftDeletes;

    public $table = 'coupons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'category_id',
        'user_account_id',
        'available_on_course_page',
        'type',
        'price',
        'status',
        'expiry',
        'countdown_timer',
        'total_available',
        'remaining'
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
        'user_account_id' => 'integer',
        'available_on_course_page' => 'string',
        'type' => 'string',
        'price' => 'float',
        'status' => 'string',
        'expiry' => 'datetime',
        'countdown_timer' => 'float',
        'total_available' => 'integer',
        'remaining' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'nullable|integer',
        'category_id' => 'nullable|integer',
        'user_account_id' => 'nullable|integer',
        'available_on_course_page' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'price' => 'required|numeric',
        'status' => 'required|string|max:255',
        'expiry' => 'required',
        'countdown_timer' => 'nullable|numeric',
        'total_available' => 'required|integer',
        'remaining' => 'nullable|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
