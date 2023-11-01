<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\User;


class MapsController extends Controller
{
    public function index(){
        $res = Http::get('https://api.beenanti.org/panti');
        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];
        foreach($panti as $itemm){
            $galeri = DB::table('galeri')
            ->where('id_panti', '=', $itemm['id_panti'])
            ->get('url_gambar');
            //dd($galeri[0]);

        //$galleries =array();
        // foreach ($galeri[0] as $item){
        //    // $galleries = $item['url_gambar'];            
        //     dd($item);
        // }
        // $panti ['galery'] = $galleries;
        // dd($panti);
        
        }
        
        
        return view('pantiweb', compact('data', 'panti','galeri'));

        
    }

    public function getlokasi(){
        $res = Http::get('https://api.beenanti.org/panti');
        $data['panti'] = $res->json()['data'];

        echo json_encode($data);
    }

    
}
