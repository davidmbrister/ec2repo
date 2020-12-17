<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
/**
 * Class User
 * @package App\Models
 * @version September 10, 2020, 5:58 pm UTC
 *
 * @property string $name
 * @property string $first_name
 * @property string $last_name
 * @property string $date_of_birth
 * @property boolean $is_subscribed
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property integer $view_count
 * @property integer $role_id
 * @property string $remember_token
 */
class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'first_name',
        'last_name',
        'date_of_birth',
        'is_subscribed',
        'email',
        'email_verified_at',
        'password',
        'view_count',
        'role_id',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'date_of_birth' => 'date',
        'is_subscribed' => 'boolean',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'view_count' => 'integer',
        'role_id' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'first_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'date_of_birth' => 'nullable',
        'is_subscribed' => 'nullable|boolean',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'view_count' => 'required|integer',
        'role_id' => 'required|integer',
        'remember_token' => 'nullable|string|max:100',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
