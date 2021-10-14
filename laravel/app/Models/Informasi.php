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
class Informasi extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'informations';

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'body',
        'thumbnail',
        'slug_title',
        'id_kategori',
        'status'
    ];

   

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title'              => 'string',
        'body'               => 'string',
        'thumbnail'          => 'string',
        'slug_title'         => 'string',
        'id_kategori'        => 'string',
        'status'             => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title'             => 'required',
        'body'              => 'required',
        'id_kategori'        => 'required',
        'status'            => 'required',
        // 'thumbnail'            => 'required',


    ];


    
}
