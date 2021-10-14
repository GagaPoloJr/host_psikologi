<?php

namespace App\Repositories;

use App\Models\FileDatabase;
use App\Repositories\BaseRepository;

/**
 * Class PostRepository
 * @package App\Repositories
 * @version September 23, 2021, 1:30 pm UTC
*/

class FileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_file',
        'file',
        'jenis_file',
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
        return FileDatabase::class;
    }
}
