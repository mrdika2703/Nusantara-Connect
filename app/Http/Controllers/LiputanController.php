<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\liputan;
use App\Models\provinsi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LiputanController extends Controller
{
    public function liputans()
    {
        $liputan = Liputan::orderBy('created_at')->paginate(10); // Pastikan menggunakan paginate()
        $jadwal = Jadwal::orderBy('tanggal_jadwal')->take(4)->get();
        $CKesenian = Liputan::where('jenis_budaya', 'kesenian')->count();
        $CTradisi = Liputan::where('jenis_budaya', 'tradisi')->count();
        $CKuliner = Liputan::where('jenis_budaya', 'kuliner')->count();

        return view('home.liputan.index', [
            'liputan' => $liputan,
            'jadwal' => $jadwal,
            'CKesenian' => $CKesenian,
            'CTradisi' => $CTradisi,
            'CKuliner' => $CKuliner
        ]);
    }


    public function detilLiputan(liputan $liputan)
    {
        $liputan->load('provinsi');
        $jadwal = Jadwal::orderBy('tanggal_jadwal')->take(4)->get();
        return view('home.liputan.detil', [
            'liputan' => $liputan,
            'jadwal' => $jadwal
        ]);
    }

    public function liputan(Request $request)
    {
        $title = $request->query('title', 'Edit Liputan'); // Mengambil title dari query string, jika tidak ada gunakan default
        $liputan = liputan::all();
        $provinsi = provinsi::all();
        $liputan->load('provinsi');
        $authh = Auth::user();
        return view('admin.EditLiputan', [
            'liputan' => $liputan,
            'title' => $title,
            'provinsi' => $provinsi,
            'authh' => $authh
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'jenis' => 'required|string|max:255',
            'liputan_daerah' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'penjelasan' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.liputan')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Data gagal ditambahkan.');
        }

        // Mengunggah gambar
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/liputan'), $imageName);
        }

        // Menyimpan data ke database
        Liputan::create([
            'jenis_budaya' => $request->jenis,
            'liputan_daerah' => $request->liputan_daerah,
            'nama_liputan' => $request->judul,
            'penjelasan_liputan' => $request->penjelasan,
            'gambar_liputan' => '/images/liputan/' . $imageName,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.liputan')->with('success', 'Liputan berhasil ditambahkan');
    }

    public function edit(Liputan $liputan, Request $request)
    {
        $title = $request->query('title', 'Edit Liputan');
        $authh = Auth::user();
        $liputan->load('provinsi');
        $provinsi = provinsi::all();
        return view('admin.edit-liputan', [
            'liputan' => $liputan,
            'title' => $title,
            'provinsi' => $provinsi,
            'authh' => $authh
        ]);
    }

    public function update(Request $request, Liputan $liputan)
    {
        $validateData = $request->validate([
            'judul' => 'required|string|max:255',
            'jenis' => 'required|string|in:tradisi,kesenian,kuliner',
            'asal' => 'required|string',
            'penjelasan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images/liputan'), $imageName);
            $validateData['gambar'] = "/images/liputan/{$imageName}";
        }

        $liputan->update($validateData);

        return redirect()->route('admin.liputan')->with('success', "Liputan {$validateData['judul']} berhasil diedit");
    }

    public function destroy(Liputan $liputan)
    {
        $liputan->delete();
        return redirect()->route('admin.liputan')
            ->with('success', "Hapus data $liputan->nama_liputan berhasil");
    }
}
