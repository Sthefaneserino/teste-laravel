<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    //

    public function index()
    {
        if (Auth::user()) {
            return redirect()->intended('area-restrita');
        } else {

            return view('login-form');
        }
    }

    public function login(Request $request)
    {
        // $usuario = User::class;
        $usuario = DB::table('users')->where('email', [$request->email])->first();
        if (Hash::check($request->password, $usuario->password)) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('area-restrita');
            }
        } else {
            return back()->withInput();
        }
    }

    public function cadastro()
    {
        return view('cadastro-form');
    }

    public function store(Request $request)
    {
        // dd($request);
        $senha = Hash::make($request->password);
        DB::beginTransaction();
        try {
            DB::insert('insert into users (name, email, password) values (?,?,?)', [$request->name, $request->email, $senha]);
            DB::commit();
            return redirect('/login');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
