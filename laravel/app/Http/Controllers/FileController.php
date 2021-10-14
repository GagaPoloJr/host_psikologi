<?php

namespace App\Http\Controllers;
use App\Models\FileDatabase;
use App\DataTables\FileDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Repositories\FileRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;
use Illuminate\Support\Str;


class FileController extends AppBaseController
{
    /** @var  FileRepository */
   
    private $fileRepository;
 
    public function __construct(FileRepository $fileRepo)
    {
        $this->middleware('auth');
        $this->fileRepository = $fileRepo;
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
            return Datatables::of((new FileDataTable())->get())->make(true);
        }
    
        return view('file.index');
    }

  

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('file.create');
    }


    /**
     * Store a newly created Post in storage.
     *
     * @param CreateFileRequest $request
     *
     * @return Response
     */
    public function store(CreateFileRequest $request)
    {
        $input = new FileDatabase;
        $input->nama_file = $request->nama_file;
        $input->jenis_file = $request->jenis_file;
        $input->kategori_file = $request->kategori_file;

        $file=$request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file/database';
		$file->move($tujuan_upload,$nama_file);

        $input->file=$nama_file;
        // $input = $request->all();
        // $post = $this->postRepository->create($input);
        $input->save();
        // Flash::success('Post saved successfully.');
        return redirect(route('file.index'))->with('success','File saved successfully.' );
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
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            Flash::error('file not found');

            return redirect(route('file.index'));
        }
        return view('file.show')->with('file', $file);
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
        $file = $this->fileRepository->find($id);
        if (empty($file)) {
            Flash::error('file not found');

            return redirect(route('file.index'));
        }
        return view('file.edit')->with('file', $file);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int              $id
     * @param UpdateFileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileRequest $request)
    {
        $file = $this->fileRepository->find($id);


        $input = new FileDatabase;
        $input->nama_file = $request->nama_file;
        $input->jenis_file = $request->jenis_file;
        $input->kategori_file = $request->kategori_file;

        if (empty($request->file('file')))
        {
            $input->file=$request->old_file;

        }
        else
        {
            $file_path = public_path().'/data_file/database/'.$request->old_file;
            unlink($file_path);
            $file=$request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'data_file/database';
            $file->move($tujuan_upload,$nama_file);
            $input->file=$nama_file;
        }

        $update_post = [
            'nama_file' =>  $input->nama_file,
            'jenis_file' => $input->jenis_file,
            'kategori_file' =>  $input->kategori_file,
            'file' =>  $input->file,
        ];
       
        // $input = $request->all();
        // $post = $this->postRepository->create($input);
        FileDatabase::whereId($id)->update($update_post);
        // return view('file.edit')->with('file', $file);
        return redirect(route('file.index'))->with('success','Post updated successfully.' );
    }

    /**
     * Remove the specified file from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $file = $this->fileRepository->find($id);

        $file->delete();

        return $this->sendSuccess('file deleted successfully.');
    }
}
