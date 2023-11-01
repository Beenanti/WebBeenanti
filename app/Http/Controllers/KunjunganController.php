<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\User;


class KunjunganController extends Controller
{
    public function index($id)
    {
        $res = Http::get('https://api.beenanti.org/panti/' . $id);
        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];
        //dd($panti);
        return view('kunjungan', compact('data', 'panti'));
    }

    public function tambah(Request $request)
    {
        $token = session()->get('token');

        $saveData = array(
            'nama' => $request->name,
            'id_panti' => $request->id_panti,
            'tanggal' => $request->tanggal,
            'waktu' => $request->time,
            'durasi' => $request->durasi,
            'detail' => $request->detail,
        );
        $response = Http::withToken($token)
            ->attach('berkas', file_get_contents($request->file('berkas')), $request->file('berkas')->getClientOriginalName())
            ->post('https://api.beenanti.org/kunjungan/tambah', $saveData);

        if ($response->successful()) {
            return back()->with('success', 'Berhasil Mengajukan Kunjungan. Silahkan cek riwayat kunjungan Anda!');
        } else {
            return back()->with('danger', 'Gagal menginput data!');
        }
    }
    public function riwayat(Request $request)
    {

        $token = $request->session()->get('token');
        $nama = session('user')->nama_user;
        $res = Http::withToken(
            $token
        )->get('https://api.beenanti.org/kunjungan');

        $data['kunjungan'] = $res->json()['data'];
        $kunjungan = $data['kunjungan'];
        $kunj = array_filter($kunjungan, function ($item) use ($nama) {
            return $item['nama'] === $nama;
        });
        //dd($kunj);
        return view('riwayatKunjungan', compact('kunj'));
    }
}
