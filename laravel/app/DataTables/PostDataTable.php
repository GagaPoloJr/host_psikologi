<?php

namespace App\DataTables;

use App\Models\Post;

/**
 * Class PostDataTable
 */
class PostDataTable
{
    /**
     * @return Post
     */
    public function get()
    {
        /** @var Post $query */
        $id_user =\Illuminate\Support\Facades\Auth::user()->id;
        $query = Post::leftjoin(
            'pengurus_kats as pk', 'pk.id', '=', 'posts.id_kat_pengurus')
        ->select('posts.*','pk.nama_kat_peng')
        ->where('posts.user_id', $id_user);
        return $query;
    }
}
