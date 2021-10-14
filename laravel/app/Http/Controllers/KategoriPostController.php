<?php

namespace App\Http\Controllers;

use App\Models\KategoriPost;

use App\DataTables\KategoriPostDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\Http\Requests\CreateKategoriPostRequest;

use App\Http\Requests\UpdateKategoriPostRequest;

use App\Repositories\KategoriPostRepository;

use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;
use Illuminate\Support\Str;


class KategoriPostController extends AppBaseController
{
    
     /** @var  KategoriPostRepository */
  
    private $kategoripostRepository;



    public function __construct(KategoriPostRepository $kategoripostRepo)
    {
        $this->middleware('auth');
        $this->kategoripostRepository = $kategoripostRepo;
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
            return Datatables::of((new KategoriPostDataTable())->get())->make(true);
        }
    
        return view('post_kategori.index');
    }


    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('post_kategori.create_kategori');
    }


    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreateKategoriPostRequest $request)
    {
        $input = $request->all();
        $post = $this->kategoripostRepository->create($input);
        return redirect(route('kategori.index'))->with('success','Post saved successfully.' );
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
        $kat_post = $this->kategoripostRepository->find($id);

        if (empty($kat_post)) {
            Flash::error('Kategori not found');

            return redirect(route('kategori.index'));
        }

        return view('post_kategori.show')->with('pengurus_kats', $kat_post);
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
        $kat_post = $this->kategoripostRepository->find($id);

        if (empty($kat_post)) {
            Flash::error('Kategori not found');

            return redirect(route('kategori.index'));
        }

        return view('post_kategori.edit_kategori')->with('kat_post', $kat_post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int              $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKategoriPostRequest $request)
    {
        $kat_post = $this->kategoripostRepository->find($id);

        if (empty($kat_post)) {
            Flash::error('kategori not found');

            return redirect(route('kategori.index'));
        }

        $kat_post = $this->kategoripostRepository->update($request->all(), $id);

        Flash::success('Kategori updated successfully.');

        return redirect(route('kategori.index'));
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
        $kat_post = $this->kategoripostRepository->find($id);

        $kat_post->delete();

        return $this->sendSuccess('Kategori deleted successfully.');
    }
}