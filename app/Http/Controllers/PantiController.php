<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ST_GeomFromText;
use Illuminate\Support\Facades\DB;

class PantiController extends Controller
{

    protected $token;

    // public function __construct(Type $var = null)
    // {
    //     $this->var = $var;
    // }


    function index(Request $request)
    {
        $res = Http::get('https://api.beenanti.org/panti');
        $data['panti'] = $res->json()['data'];
        return view('panti.list-panti', compact('data'));
    }

    function detail($id)
    {
        $res = Http::get('https://api-beenanti.ramerion.com/panti/' . $id);

        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];
        return view('panti.detail-panti', compact('data', 'panti'));
    }

    public function pantiweb()
    {
        $res = Http::get('https://api.beenanti.org/panti');
        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];

        //dd($panti);
        return view('pantiweb', compact('data', 'panti'));
    }
    public function detailpantiweb($id)
    {
        $res = Http::get('https://api.beenanti.org/panti/' . $id);
        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];

        $kebutuhan = $data['panti']['kebutuhan'];
        //$sandang  = $kebutuhan->where('jenis', 'Sandang');

        foreach ($kebutuhan as $item) {
            if ($item['jenis'] === 'Sandang') {
                $sandang[] = $item;
            }
            if ($item['jenis'] === 'Pangan') {
                $pangan[] = $item;
            }
            if ($item['jenis'] === 'Papan') {
                $papan[] = $item;
            }
            if ($item['jenis'] === 'Biaya') {
                $biaya[] = $item;
            }
            if ($item['jenis'] === 'Donatur') {
                $donatur[] = $item;
            }
        }

        $galeri = $data['panti']['galeri'];
        array_shift($galeri);
        //dd($panti);

        return view('pantiwebdetail', compact('data', 'panti', 'galeri', 'sandang', 'pangan', 'papan', 'biaya', 'donatur'));
    }


    public function getTambah()
    {

        return view('panti.tambah-panti');
    }
    public function tambah(Request $request)
    {
        //$token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImJlZV9tYXN0ZXJAYmVlbmFudGkuaWQiLCJyb2xlX3VzZXIiOiJhZG1pbl9tYXN0ZXIiLCJpYXQiOjE2OTg1MDI5NTcsImV4cCI6MTcwNjI3ODk1N30.5mHWToTszQWRqsSeYOVk6VPhGqKTwkSnXbfuOyVR6wU";
        $token = session()->get('token');

        $res = Http::get('https://api.beenanti.org/panti');
        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];
        $a = count($panti) + 1;
        $id = sprintf("%02d", $a);

        $saveData = array(
            'id_panti' => 'p' . $id,
            'nama_panti' => $request->nama_panti,
            'alamat' => $request->alamat,
            'latitude' => $request->lat,
            'longitude' => $request->long,
            'jumlah_anak' => $request->jmlh_anak,
            'jumlah_pengurus' => $request->jmlh_pengurus,
            'nama_pimpinan' => $request->nama_pimpinan_panti,
            'nohp' => $request->no_hp,
            'email' => $request->email,
            'sosmed' => $request->sosmed,
            'jenis' => $request->jenis_panti,
            'status' => $request->status_panti,
            'createdAt' => '2023-05-01T15:55:00.000Z',
            'updatedAt' => '2023-05-01T15:55:00.000Z'
        );


        $response = Http::withToken(
            $token
        )->post('https://api.beenanti.org/panti/tambah', ($saveData));
        //dd($token);
        return $response->body();
    }


    function edit($id_panti)
    {
        $res = Http::get('https://api.beenanti.org/panti/' . $id_panti);

        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];
        // dd($panti);
        return view('panti.edit-panti', compact('data', 'panti'));
    }

    public function saveEdit(Request $request, $id_panti)
    {
        // $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6Imd1Z3VzQGdtYWlsLmNvbSIsInJvbGVfdXNlciI6ImFkbWluX21hc3RlciIsImlhdCI6MTY5NTg5NzI5NiwiZXhwIjoxNzAzNjczMjk2fQ.jVmvlpVg6Hp4OIfBb1_Oswojl7yo-46milcGE_k8wzA";
        $token = session()->get('token');
        $saveData = array(
            'nama_panti' => $request->nama_panti,
            'alamat' => $request->alamat,
            'latitude' => $request->lat,
            'longitude' => $request->long,
            'jumlah_anak' => $request->jmlh_anak,
            'jumlah_pengurus' => $request->jmlh_pengurus,
            'nama_pimpinan' => $request->nama_pimpinan_panti,
            'nohp' => $request->no_hp,
            'email' => $request->email,
            'sosmed' => $request->sosmed,
            'jenis' => $request->jenis_panti,
            'status' => $request->status_panti,
            'createdAt' => '2023-05-01T15:55:00.000Z',
            'updatedAt' => '2023-05-01T15:55:00.000Z'
        );
        //dd($saveData);
        $response = Http::withToken(
            $token
        )->patch('https://api.beenanti.org/panti/edit/' . $id_panti, ($saveData));

        return $response->body();
    }
}
