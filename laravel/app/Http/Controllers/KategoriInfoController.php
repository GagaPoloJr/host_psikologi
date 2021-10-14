<?php

namespace App\Http\Controllers;

use App\Models\KategoriInfo;
use App\DataTables\KategoriInfoDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\Http\Requests\CreateKategoriInfoRequest;

use App\Http\Requests\UpdateKategoriInfoRequest;

use App\Repositories\KategoriInfoRepository;

use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;
use Illuminate\Support\Str;


class KategoriInfoController extends AppBaseController
{
    
     /** @var  KategoriInfoRepository */
  
    private $kategoriInfoRepository;



    public function __construct(KategoriInfoRepository $kategoriinfoRepo)
    {
        $this->middleware('auth');
        $this->kategoriInfoRepository = $kategoriinfoRepo;
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
            return Datatables::of((new KategoriInfoDataTable())->get())->make(true);
        }
    
        return view('kategori_informasi.index');
    }


    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('kategori_informasi.create_kategori');
    }


    /**
     * Store a newly created Post in storage.
     *
     * @param CreateInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateKategoriInfoRequest $request)
    {
        $input = $request->all();
        $info = $this->kategoriInfoRepository->create($input);
        return redirect(route('kategori_informasi.index'))->with('success','Info saved successfully.' );
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
        $kat_post = $this->kategoriInfoRepository->find($id);

        if (empty($kat_post)) {
            Flash::error('Kategori not found');

            return redirect(route('kategori_informasi.index'));
        }
        $hash=new Hashids();
        return view('kategori_informasi.show')->with('kategori_informations', $kat_post);
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
        $kat_post = $this->kategoriInfoRepository->find($id);

        if (empty($kat_post)) {
            Flash::error('Kategori not found');

            return redirect(route('kategori_informasi.index'));
        }

        return view('kategori_informasi.edit_kategori')->with('kat_post', $kat_post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int              $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKategoriInfoRequest $request)
    {
        $kat_post = $this->kategoriInfoRepository->find($id);

        if (empty($kat_post)) {
            Flash::error('kategori not found');

            return redirect(route('kategori_informasi.index'));
        }

        $kat_post = $this->kategoriInfoRepository->update($request->all(), $id);

        Flash::success('Kategori updated successfully.');

        return redirect(route('kategori_informasi.index'));
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
        $kat_post = $this->kategoriInfoRepository->find($id);

        $kat_post->delete();

        return $this->sendSuccess('Kategori deleted successfully.');
    }
}