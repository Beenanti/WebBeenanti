<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\User;


class RelawanController extends Controller
{
    public function index($id)
    {
        $res = Http::get('https://api.beenanti.org/panti/' . $id);
        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];
        //dd($panti);
        return view('relawan', compact('data', 'panti'));
    }

    public function tambah(Request $request)
    {
        $token = session()->get('token');

        $saveData = array(
            'id_panti' => $request->id_panti,
            'bidang' => $request->bidang,
            'tanggal' => $request->tanggal,
            'waktu' => $request->time,
            'durasi' => $request->durasi,
            'detail' => $request->detail,
        );
        $response = Http::withToken($token)
            ->attach('berkas', file_get_contents($request->file('berkas')), $request->file('berkas')->getClientOriginalName())
            ->post('https://api.beenanti.org/relawan/request', $saveData);

        if ($response->successful()) {
            return back()->with('success', 'Berhasil Mengajukan Permintaan Relawan. Silahkan cek riwayat relawan Anda!');
        } else {
            return back()->with('danger', 'Gagal menginput data!');
        }
    }

    public function riwayat(Request $request)
    {

        $email = session('user')->email;
        $res = Http::get('https://api.beenanti.org/relawan');
        $data['relawan'] = $res->json()['data_relawan'];
        $relawan = $data['relawan'];
        $rela = array_filter($relawan, function ($item) use ($email) {
            return $item['email_relawan'] === $email;
        });
        //dd($rela);
        return view('riwayatRelawan', compact('rela'));
    }
}
