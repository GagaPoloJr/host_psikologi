<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\KategoriPost;
use App\DataTables\PostDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;

use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use DB;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class PostController extends AppBaseController
{
    /** @var  PostRepository */
   
    private $postRepository;
 
    public function __construct(PostRepository $postRepo)
    {
        $this->middleware('auth');
        $this->postRepository = $postRepo;
    }
    /**
     * Display a listing of the Post.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new PostDataTable())->get())->make(true);
        }
    
        return view('posts.index');
    }

  

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        $categories=KategoriPost::get();
        // return view('posts.create');
        return view('posts.create', compact('categories'));

    }



    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $input = new Post;
        $input->title = $request->title;
        $input->slug_title = Str::slug($input->title, '-'); 
        $body = $request->body;
        $kategori_pembagian = $request->kategori_pembagian;
        $input->kategori_pembagian = Str::slug($kategori_pembagian, '-');
        $input->id_kat_pengurus = $request->id_kat_pengurus;
        $input->status = $request->status;
        $input->user_id =\Illuminate\Support\Facades\Auth::user()->id;
        
        
        $file=$request->file('thumbnail');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        $input->thumbnail=$nama_file;

        $storage_upload ="uploads";
        $dom= new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml($body,LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');
        
        foreach ($imageFile as $img) {
            $src=$img->getAttribute('src');
            if(preg_match('/data:image/', $src)){
                preg_match('/data:image\/(?<mime>.*?)\;/', $src,$groups);
                $mimetype=$groups['mime'];
                $fileNameContent=uniqid();
                $fileNameContentRand=substr(md5($fileNameContent),6,6).'_'.time();
                $filepath=("$storage_upload/$fileNameContentRand.$mimetype");
                $image=Image::make($src)
                    ->resize(500,500, function ($const)
                    {
                    $const->aspectRatio();
                    })
                    ->encode($mimetype,100)
                    ->save(public_path($filepath));
                $new_src=asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src',$new_src);
                $img->setAttribute('class','img-responsive');
            }
        }
        $body = $dom->saveHTML();
        $input->body = $body;
        // $input = $request->all();
        // $post = $this->postRepository->create($input);
        $input->save();
        // Flash::success('Post saved successfully.');
        return redirect(route('posts.index'))->with('success','Post saved successfully.' );
    }


    /**
     * Display the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }
        $categories=KategoriPost::get();
        return view('posts.edit', compact('categories'))->with('post', $post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int              $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */

        

    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->postRepository->find($id);
        $input = new Post;
        $input->title = $request->title;
        $input->slug_title = Str::slug($input->title, '-'); 
        $body = $request->body;
        $input->kategori_pembagian = $request->kategori_pembagian;
        $input->id_kat_pengurus = $request->id_kat_pengurus;
        $input->status = $request->status;
        $input->user_id =\Illuminate\Support\Facades\Auth::user()->id;
       

        $storage_upload ="uploads";
        $dom= new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml($body,LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');
        
        foreach ($imageFile as $img) {
            $src=$img->getAttribute('src');
            if(preg_match('/data:image/', $src)){
                preg_match('/data:image\/(?<mime>.*?)\;/', $src,$groups);
                $mimetype=$groups['mime'];
                $fileNameContent=uniqid();
                $fileNameContentRand=substr(md5($fileNameContent),6,6).'_'.time();
                $filepath=("$storage_upload/$fileNameContentRand.$mimetype");
                $image=Image::make($src)
                    ->resize(500,500, function ($const)
                    {
                    $const->aspectRatio();
                    })
                    ->encode($mimetype,100)
                    ->save(public_path($filepath));
                $new_src=asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src',$new_src);
                $img->setAttribute('class','img-responsive');
            }
        }
        $body = $dom->saveHTML();
        if (empty($request->file('thumbnail')))
        {
            $input->thumbnail=$request->old_thumbnail;

        }
        else{
            $file_path = public_path().'/data_file/'.$request->old_thumbnail;
            unlink($file_path);
            $file=$request->file('thumbnail');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $input->thumbnail=$nama_file;
        }
        $input->body = $body;
        $update_post = [
            'title' =>  $input->title,
            'slug_title' => $input->slug_title,
            'body' =>  $input->body,
            'kategori_pembagian' =>  $input->kategori_pembagian,
            'id_kat_pengurus' => $input->id_kat_pengurus,
            'status' =>   $input->status,
            'user_id' => $input->user_id,
            'thumbnail' =>  $input->thumbnail,



        ];
       
        Post::whereId($id)->update($update_post);
        
        return redirect(route('posts.index'))->with('success','Post updated successfully.' );
    
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->find($id);
        $file_path = public_path().'/data_file/'.$post->thumbnail;
        unlink($file_path);
        $post->delete();

        return $this->sendSuccess('Post deleted successfully.');
    }
}
