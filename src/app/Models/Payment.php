<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package App\Models
 * @version September 3, 2020, 3:46 am UTC
 *
 * @property integer $user_id
 * @property integer $camp_id
 * @property number $amount
 * @property string $status
 * @property string $mode_of_payment
 * @property string $payment_processor
 */
class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'camp_id',
        'amount',
        'status',
        'mode_of_payment',
        'payment_processor'
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
        'amount' => 'float',
        'status' => 'string',
        'mode_of_payment' => 'string',
        'payment_processor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'camp_id' => 'required|integer',
        'amount' => 'required|numeric',
        'status' => 'required|string|max:255',
        'mode_of_payment' => 'nullable|string|max:255',
        'payment_processor' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
