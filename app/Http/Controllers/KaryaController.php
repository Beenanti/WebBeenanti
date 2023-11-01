<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\User;


class KaryaController extends Controller
{
    public function index($id)
    {

        $res = Http::get('https://api.beenanti.org/karya/lihat/' . $id);
        $data['karya'] = $res->json()['data'];
        $karya = $data['karya'];

        $respon = Http::get('https://api.beenanti.org/panti/' . $id);
        $data['panti'] = $respon->json()['data'];
        $panti = $data['panti'];
        // dd($karya);
        return view('karya', compact('panti', 'karya'));
    }
}
