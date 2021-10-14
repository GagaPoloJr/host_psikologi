<?php

namespace App\DataTables;

use App\Models\KategoriPost;

/**
 * Class PostDataTable
 */
class KategoriPostDataTable
{
    /**
     * @return KategoriPost
     */
    public function get()
    {
        /** @var KategoriPost $query */
        $query = KategoriPost::query()->select('pengurus_kats.*');
        return $query;
    }
}
