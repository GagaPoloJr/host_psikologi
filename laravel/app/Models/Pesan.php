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
class Pesan extends Model
{
    // use SoftDeletes;

    use HasFactory;
    public $timestamps = false;
    public $table = 'contacts';

    // protected $dates = ['deleted_at'];

    public $fillable = [
        'nama',
        'email',
        'pesan',
        'status'

      
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

    protected $casts = [
        'nama' => 'string',
        'email' => 'string',
        'pesan' => 'string',
        'status' => 'string',


    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama'             => 'required',
        'email'             => 'required',
        'pesan'             => 'required',
        'status'             => 'required',



    ];

    
}
