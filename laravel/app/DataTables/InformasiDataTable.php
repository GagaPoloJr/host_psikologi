<?php

namespace App\DataTables;

use App\Models\Informasi;

/**
 * Class PostDataTable
 */
class InformasiDataTable
{
    /**
     * @return Informasi
     */
    public function get()
    {
        /** @var Informasi $query */
        $query = Informasi::query()->select('informations.*');
        return $query;
    }
}
