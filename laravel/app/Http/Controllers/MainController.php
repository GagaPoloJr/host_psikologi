<?php

namespace App\Http\Controllers;
use Hashids\Hashids;
use App\Models\Post;
use App\Models\Informasi;
use App\Models\FileDatabase;
use App\Models\Contact;
use Alert;


use Illuminate\Http\Request;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Cookie;
class MainController extends Controller
{
    //halaman utama bem psikologi
    public function index()
    {
        $title = "Selamat Datang di Website BEM Psikologi Universitas Diponegoro 2021";
        // $posts = Post::all();
        $hash=new Hashids();
        $informations= Informasi::leftjoin(
            'kategori_informations as ki', 'ki.id', '=', 'informations.id')
            ->select('informations.*','ki.nama_kategori')
            ->where('informations.status', 'publish')

            ->limit(3)
            ->orderByRaw('informations.id DESC')
            ->get();
        $articles= Post::leftjoin(
            'pengurus_kats as pk', 'pk.id', '=', 'posts.id_kat_pengurus')
            ->select('posts.*','pk.nama_kat_peng')
            ->where('posts.status', 'publish')
            ->limit(3)

            ->orderByRaw('posts.id DESC')
            ->get();
            // ->where('posts.id',$hash->decodeHex($id));
        return view('main.landing_page', compact('articles', 'hash', 'informations', 'title'));
    }

    // fungsi detail artikel
    public function detail_post($id, $slug)
    {
        
        // $posts = Post::all();
        $hash=new Hashids();
        $post= Post::leftjoin(
            'pengurus_kats as pk', 'pk.id', '=', 'posts.id_kat_pengurus')
            ->select('posts.*','pk.*')
            ->where('posts.slug_title',$slug)
            ->first();
            // ->get();
        
            $kategori =$post->id_kat_pengurus;

            // print($kategori);
        $kategori_post= Post::leftjoin(
            'pengurus_kats as pk', 'pk.id', '=', 'posts.id_kat_pengurus')
            ->select('posts.*','pk.*')
            ->where('posts.id_kat_pengurus',$kategori)
            ->limit(4)
            ->orderByRaw('posts.id DESC')
            ->get();
        
            
        // if(Cookie::get($view->id)!=''){
        //     Cookie::set('$view->id', '1', 60);
            // $view->incrementReadCount();
        // }
        return view('main.detail_page', compact('post', 'kategori_post', 'hash'));
    }

    public function dokumen()
    {
        $dokumen=FileDatabase::all();
        return view('main.database', compact('dokumen'));
    }
    public function artikel()
    {
        $title = "Kumpulan Artikel BEM UNDIP 2021";
        $hash=new Hashids();
        $articles= Post::leftjoin(
            'pengurus_kats as pk', 'pk.id', '=', 'posts.id_kat_pengurus')
            ->select('posts.*','pk.nama_kat_peng')
            ->where('posts.status', 'publish')
            ->orderByRaw('posts.id DESC')
            ->paginate(6);
            // ->get();
            // ->where('posts.id',$hash->decodeHex($id));
        $main_artikel= Post::leftjoin(
            'pengurus_kats as pk', 'pk.id', '=', 'posts.id_kat_pengurus')
            ->select('posts.*','pk.nama_kat_peng')
            ->where('posts.status', 'publish')

            ->limit(1)
            ->orderByRaw('posts.id DESC')
            ->get();
      
        $kategori = array('Press Release','Kajian');
      
        return view('main.artikel', compact('articles', 'hash', 'main_artikel', 'kategori', 'title'));
    }

    public function informasi()
    {
        $hash=new Hashids();
        $informasi= Informasi::leftjoin(
            'kategori_informations as ki', 'ki.id', '=', 'informations.id_kategori')
            ->select('informations.*','ki.nama_kategori')
            ->where('informations.status', 'publish')

            ->orderByRaw('informations.id DESC')
            ->paginate(6);
        $main_informasi= Informasi::leftjoin(
            'kategori_informations as ki', 'ki.id', '=', 'informations.id_kategori')
            ->select('informations.*','ki.nama_kategori')
            ->where('informations.status', 'publish')
            ->limit(1)
            ->orderByRaw('informations.id DESC')
            ->get();
          
        return view('main.informasi', compact('informasi', 'hash', 'main_informasi'));
    }

    public function detail_informasi($id, $slug)
    {

        
        // $posts = Post::all();
        $hash=new Hashids();
        $informasi= Informasi::leftjoin(
            'kategori_informations as ki', 'ki.id', '=', 'informations.id_kategori')
            ->select('informations.*','ki.*')
            ->where('informations.slug_title',$slug)
            ->first();
            $kategori =$informasi->id_kategori;
            // print($kategori);
        $kategori_post= Informasi::leftjoin(
            'kategori_informations as ki', 'ki.id', '=', 'informations.id_kategori')
            ->select('informations.*','ki.*')
            ->where('informations.id_kategori',$kategori)
            ->limit(4)
            ->orderByRaw('informations.id DESC')
            ->get();
        
        return view('main.detail_informasi', compact('informasi', 'kategori_post', 'hash'));
    }


    public function kategori($slug)
    {
        $hash=new Hashids();

        $kategori= Post::leftjoin(
            'pengurus_kats as pk', 'pk.id', '=', 'posts.id_kat_pengurus')
            ->select('posts.*','pk.nama_kat_peng')
            ->where('posts.kategori_pembagian', $slug)
            ->orderByRaw('posts.id DESC')
            ->paginate(6);
            // ->get();
            // ->where('posts.id',$hash->decodeHex($id));
      
        return view('main.kategori_artikel', compact('kategori', 'hash'));
    }


    public function createForm(Request $request) {
        return view('main.contact');
      }

      public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'nama' => 'required|min:3|max:50|alpha_num',
            'email' => 'required|email',
            'pesan' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        // 
        Alert::success('Berhasil mengirim pesan');
        return redirect('/');
    }
}