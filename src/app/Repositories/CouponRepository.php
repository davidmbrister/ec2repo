<?php

namespace App\Repositories;

use App\Models\Coupon;
use App\Repositories\BaseRepository;

/**
 * Class CouponRepository
 * @package App\Repositories
 * @version September 11, 2020, 3:26 pm UTC
*/

class CouponRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Coupon::class;
    }
}
