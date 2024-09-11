<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspirasi;
use Illuminate\Support\Str;

class InspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mylist', [
            'data' => Inspirasi::where('user_id', auth()->user()->id)->get(),
            'name' => auth()->user()->name
        ]);
    }

    public function create()
    {
        return view('buat', [
            'name' => auth()->user()->name
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Inspirasi $buku)
    {
        // dd($request); // dapet, tiggal if else aja di tambah-buku, biar gambar tidak hilang saat refresh error
        $rules = [
            'judul' => 'required|max:200',
            'gambar' => 'image|file',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['author'] = auth()->user()->name;
        $validatedData['judul'] = Str::limit(strip_tags($request->judul), 200);
        $validatedData['judul'] = preg_replace('#</?(div|/).*?>#is', '', $request->judul);
        $input['judul'] = preg_replace('#</?div.*?>#is', '', $request->judul);
        $validatedData['name'] = preg_replace('#</?(div|/).*?>#is', '', auth()->user()->name);

        $data = Inspirasi::create($validatedData);

        if ($image = $request->file('gambar')) {
            $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $fileName . "-" . time() . "." . $image->getClientOriginalExtension();
            $uploadPath = 'img/koleksi';
            $image->move($uploadPath, $imageName);
            $data->gambar = $imageName;
            $data->save();
        }

        return redirect('/home-page')->with(['success' => 'Buku berhasil ditambahkan']);
    }
    /**
     * Display the specified resource.
     */
    public function show(Inspirasi $inspirasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Inspirasi $inspirasi)
    {
        $idinspirasi = inspirasi::findOrFail($id);
        if ($idinspirasi->user_id !== auth()->user()->id) {
            abort(403);
        }

        // dd($idinspirasi);
        return view('edit', [
            'data' => $idinspirasi,
            'gambar' => asset('icon-bookita-fix.png')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Inspirasi $inspirasi)
    {
        $inspirasiId = $inspirasi->findOrFail($id);
        // dd($inspirasiId->id);

        $rules = [
            'judul' => 'required',
            'gambar' => 'image|file'
        ];

        $input = $request->validate($rules);

        $input['user_id'] = auth()->user()->id;
        $input['judul'] = Str::limit(strip_tags($request->judul), 200);
        $input['judul'] = preg_replace('#</?(div|/).*?>#is', '', $request->judul);
        $input['judul'] = preg_replace('#</?div.*?>#is', '', $request->judul);

        if ($image = $request->file('gambar')) {
            if ($request->oldImage) {
                unlink('img/koleksi/' . $request->oldImage);
            }

            $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $fileName . "-" . time() . "." . $image->getClientOriginalExtension();
            $uploadPath = 'img/koleksi/';
            $image->move($uploadPath, $imageName);
            $input['gambar'] = $imageName;
        }

        Inspirasi::where('id', $id)->update($input);
        // $inspirasi->update($input);

        return redirect('/mylist')->with(['success' => 'inspirasi berhasil diedit']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inspirasi = Inspirasi::findOrFail($id);

        if ($inspirasi->gambar) {
            unlink('img/koleksi/' . $inspirasi->gambar);
        }
        Inspirasi::destroy($inspirasi->id);

        return redirect('/mylist');
        // return redirect('/mylist')->with(['success' => 'Postingan berhasil dihapus']);
    }

    public function semua(Request $request)
    {
        $cari = $request->cari;
        $data = Inspirasi::get()->sortByDesc('id');

        if ($cari) {
            $data = Inspirasi::where('author', 'like', '%' . $cari . '%')->orWhere('judul', 'like', '%' . $cari . '%')->get();
        }

        return view('home-page', [
            'data' => $data,
            'nama' => auth()->user()->name
        ]);

        return view('jelajahi', [
            'data' => $data,
            'nama' => auth()->user()->name
        ]);
    }
}
