<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\BaseRepository;

/**
 * Class CommentRepository
 * @package App\Repositories
 * @version September 3, 2020, 3:45 am UTC
*/

class CommentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'camp_id',
        'category_id',
        'body'
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
        return Comment::class;
    }
}
