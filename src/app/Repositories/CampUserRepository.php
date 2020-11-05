<?php

namespace App\Repositories;

use App\Models\CampUser;
use App\Repositories\BaseRepository;

/**
 * Class CampUserRepository
 * @package App\Repositories
 * @version September 3, 2020, 3:44 am UTC
*/

class CampUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'camp_id',
        'user_account_id',
        'paid_date',
        'paid_amount',
        'status'
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
        return CampUser::class;
    }
}
