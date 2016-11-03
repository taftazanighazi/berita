<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Berita;
use App\Kategori;
use DB;

class BeritaController extends Controller
{
   public function __construct(){
      $this->middleware('auth');
   }
    public function index(Request $request)
    {
        $berita=DB::table('beritas')->join('kategoris','beritas.id_kategori','=','kategoris.id_kategori')->paginate(5);
        return view('index_berita',compact('berita'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori=Kategori::pluck('kategori','id_kategori');

        return view('tambah_berita',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $b= new Berita();

        $b->judul = $request->judul;
        $b->isi_berita=$request->isi;
        $b->id_kategori=$request->kategori;
        $b->save();
        return redirect()->route('berita.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita=Berita::findOrFail($id);
        $k=Kategori::pluck('kategori','id_kategori');
        return view('edit_berita',compact('k','berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $berita = new Berita();
        $berita=Berita::findOrFail($id);
        $berita->judul=$request['judul'];
        $berita->isi_berita=$request['isi_berita'];
        $berita->id_kategori=$request['id_kategori'];

        $berita->update();
        $berita->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('berita.index');
    }
}
