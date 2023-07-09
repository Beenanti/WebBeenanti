<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ST_GeomFromText;

class PantiController extends Controller
{

    protected $token;

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    
    function index(Request $request){
        $res = Http::get('https://api-beenanti.ramerion.com/panti');
        $data['panti'] = $res->json()['data'];
        return view('panti.list-panti', compact('data'));
    }

    function detail($id){
        $res = Http::get('https://api-beenanti.ramerion.com/panti/'. $id);

        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];
        return view('panti.detail-panti', compact('data', 'panti'));
    }


    public function tambah(){
        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImJlZV9tYXN0ZXJAYmVlbmFudGkuaWQiLCJyb2xlX3VzZXIiOiJhZG1pbl9tYXN0ZXIiLCJpYXQiOjE2ODg4NzY5MTksImV4cCI6MTY5NjY1MjkxOX0.rhwGk6Db0JAcepXWUa1ypPTfP8xxdFQy6E8ibjfbROE";
     
        $saveData = array(
            'id_panti' => 'p21', 
            'nama_panti'=> 'panti asisiyah', 
            'alamat'=> 'padang',
            'latitude'=> '-0.9431791550674285',
            'longitude'=> '102.4481490734123',
            'jumlah_anak'=> '13',
            'jumlah_pengurus'=> '2',
            'nama_pimpinan'=> 'mustafa',
            'nohp'=> '0835436453253',
            'email'=> 'panti12@gmail.com',
            'sosmed'=> '@panti12',
            'jenis'=> '1',
            'status'=> 'aktif',
            'createdAt' => '2023-05-01T15:55:00.000Z',
            'updatedAt' => '2023-05-01T15:55:00.000Z'
        );
        
        $response = Http::withToken(
            $token
        )->post('https://api-beenanti.ramerion.com/panti/tambah',($saveData));

        return $response->body();
    }


    function edit($id_panti){
        $res = Http::get('https://api-beenanti.ramerion.com/panti/'. $id_panti);

        $data['panti'] = $res->json()['data'];
        $panti = $data['panti'];
        return view('panti.edit-panti', compact('data', 'panti'));
    }

    public function saveEdit(Request $request, $id_panti){
        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImJlZV9tYXN0ZXJAYmVlbmFudGkuaWQiLCJyb2xlX3VzZXIiOiJhZG1pbl9tYXN0ZXIiLCJpYXQiOjE2ODg4NzY5MTksImV4cCI6MTY5NjY1MjkxOX0.rhwGk6Db0JAcepXWUa1ypPTfP8xxdFQy6E8ibjfbROE";
        
        $saveData = array(
            'nama_panti'=> 'panti asisiyahhhhhh', 
            'alamat'=> 'padang',
            'latitude'=> '-0.9431791550674285',
            'longitude'=> '102.4481490734123',
            'jumlah_anak'=> '333',
            'jumlah_pengurus'=> '12',
            'nama_pimpinan'=> 'mustafaaaa',
            'nohp'=> '0835436453253',
            'email'=> 'panti12oke@gmail.com',
            'sosmed'=> '@panti12',
            'jenis'=> '1',
            'status'=> '1',
            'createdAt' => '2023-05-01T15:55:00.000Z',
            'updatedAt' => '2023-05-01T15:55:00.000Z'
        );
        
        $response=Http::withToken(
            $token
        )->patch('https://api-beenanti.ramerion.com/panti/edit/{{$id_panti}}', ($saveData));

        return $response->body();
    }
}
