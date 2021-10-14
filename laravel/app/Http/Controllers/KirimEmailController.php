<?php
 
namespace App\Http\Controllers;
use App\Models\Pesan;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
 
class KirimEmailController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function kirim(Request $request)
    {
        // $email = 'rahmadiihaikal@gmail.com';
        // $data = [
        //     'title' => 'Selamat datang!',
        //     'url' => 'https://aantamim.id',
        // ];
        // Mail::to($email)->send(new SendMail($data));
        

        $this->validate($request, [
            "nama" => "required",
            "email" => "required",
            "pesan" => "required",

        ]);
        $subject = $request->nama;
        $email = $request->email;
        $pesan = $request->pesan;
        $data = [
            'title' => 'Selamat datang!',
            'url' => 'https://aantamim.id',
            'pesan' => $pesan
        ];
        Mail::to($email)->send(new SendMail($subject, $data));
        return 'Berhasil mengirim email!';

    }
}