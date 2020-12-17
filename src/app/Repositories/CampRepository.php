<?php

namespace App\Repositories;

use App\Models\Camp;
use App\Repositories\BaseRepository;

/**
 * Class CampRepository
 * @package App\Repositories
 * @version December 16, 2020, 4:18 pm UTC
*/

class CampRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Camp::class;
    }
}
