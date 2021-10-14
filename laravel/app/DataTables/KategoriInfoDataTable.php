<?php

namespace App\DataTables;

use App\Models\KategoriInfo;

/**
 * Class PostDataTable
 */
class KategoriInfoDataTable
{
    /**
     * @return KategoriInfo
     */
    public function get()
    {
        /** @var KategoriInfo $query */
        $query = KategoriInfo::query()->select('kategori_informations.*');
        return $query;
    }
}
