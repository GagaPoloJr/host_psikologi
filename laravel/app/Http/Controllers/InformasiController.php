<?php

namespace App\Http\Controllers;
use App\Models\Informasi;
use App\Models\KategoriInfo;
use App\DataTables\InformasiDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateInformasiRequest;

use App\Http\Requests\UpdateInformasiRequest;
use App\Repositories\InformasiRepository;
use DB;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;


class InformasiController extends AppBaseController
{
    /** @var  InformasiRepository */
   
    private $informasiRepository;
 
    public function __construct(InformasiRepository $infoRepo)
    {
        $this->middleware('auth');
        $this->informasiRepository = $infoRepo;
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
            return Datatables::of((new InformasiDataTable())->get())->make(true);
        }
    
        return view('informasi.index');
    }

  

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        $categories=KategoriInfo::get();
        return view('informasi.create', compact('categories'));
    }


    /**
     * Store a newly created Post in storage.
     *
     * @param CreateInformasiRequest $request
     *
     * @return Response
     */
    public function store(CreateInformasiRequest $request)
    {
        $input = new Informasi;
        $input->title = $request->title;
        $input->slug_title = Str::slug($input->title, '-'); 
        $body= $request->body;
        $input->id_kategori = $request->id_kategori;
        $input->status = $request->status;


        // upload image thumbnail
        $file=$request->file('thumbnail');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file/informasi';
		$file->move($tujuan_upload,$nama_file);
        $input->thumbnail=$nama_file;
       

        // upload image di dalam summernote content
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
        $input->save();
        // Flash::success('Post saved successfully.');
        return redirect(route('informasi.index'))->with('success','Informasi saved successfully.' );
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
        $informasi = $this->informasiRepository->find($id);

        if (empty($informasi)) {
            Flash::error('Informasi not found');

            return redirect(route('informasi.index'));
        }
    
        return view('informasi.show')->with('informasi', $informasi);
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
        $informasi = $this->informasiRepository->find($id);

        if (empty($informasi)) {
            Flash::error('informasi not found');

            return redirect(route('informasi.index'));
        }
        $categories=KategoriInfo::get();
        return view('informasi.edit', compact('categories'))->with('informasi', $informasi);

    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int              $id
     * @param UpdateInformasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInformasiRequest $request)
    {
        $informasi = $this->informasiRepository->find($id);
        $input = new Informasi;
        $input->title = $request->title;
        $input->slug_title = Str::slug($input->title, '-'); 
        $body= $request->body;
        $input->id_kategori = $request->id_kategori;
        $input->status = $request->status;


        // upload image di dalam summernote content
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
            $file_path = public_path().'/data_file/informasi/'.$request->old_thumbnail;
            unlink($file_path);
            $file=$request->file('thumbnail');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'data_file/informasi';
            $file->move($tujuan_upload,$nama_file);
            $input->thumbnail=$nama_file;
        }
        $input->body = $body;
        $update_info= [
            'title' =>  $input->title,
            'slug_title' => $input->slug_title,
            'body' =>  $input->body,
            'id_kategori' => $input->id_kategori,
            'status' =>   $input->status,
            'thumbnail' =>  $input->thumbnail,
        ];
        Informasi::whereId($id)->update($update_info);

        return redirect(route('informasi.index'))->with('success','Informasi updated successfully.' );
    
 
       
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
        $informasi = $this->informasiRepository->find($id);
        $file_path = public_path().'/data_file/'.$informasi->thumbnail;
        unlink($file_path);
        $informasi->delete();

        return $this->sendSuccess('informasi deleted successfully.');
    }
}
