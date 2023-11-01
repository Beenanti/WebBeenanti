<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Http\Client\PendingRequest;


class UsersController extends Controller
{
    function index(Request $request)
    {

        $client = new Client();
        //$token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6Imd1Z3VzQGdtYWlsLmNvbSIsInJvbGVfdXNlciI6ImFkbWluX21hc3RlciIsImlhdCI6MTY5NTg5NzI5NiwiZXhwIjoxNzAzNjczMjk2fQ.jVmvlpVg6Hp4OIfBb1_Oswojl7yo-46milcGE_k8wzA";
        $token = $request->session()->get('token');
        $response = Http::withToken(
            $token
        )->get('https://api.beenanti.org/user');

        $data['data_user'] = $response->json()['data_user'];
        return view('auth.list-user', compact('data'));
    }

    function indexAdmin(Request $request)
    {
        $client = new Client();
        //$token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6Imd1Z3VzQGdtYWlsLmNvbSIsInJvbGVfdXNlciI6ImFkbWluX21hc3RlciIsImlhdCI6MTY5NTg5NzI5NiwiZXhwIjoxNzAzNjczMjk2fQ.jVmvlpVg6Hp4OIfBb1_Oswojl7yo-46milcGE_k8wzA";
        $token = $request->session()->get('token');
        $response = Http::withToken(
            $token
        )->get('https://api.beenanti.org/user/admin-panti');

        $data['data_admin'] = $response->json()['data_admin'];
        return view('auth.list-adminPanti', compact('data'));
    }

    function indexAdminPanti(Request $request)
    {

        $client = new Client();
        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImJlZV9tYXN0ZXJAYmVlbmFudGkuaWQiLCJyb2xlX3VzZXIiOiJhZG1pbl9tYXN0ZXIiLCJpYXQiOjE2ODg4NzY5MTksImV4cCI6MTY5NjY1MjkxOX0.rhwGk6Db0JAcepXWUa1ypPTfP8xxdFQy6E8ibjfbROE";
        $response = Http::withToken(
            $token
        )->get('https://api-beenanti.ramerion.com/user/admin-panti');

        $data['data_admin'] = $response->json()['data_admin'];
        return view('auth.list-adminPanti', compact('data'));
    }

    public function tambahAdmin(Request $request)
    {
        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImJlZV9tYXN0ZXJAYmVlbmFudGkuaWQiLCJyb2xlX3VzZXIiOiJhZG1pbl9tYXN0ZXIiLCJpYXQiOjE2ODg4NzY5MTksImV4cCI6MTY5NjY1MjkxOX0.rhwGk6Db0JAcepXWUa1ypPTfP8xxdFQy6E8ibjfbROE";
        $response = Http::withToken(
            $token
        )->post('https://api.beenanti.org/auth/master/register', [
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => $request->password,
            'konfirmasi_password' => $request->conf_password
        ]);
        return $response->body();
    }

    public function tambahAdminPanti(Request $request)
    {
        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6Imd1Z3VzQGdtYWlsLmNvbSIsInJvbGVfdXNlciI6ImFkbWluX21hc3RlciIsImlhdCI6MTY5NTg5NzI5NiwiZXhwIjoxNzAzNjczMjk2fQ.jVmvlpVg6Hp4OIfBb1_Oswojl7yo-46milcGE_k8wzA";
        $response = Http::withToken($token)
            ->post('https://api.beenanti.org/user/admin-panti/register', [
                'id_panti' => $request->panti_asuhan,
                'email' => $request->email,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'no_hp' => $request->nohp,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir' => $request->tgl_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'password' => $request->password,
                'konfirmasi_password' => $request->conf_password
            ]);

        // return $response->body();
        return redirect('/user/admin-panti');
    }

    public function destroy($email)
    {
        // $user_hapus = Users::findorfail($email);
        // $user_hapus->delete();
        // return back()->with('success', 'Data berhasil dihapus!');
    }

    function detailAdminPanti($email)
    {
        $client = new Client();
        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImJlZV9tYXN0ZXJAYmVlbmFudGkuaWQiLCJyb2xlX3VzZXIiOiJhZG1pbl9tYXN0ZXIiLCJpYXQiOjE2ODg4NzY5MTksImV4cCI6MTY5NjY1MjkxOX0.rhwGk6Db0JAcepXWUa1ypPTfP8xxdFQy6E8ibjfbROE";
        $response = Http::withToken(
            $token
        )->get('https://api-beenanti.ramerion.com/user/admin-panti/' . $email);

        $data['data_admin'] = $response->json()['data'];
        $adminPanti = $data['data_admin'];

        return view('auth.detail-adminPanti', compact('data', 'adminPanti'));
    }

    function editAdminPanti($email)
    {
        $client = new Client();
        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImJlZV9tYXN0ZXJAYmVlbmFudGkuaWQiLCJyb2xlX3VzZXIiOiJhZG1pbl9tYXN0ZXIiLCJpYXQiOjE2ODg4NzY5MTksImV4cCI6MTY5NjY1MjkxOX0.rhwGk6Db0JAcepXWUa1ypPTfP8xxdFQy6E8ibjfbROE";
        $response = Http::withToken(
            $token
        )->get('https://api-beenanti.ramerion.com/user/admin-panti/' . $email);

        $data['data_admin'] = $response->json()['data'];
        $adminPanti = $data['data_admin'];

        return view('auth.edit-adminPanti', compact('data', 'adminPanti'));
    }

    // function edit($email){
    //     $res = Http::get('https://api-beenanti.ramerion.com/user/admin-panti/{{$email}}/edit');

    //     $data['data_admin'] = $res->json()['data'];
    //     $panti = $data['data_admin'];
    //     return view('auth.edit-adminPanti', compact('data', 'data_admin'));
    // }

    function saveEditAdminPanti(Request $request, $email)
    {

        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImJlZV9tYXN0ZXJAYmVlbmFudGkuaWQiLCJyb2xlX3VzZXIiOiJhZG1pbl9tYXN0ZXIiLCJpYXQiOjE2ODg4NzY5MTksImV4cCI6MTY5NjY1MjkxOX0.rhwGk6Db0JAcepXWUa1ypPTfP8xxdFQy6E8ibjfbROE";
        $response = Http::withToken(
            $token
        )->patch('https://api-beenanti.ramerion.com/user/admin-panti/{{$email}}/edit', [
            'id_panti' => $request->panti_asuhan,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'no_hp' => $request->nohp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan
        ]);
        return $response->body();
        // return redirect('/user/admin-panti');
    }

    function lihatProfil()
    {

        // $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImJlZV9tYXN0ZXJAYmVlbmFudGkuaWQiLCJyb2xlX3VzZXIiOiJhZG1pbl9tYXN0ZXIiLCJpYXQiOjE2ODg4NzY5MTksImV4cCI6MTY5NjY1MjkxOX0.rhwGk6Db0JAcepXWUa1ypPTfP8xxdFQy6E8ibjfbROE";
        // $response = Http::withToken(
        //     $token
        // )->get('https://api-beenanti.ramerion.com/user/profil')->where('email', );

        // $data['data_user'] = $response->json()['data'];
        // $userData = $data['data_user'];

        // return view('auth.lihat-user', compact('data', 'userData'));

        //=============================================================================================
        if (session()->has('token')) {
            $res = Http::get('https://api-beenanti.ramerion.com/user/profil');
            $data['data_user'] = $res->json()['data'];
            dd($data);


            // return view('panti.list-panti', compact('data'));
        } else {
            return view('auth.login');
        }
    }
}
