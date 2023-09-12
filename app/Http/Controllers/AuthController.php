<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class AuthController extends Controller
{
    public function index () {
        if(session()->has('token')){
            // $client= new Client();
            // $res = $client->request('GET', 'https://api-beenanti.ramerion.com/panti'); 
            $res = Http::get('https://api-beenanti.ramerion.com/panti');

            $data['panti'] = $res->json()['data'];
            // $data['panti'] = json_decode($res->getBody()->getContents())['data'];
            return view('panti.list-panti', compact('data'));
        } else {
            return view('auth.login');
        }
    }

    public function checkLogin(Request $request){
        $client = new Client();
        $response = $client->request('POST', 'https://api-beenanti.ramerion.com/auth/login/', [
            'headers' => [
                'Accept' => 'application/java',
            ], 
            'json' => [
                'email' => $request->email, 
                'password'=> $request->password
            ]
        ]);

        $data=json_decode($response->getBody()->getContents());
        $request->session()->put('token',$data->token);
        return view('auth.list-user',['data'=> $data]);
    }

    public function logout(Request $request){
        if (session()->has('token')){
            $request->session()->forget('token');
        }
        return redirect()->route('login');
    }

    public function registerAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $validatedData['password'] = Hash::make($request->password);

        $user = user::create($validatedData);
        // $user =User::insert([
        //     'email' => $validatedData->email, 
        //     'nama' => $validatedData->nama, 
        //     'password'=> $validatedData->password
        // ]);
        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken], 201);
    }
}
