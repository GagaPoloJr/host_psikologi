<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;

/**
 * Class PostRepository
 * @package App\Repositories
 * @version September 23, 2021, 1:30 pm UTC
*/

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'slug_title',
        'kategori_pembagian',
        'id_kat_pengurus',
        'status',
    ];

    protected $katfieldSearchable = [
        'nama_kategori',
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

    public function getKatFieldsSearchable()
    {
        return $this->katfieldSearchable;
    }


    /**
     * Configure the Model
     **/
    public function model()
    {
        return Post::class;
    }
}
