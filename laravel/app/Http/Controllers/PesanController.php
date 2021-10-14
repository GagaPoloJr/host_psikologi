<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\DataTables\PesanDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\Http\Requests\CreatePesanRequest;

use App\Http\Requests\UpdatePesanRequest;

use App\Repositories\PesanRepository;
use DB;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Alert;

class PesanController extends AppBaseController
{
    
     /** @var  PesanRepository */
  
    private $pesanRepository;



    public function __construct(PesanRepository $pesanRepo)
    {
        $this->middleware('auth');
        $this->pesanRepository = $pesanRepo;
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
            return Datatables::of((new PesanDataTable())->get())->make(true);
        }
    
        return view('pesan.index');
    }


    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    // public function create()
    // {
    //     return view('pesan.create');
    // }


    /**
     * Store a newly created Post in storage.
     *
     * @param CreateInfoRequest $request
     *
     * @return Response
     */
    public function store(CreatePesanRequest $request)
    {
        $input = $request->all();
        $info = $this->pesanRepository->create($input);
        return redirect(route('pesan.index'))->with('success','Info saved successfully.' );
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
        $pesan = $this->pesanRepository->find($id);

        if (empty($pesan)) {
            Flash::error('Kategori not found');

            return redirect(route('pesan.index'));
        }
        return view('pesan.show')->with('pesan', $pesan);
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
        $pesan = $this->pesanRepository->find($id);

        if (empty($pesan)) {
            Flash::error('Pesan not found');

            return redirect(route('pesan.index'));
        }

        return view('pesan.create')->with('pesan', $pesan);
    }

   
    /**
     * Remove the specified Post from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
   

    public function kirim(Request $request)
    {
        $this->validate($request, [
            "nama" => "required",
            "email" => "required",
            "pesan" => "required",
            "nama_pengirim" => "required",
            "email_pengirim" => "required",
            "pesan_pengirim" => "required",


        ]);
        $id = $request->id;
        $subject = $request->nama;
        $email = $request->email;
        $pesan = $request->pesan;
        $nama_pengirim = $request->nama_pengirim;
        $email_pengirim = $request->email_pengirim;
        $pesan_pengirim = $request->pesan_pengirim;
        $data = [
            'title' => 'Selamat datang!',
            'url' => 'http://localhost:8000',
            'pesan' => $pesan,
            'nama_pengirim' => $nama_pengirim,
            'pesan_pengirim' => $pesan_pengirim,

        ];        
            Mail::to($email)->send(new SendMail($subject, $data));
            $update_status =DB::table('contacts')->where('id', $id)->update([
                'status' => "Sudah Dibalas",
                ]);
            Alert::success('Berhasil mengirim email');
            return redirect('/pesan');
        
    

    }

    public function destroy($id)
    {
        $pesan = $this->pesanRepository->find($id);

        $pesan->delete();

        return $this->sendSuccess('Pesan deleted successfully.');
    }
}