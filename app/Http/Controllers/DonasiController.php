<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\User;


class DonasiController extends Controller
{
    public function index($id)
    {
        $res = Http::get('https://api.beenanti.org/panti/' . $id);
        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];
        //dd($panti);
        return view('donasi', compact('data', 'panti'));
    }

    public function tambah(Request $request)
    {
        $token = session()->get('token');
        if ($request->alamat_donasi) {
            $alamat = $request->alamat_donasi;
        } else {
            $alamat = '';
        }
        $saveData = array(
            'id_panti' => $request->id_panti,
            'email_donatur' => $request->email,
            'nama_donasi' => $request->nama_donasi,
            'id_jenis_kebutuhan' => $request->jenis_kebutuhan,
            'id_satuan' => $request->satuan,
            'jumlah_donasi' => $request->jumlah_donasi,
            'alamat_donasi' => $alamat,
        );

        $response = Http::withToken($token)
            ->attach('bukti_tanda_terima', file_get_contents($request->file('bukti_tanda_terima')), $request->file('bukti_tanda_terima')->getClientOriginalName())
            ->post('https://api.beenanti.org/donasi/tambah', $saveData);
        //dd($response);
        if ($response->successful()) {
            return back()->with('success', 'Berhasil Mengirim Donasi. Silahkan cek riwayat donasi Anda!');
        } else {
            return back()->with('danger', 'Gagal menginput data!');
        }
    }

    public function riwayat(Request $request)
    {

        $token = $request->session()->get('token');
        $res = Http::withToken(
            $token
        )->get('https://api.beenanti.org/donasi/riwayatdonasi');

        $data['donasi'] = $res->json()['data'];
        $donasi = $data['donasi'];
        //dd($donasi);
        return view('riwayatDonasi', compact('donasi'));
    }
}
