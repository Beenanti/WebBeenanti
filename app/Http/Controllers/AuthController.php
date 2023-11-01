<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\User;


class AuthController extends Controller
{
    public function index()
    {
        if (session()->has('token')) {
            // $client= new Client();
            // $res = $client->request('GET', 'https://api-beenanti.ramerion.com/panti'); 
            $res = Http::get('https://api.beenanti.org/panti');

            $data['panti'] = $res->json()['data'];
            // $data['panti'] = json_decode($res->getBody()->getContents())['data'];
            return view('panti.list-panti', compact('data'));
        } else {
            return view('auth.login');
        }
    }

    public function checkLogin(Request $request)
    {
        $client = new Client();
        try {
            $response = $client->request('POST', 'https://api.beenanti.org/auth/login', [
                'headers' => [
                    'Accept' => 'application/java',
                ],
                'json' => [
                    'email' => $request->email,
                    'password' => $request->password
                ]
            ]);
            $data = json_decode($response->getBody()->getContents());
            $request->session()->put('token', $data->token);
            $request->session()->put('user', $data->data_user);

            $role = $data->data_user->role_user;
            if ($role == 'user_mobile') {
                return redirect()->intended('pantiweb');
            }
            if ($role == 'admin_panti') {
                return redirect()->intended('dashboard-adminteknisi');
            }
            if ($role == 'admin_master') {
                return redirect()->intended('listUser');
            }
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return back()->with('error', 'Login Gagal. Masukkan email dan password yang benar.');
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            return back()->with('error', 'Internal server error. Please try again later.');
        }
    }

    public function logout(Request $request)
    {
        if (session()->has('token')) {
            $request->session()->forget('token');
        }
        return redirect()->route('pantiweb');
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

    public function registerUser(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'conf_password' => 'required'
        ]);

        if ($validatedData['password'] != $validatedData['conf_password']) {
            return redirect()->back()->with('failed', 'Password dan Konfirmasi Password Anda tidak sesuai!');
        } else {
            $validatedData['password'] = Hash::make($request->password);
            $response = Http::post('https://api.beenanti.org/auth/mobile/register', [
                'email' => $request->email,
                'nama' => $request->nama,
                'password' => $request->password,
                'konfirmasi_password' => $request->conf_password
            ]);
            if ($response) {
                return view('auth.login')->with('message', 'Anda Berhasil Registrasi, Silahkan Login!');
                //return view('panti.edit-panti', compact('data', 'panti'));
            } else {
                return redirect()->back()->with('message', 'Data tidak berhasil disimpan!');
            }
        }
    }
}
