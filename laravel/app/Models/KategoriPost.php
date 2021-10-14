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
class KategoriPost extends Model
{
    // use SoftDeletes;

    use HasFactory;
    public $timestamps = false;
    public $table = 'pengurus_kats';

    // protected $dates = ['deleted_at'];

    public $fillable = [
        'nama_kat_peng',
      
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

    protected $casts = [
        'nama_kat_peng' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_kat_peng'             => 'required',

    ];

    
}
