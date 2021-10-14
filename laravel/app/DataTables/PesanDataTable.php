<?php

namespace App\DataTables;

use App\Models\Pesan;

/**
 * Class PostDataTable
 */
class PesanDataTable
{
    /**
     * @return Pesan
     */
    public function get()
    {
        /** @var Pesan $query */
        $query = Pesan::query()->select('contacts.*');
        return $query;
    }
}
