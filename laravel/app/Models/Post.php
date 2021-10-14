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
class Post extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'posts';

    // protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'body',
        'thumbnail',
        'slug_title',
        'kategori_pembagian',
        'id_kat_pengurus',
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
        'kategori_pembagian' => 'string',
        'id_kat_pengurus'    => 'int',
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
        'kategori_pembagian'=> 'required',
        // 'id_kat_pengurus'   => 'required',
        'status'            => 'required',

    ];

    // public function incrementReadCount() {
    //     $this->count++;
    //     return $this->save();
    // }


    
}
