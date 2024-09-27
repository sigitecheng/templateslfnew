<?php

namespace App\Http\Controllers;

use App\Models\asosiasipengusaha;
use App\Models\ketertiban;
use App\Models\metodepengadaan;
use App\Models\paketpekerjaan;
use App\Models\Penanggungjawabteknis;
use App\Models\pengawasanbangunangedung;
use App\Models\pengawasanketertiban;
use App\Models\pengawasanlokasi;
use App\Models\pengawasanstatus;
use App\Models\pengawasantindakan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; // Pastikan Anda mengimpor facade ini

use Carbon\Carbon;


class DatajakonController extends Controller
{
    //

    public function asosiasi()
    {
        
        $user = Auth::user();

        
        return view('frontend.03_datajakon.01_asosiasi', [
            'title' => 'Asosiasi Pengusaha ',
            'user' => $user,

           
        ]);
    }

    // ===========================================================
    // PENGAWASAN DAN KETERTIBAN 

    public function pengawasandanketertiban()
    {
        
        $ketertiban = ketertiban::paginate(15);
        $user = Auth::user();

        return view('backend.03_datajakon.01_pengawasanketertiban.index', [
            'data' => $ketertiban,
            'user' => $user,
            'title' => 'Pengawasan & Ketertiban',
           
        ]);

    }

    public function pengawasandanketertibanshowbyjudul($judul)
    {
        $datapengwasanketertiban = ketertiban::where('judul', $judul)->firstOrFail();
        $user = Auth::user();
        $datapengawasanlokasi = pengawasanlokasi::all();
        $datapengawasanbangunan = pengawasanbangunangedung::all();
        $datapenanggungjawabteknis = Penanggungjawabteknis::all();
        $datapengawasanstatus = pengawasanstatus::all();
        $datapengawasantindakan = pengawasantindakan::all();

        return view('backend.03_datajakon.01_pengawasanketertiban.show', [
            'data' => $datapengwasanketertiban,
            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datapengawasanbangunan' => $datapengawasanbangunan,
            'datapenanggungjawabteknis' => $datapenanggungjawabteknis,
            'datapengawasanstatus' => $datapengawasanstatus,
            'datapengawasantindakan' => $datapengawasantindakan,
            'user' => $user,
            'title' => 'Details Ketertiban & Pengawasan',
        ]);
    }

    // ------------------------------------------------------------
                    // -------------------- UPDATE PENGAWASAN DAN KETERTIBAN  ----------------------
                    public function updatepengawasandanketertiban($judul)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $datapengawasanketertiban = ketertiban::where('judul', $judul)->firstOrFail();
                        $user = Auth::user();

