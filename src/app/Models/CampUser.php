<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CampUser
 * @package App\Models
 * @version September 3, 2020, 3:44 am UTC
 *
 * @property integer $user_id
 * @property integer $camp_id
 * @property integer $user_account_id
 * @property string|\Carbon\Carbon $paid_date
 * @property number $paid_amount
 * @property boolean $status
 */
class CampUser extends Model
{
    use SoftDeletes;

    public $table = 'camp_user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'camp_id',
        'user_account_id',
        'paid_date',
        'paid_amount',
        'status'
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
        'user_account_id' => 'integer',
        'paid_date' => 'datetime',
        'paid_amount' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'camp_id' => 'required|integer',
        'user_account_id' => 'required|integer',
        'paid_date' => 'nullable',
        'paid_amount' => 'nullable|numeric',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
