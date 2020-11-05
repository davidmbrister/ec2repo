<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\BaseRepository;

/**
 * Class PaymentRepository
 * @package App\Repositories
 * @version September 3, 2020, 3:46 am UTC
*/

class PaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'camp_id',
        'amount',
        'status',
        'mode_of_payment',
        'payment_processor'
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
        return Payment::class;
    }
}