                        $datapengawasanlokasi = pengawasanlokasi::all();
                        $datapengawasanbangunan = pengawasanbangunangedung::all();
                        $datapenanggungjawabteknis = Penanggungjawabteknis::all();
                        $datapengawasanstatus = pengawasanstatus::all();
                        $datapengawasantindakan = pengawasantindakan::all();

       
                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.03_datajakon.01_pengawasanketertiban.update', [
                            'data' => $datapengawasanketertiban,
                            'datapengawasanlokasi' => $datapengawasanlokasi,
                            'datapengawasanbangunan' => $datapengawasanbangunan,
                            'datapenanggungjawabteknis' => $datapenanggungjawabteknis,
                            'datapengawasanstatus' => $datapengawasanstatus,
                            'datapengawasantindakan' => $datapengawasantindakan,
                            'user' => $user,
                            'title' => 'Update Pengawasan & Ketertiban'
                        ]);
                    }
                    
                    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                    public function createupdatepengawasandanketertiban(Request $request, $judul)
                    {
                        // Validasi input
                        $request->validate([
                            'pengawasanlokasi_id' => 'required|integer|max:255',
                            'pengawasanbangunangedung_id' => 'required|integer|max:255',
                            'penanggungjawabteknis_id' => 'required|integer|max:255',
                            'pengawasanstatus_id' => 'required|integer|max:255',
                            'pengawasantindakan_id' => 'required|integer|max:255',
                            'judul' => 'required|string|max:255',
                            'tanggal_laporan' => 'required|date',
                            'keterangan' => 'required|string|max:255',
                        ]);
                    
                        // Cari data ketertiban berdasarkan judul
                        $dataketertiban = ketertiban::where('judul', $judul)->firstOrFail();
                    
                        // Update data ketertiban dengan data dari form
                        $dataketertiban->update([
                            'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
                            'pengawasanbangunangedung_id' => $request->input('pengawasanbangunangedung_id'),
                            'penanggungjawabteknis_id' => $request->input('penanggungjawabteknis_id'),
                            'pengawasanstatus_id' => $request->input('pengawasanstatus_id'),
                            'pengawasantindakan_id' => $request->input('pengawasantindakan_id'),
                            'judul' => $request->input('judul'),
                            'tanggal_laporan' => $request->input('tanggal_laporan'),
                            'keterangan' => $request->input('keterangan'),
                        ]);
                    
                        // Flash pesan session
                        session()->flash('update', 'Data Pengawasan & Ketertiban Berhasil Diupdate!');
                    
                        // Redirect ke halaman yang sesuai
                        return redirect('/pengawasandanketertiban');
                    }

                    // =====================================================
                                    
    //================ DELETE DATA ASOSIASI PENGUSAHA  ========================== 
    public function deletepengawasandanketertiban($id)
    {
        // Cari entri berdasarkan judul
        $entry = ketertiban::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            ketertiban::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/pengawasandanketertiban');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/pengawasandanketertiban');
        }
    }

    

    public function createpengawasandanketertiban()
    {
        $user = Auth::user();
        
        $datapengawasanlokasi = pengawasanlokasi::all();
        $datapengawasanbangunan = pengawasanbangunangedung::all();
        $datapenanggungjawabteknis = Penanggungjawabteknis::all();
        $datapengawasanstatus = pengawasanstatus::all();
        $datapengawasantindakan = pengawasantindakan::all();


        // Tampilkan form update dengan data yang ditemukan
        return view('backend.03_datajakon.01_pengawasanketertiban.create', [
            'title' => 'Create Pengawasan & Ketertiban',
            'user' => $user,
            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datapengawasanbangunan' => $datapengawasanbangunan,
            'datapenanggungjawabteknis' => $datapenanggungjawabteknis,
            'datapengawasanstatus' => $datapengawasanstatus,
            'datapengawasantindakan' => $datapengawasantindakan,
                            
        ]);
    }

    public function createstorepengawasandanketertiban(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'pengawasanlokasi_id' => 'required|integer|max:255',
            'pengawasanbangunangedung_id' => 'required|integer|max:255',
            'penanggungjawabteknis_id' => 'required|integer|max:255',
            'pengawasanstatus_id' => 'required|integer|max:255',
            'pengawasantindakan_id' => 'required|integer|max:255',
            'tanggal_laporan' => 'required|date',
            'keterangan' => 'required|string|max:255',
        ]);
    
        // Buat entri baru di database
        ketertiban::create([
            'judul' => $request->input('judul'),
            'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
            'pengawasanbangunangedung_id' => $request->input('pengawasanbangunangedung_id'),
            'penanggungjawabteknis_id' => $request->input('penanggungjawabteknis_id'),
            'pengawasanstatus_id' => $request->input('pengawasanstatus_id'),
            'pengawasantindakan_id' => $request->input('pengawasantindakan_id'),
            'tanggal_laporan' => $request->input('tanggal_laporan'),
            'keterangan' => $request->input('keterangan'),
        ]);
    
        session()->flash('create', 'Data Berhasil Di Tambahkan !');
        // Redirect ke halaman yang sesuai
        return redirect('/pengawasandanketertiban');
    }
        

    // ========================================================
    // ASOSIASI PENGUSAHA

    public function asosiasipengusaha()
    {
        $user = Auth::user();

        $dataasosiasi = asosiasipengusaha::paginate(15);
        return view('backend.03_datajakon.02_asosiasipengusaha.index', [
            'data' => $dataasosiasi,
            'user' => $user,
            'title' => 'Asosiasi Pengusaha ',
           
        ]);

        // $datauser = user::paginate(15);
        // $datastatusadmin = statusadmin::all();
        
        // return view('backend.15_administrator.user.index', [
        //     'title' => 'Daftar User Admin Sipjaki ',
        //     'datauser' => $datauser,  
        //     'datastatusadmin' => $datastatusadmin,  
           
        // ]);
    }

    public function asosiasipengusahashowbyjudul($nama_asosiasi)
    {
        $dataasosiasipengusaha = asosiasipengusaha::where('nama_asosiasi', $nama_asosiasi)->firstOrFail();
        $user = Auth::user();

        return view('backend.03_datajakon.02_asosiasipengusaha.show', [
            'data' => $dataasosiasipengusaha,
            'user' => $user,
            'title' => 'Details Asosiasi Pengusaha',
        ]);
    }
    
                // -------------------- UPDATE ASOSIASI PENGUSAHA ----------------------
            public function updateasosiasipengusaha($nama_asosiasi)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $dataasosiasipengusaha = asosiasipengusaha::where('nama_asosiasi', $nama_asosiasi)->firstOrFail();
                    $user = Auth::user();
   
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.03_datajakon.02_asosiasipengusaha.update', [
                        'dataasosiasipengusaha' => $dataasosiasipengusaha,
                        'user' => $user,
                    
                        'title' => 'Update Asosiasi Pengusaha'
                    ]);
                }
                
                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            
                public function createupdateasosiasipengusaha(Request $request, $nama_asosiasi)
                {
                    // Validasi input
                    $request->validate([
                        'nama_asosiasi' => 'required|string|max:255',
                        'alamat_kantor' => 'required|string|max:255',
                        'kota' => 'required|string|max:255',
                        'provinsi' => 'required|string|max:255',
                        'kontak' => 'required|string|max:255',
                        'email' => 'required|string|email|max:255',
                        'website' => 'required|string|max:255',
                        'kepala_asosiasi' => 'required|string|max:255',
                        // 'tanggal_berdiri' => 'required|date_format:Y-m-d',
                        'jumlah_anggota' => 'required|integer',
                        'status' => 'required|string|max:255',
                        'foto_asosiasi' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
                    ]);
                
                    // Cari data asosiasipengusaha berdasarkan nama
                    $dataasosiasipengusaha = asosiasipengusaha::where('nama_asosiasi', $nama_asosiasi)->firstOrFail();
                
                    // Path folder penyimpanan
                    $storagePath = storage_path('app/public/asosiasipengusaha');
                
                    // Cek dan buat folder jika tidak ada
                    if (!File::exists($storagePath)) {
                        File::makeDirectory($storagePath, 0755, true);
                    }
                
                    // Simpan file foto_asosiasi dan ambil path-nya
                    $filePath = $dataasosiasipengusaha->foto_asosiasi; // Default ke foto yang ada jika tidak ada file baru
                    if ($request->hasFile('foto_asosiasi')) {
                        $file = $request->file('foto_asosiasi');
                        $filePath = $file->store('asosiasipengusaha', 'public');
                    }
                
                    // Format tanggal sudah sesuai
                    // $tanggalBerdiri = $request->input('tanggal_berdiri');
                
                    // Update data asosiasipengusaha dengan data dari form
                    $dataasosiasipengusaha->update([
                        'nama_asosiasi' => $request->input('nama_asosiasi'),
                        'alamat_kantor' => $request->input('alamat_kantor'),
                        'kota' => $request->input('kota'),
                        'provinsi' => $request->input('provinsi'),
                        'kontak' => $request->input('kontak'),
                        'email' => $request->input('email'),
                        'website' => $request->input('website'),
                        'kepala_asosiasi' => $request->input('kepala_asosiasi'),
                        // 'tanggal_berdiri' => $tanggalBerdiri,
                        'jumlah_anggota' => $request->input('jumlah_anggota'),
                        'status' => $request->input('status'),
                        'foto_asosiasi' => $filePath,
                    ]);
                
                    // Flash pesan session
                    session()->flash('update', 'Data Asosiasi Pengusaha Berhasil Diupdate!');
                
                    // Redirect ke halaman yang sesuai
                    return redirect('/asosiasipengusaha');
                }

                
    //================ DELETE DATA ASOSIASI PENGUSAHA  ========================== 
    public function deleteasosiasipengusaha($nama_asosiasi)
    {
        // Cari entri berdasarkan name
        $entry = asosiasipengusaha::where('nama_asosiasi', $nama_asosiasi)->first();
    
        if ($entry) {
            // Hapus file terkait jika ada
            if ($entry->foto_asosiasi) {
                Storage::disk('public')->delete($entry->foto_asosiasi);
            }
    
            // Hapus entri dari database
            asosiasipengusaha::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/asosiasipengusaha');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/asosiasipengusaha');
        }
    }
                

    // ==========================================================
    // CREATE ASOSIASI PENGUSAHA JASA KONSTRUKSI 
    
    public function createasosiasipengusaha()
    {
        $user = Auth::user();
        $data = asosiasipengusaha::all();

        // Tampilkan form update dengan data yang ditemukan
        return view('backend.03_datajakon.02_asosiasipengusaha.create', [
            'title' => 'Create Asosiasi Pengusaha',
            'user' => $user,
            'dataasosiasipengusaha' => $data,
                            
        ]);
    }

    // Menyimpan data asosiasi pengusaha
    public function createstoreasosiasipengusaha(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_asosiasi' => 'required|string|max:255',
            'alamat_kantor' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'kepala_asosiasi' => 'required|string|max:255',
            'foto_asosiasi' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            'jumlah_anggota' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        // Menyimpan foto asosiasi
        $path = $request->file('foto_asosiasi')->store('asosiasipengusaha');

        // Buat entri baru di database
        asosiasipengusaha::create([
            'nama_asosiasi' => $request->input('nama_asosiasi'),
            'alamat_kantor' => $request->input('alamat_kantor'),
            'kota' => $request->input('kota'),
            'provinsi' => $request->input('provinsi'),
            'kontak' => $request->input('kontak'),
            'email' => $request->input('email'),
            'website' => $request->input('website'),
            'kepala_asosiasi' => $request->input('kepala_asosiasi'),
            'foto_asosiasi' => $path, // Simpan path foto
            'jumlah_anggota' => $request->input('jumlah_anggota'),
            'status' => $request->input('status'),
        ]);

        session()->flash('create', 'Data Berhasil Di Tambahkan!');
        // Redirect ke halaman yang sesuai
        return redirect('/asosiasipengusaha'); // Sesuaikan dengan rute yang Anda inginkan
    }

    //  -----------------------------------------------------------------------

    public function standarbiayaumum()
    {
        $user = Auth::user();
        
        return view('frontend.03_datajakon.02_standarbiayaumum', [
            'title' => 'Standar Biaya Umum ',
            'user' => $user,
           
        ]);
    }


    // ======================================== PAKET PEKERJAAN =====================================

    public function paketpekerjaan()
    {
        
        return view('frontend.03_datajakon.03_paketpekerjaan', [
            'title' => 'Paket Pekerjaan Kabupaten Bandung Barat',
           
        ]);
    }

    
    public function bepaketpekerjaan()
    {
        
        $paketpekerjaan = paketpekerjaan::paginate(15);
        $user = Auth::user();

        return view('backend.03_datajakon.04_paketpekerjaan.index', [
            'data' => $paketpekerjaan,
            'user' => $user,
            'title' => 'Paket Pekerjaan Pemerintah Kabupaten Bandung Barat ',
           
        ]);
    }

    public function paketpekerjaanshowbyjudul($instansi)
    {
        $paketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();
        $user = Auth::user();

        return view('backend.03_datajakon.04_paketpekerjaan.show', [
            'data' => $paketpekerjaan,
            'user' => $user,
            'title' => 'Details Paket Pekerjaan',
        ]);
    }
    public function updatepaketpekerjaan($instansi)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $datapaketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();
        $datametodepengadaan = metodepengadaan::all();
        // Tampilkan form update dengan data yang ditemukan
        $user = Auth::user();

        return view('backend.03_datajakon.04_paketpekerjaan.update', [
            'datapaketpekerjaan' => $datapaketpekerjaan,
            'datametodepengadaan' => $datametodepengadaan,
            'user' => $user,
        
            'title' => 'Update Paket Pekerjaan'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------

public function createupdatepaketpekerjaan(Request $request, $instansi)
{
    // Validasi input
    $request->validate([
        'instansi' => 'required|string|max:255',
        'jumlah_pagu' => 'required|numeric|min:10000|max:10000000000', // Validasi untuk jumlah pagu
        'pekerjaan' => 'required|string|max:255',
        'foto_pekerjaan' => 'nullable|file|mimes:jpeg,png,jpg|max:20480',
        'metodepengadaan_id' => 'required|string|max:255',
        'tahun' => 'required|integer|digits:4',
        'progress_fisik' => 'nullable|numeric|min:0|max:100', // 'progress_fisik' => 'required|numeric|min:0|max:100',
    ]);

    // Cari data paketpekerjaan berdasarkan instansi
    $datapaketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();

    // Path folder penyimpanan
    $storagePath = storage_path('app/public/datajakon/paketpekerjaan');

    // Cek dan buat folder jika tidak ada
    if (!File::exists($storagePath)) {
        File::makeDirectory($storagePath, 0755, true);
    }

    // Simpan file foto_pekerjaan dan ambil path-nya
    $filePath = $datapaketpekerjaan->foto_pekerjaan; // Default ke foto yang ada jika tidak ada file baru
    if ($request->hasFile('foto_pekerjaan')) {
        $file = $request->file('foto_pekerjaan');
        $filePath = $file->store('datajakon/paketpekerjaan', 'public');
    }

    // Ambil dan konversi jumlah_pagu dari request
    $jumlahPagu = $request->input('jumlah_pagu');
    $jumlahPagu = preg_replace('/[^\d]/', '', $jumlahPagu);
    $jumlahPagu = (int) $jumlahPagu;

    // Update data paketpekerjaan dengan data dari form
    $datapaketpekerjaan->update([
        'instansi' => $request->input('instansi'),
        'jumlah_pagu' => $jumlahPagu,
        'pekerjaan' => $request->input('pekerjaan'),
        'foto_pekerjaan' => $filePath,
        'metodepengadaan_id' => $request->input('metodepengadaan_id'),
        'tahun' => $request->input('tahun'),
        'progress_fisik' => $request->input('progress_fisik', 0), // Default to 0 if not provided
        // 'progress_fisik' => $request->input('progress_fisik'),
    ]);

    // Flash pesan session
    session()->flash('update', 'Data Paket Pekerjaan Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/paketpekerjaan'); // Pastikan rute ini ada di web.php
}

// ------------- CREATE DATA PAKET PEKERJAAN --------------

public function createpaketpekerjaan()
{
        
        $datametodepengadaan = metodepengadaan::all();
        $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_datajakon.04_paketpekerjaan.create', [
        'datametodepengadaan' => $datametodepengadaan,
        'user' => $user,
        'title' => 'Create Paket Pekerjaan'
    ]);
}

