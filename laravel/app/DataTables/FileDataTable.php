<?php

namespace App\DataTables;

use App\Models\FileDatabase;

/**
 * Class PostDataTable
 */
class FileDataTable
{
    /**
     * @return FileDatabase
     */
    public function get()
    {
        /** @var FileDatabase $query */
        $query = FileDatabase::query()->select('file_databases.*');
        return $query;
    }
}
