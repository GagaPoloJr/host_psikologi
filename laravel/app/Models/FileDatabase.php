<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models
 * @version September 23, 2021, 1:30 pm UTC
 *
 * @property string $name
 */
class FileDatabase extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'file_databases';



    public $fillable = [
        'nama_file',
        'file',
        'jenis_file',
        'kategori_file',

     
    ];

   

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_file'          => 'string',
        'file'               => 'string',
        'jenis_file'         => 'string',
        'kategori_file'         => 'string',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_file'         => 'required',
        'file'              => 'required',
        'jenis_file'        => 'required',
        'kategori_file'        => 'required',

    ];
    
}