public function createstorepaketpekerjaan(Request $request)
{
    // Validasi input
    $request->validate([
        'instansi' => 'required|string|max:255',
        'jumlah_pagu' => 'required|numeric|min:10000|max:10000000000', // Validasi untuk jumlah pagu
        'pekerjaan' => 'required|string|max:255',
        'foto_pekerjaan' => 'nullable|file|mimes:jpeg,png,jpg|max:20480',
        'metodepengadaan_id' => 'required|string|max:255',
        'tahun' => 'required|integer|digits:4',
        'progress_fisik' => 'nullable|numeric|min:0|max:100',
    ]);

    // Simpan file foto pekerjaan dan ambil path jika ada
    $filePathFotoPekerjaan = null;
    if ($request->hasFile('foto_pekerjaan')) {
        $filePathFotoPekerjaan = $request->file('foto_pekerjaan')->store('datajakon/paketpekerjaan', 'public');
    }

    // Ambil dan konversi jumlah_pagu dari request
    $jumlahPagu = $request->input('jumlah_pagu');
    $jumlahPagu = preg_replace('/[^\d]/', '', $jumlahPagu);
    $jumlahPagu = (int) $jumlahPagu;

    // Buat entri baru di database
    paketpekerjaan::create([
        'instansi' => $request->input('instansi'),
        'jumlah_pagu' => $jumlahPagu,
        'pekerjaan' => $request->input('pekerjaan'),
        'foto_pekerjaan' => $filePathFotoPekerjaan,
        'metodepengadaan_id' => $request->input('metodepengadaan_id'),
        'tahun' => $request->input('tahun'),
        'progress_fisik' => $request->input('progress_fisik', 0), // Default to 0 if not provided
    ]);

    session()->flash('create', 'Data Berhasil Di Tambahkan !');
    return redirect('/paketpekerjaan'); // Ganti 'your.route.name' dengan nama route yang sesuai
}


public function deletepaketpekerjaan($instansi)
{
    // Cari entri berdasarkan name
    $entry = paketpekerjaan::where('instansi', $instansi)->first();

    if ($entry) {
        // Hapus file terkait jika ada
        if ($entry->foto_pekerjaan) {
            Storage::disk('public')->delete($entry->foto_pekerjaan);
        }

        // Hapus entri dari database
        paketpekerjaan::destroy($entry->id);

        // Set pesan flash untuk sukses
        session()->flash('delete', 'Data Berhasil Dihapus!');

        // Redirect ke halaman yang sesuai
        return redirect('/paketpekerjaan');
    } else {
        // Set pesan flash jika data tidak ditemukan
        session()->flash('error', 'Data Tidak Ditemukan!');

        // Redirect ke halaman yang sesuai
        return redirect('/paketpekerjaan');
    }
}

    



    

    // ============================================================================== =========

    
    public function pengawasan()
    {
        
        return view('frontend.03_datajakon.04_pengawasan', [
            'title' => 'Pengawasan Konstruksi Kabupaten Bandung Barat',
           
        ]);
    }



    
}
