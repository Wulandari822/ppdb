<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index(){
        return view ('register.form');
    }

    public function cetakpdf(){
        
        return view('register.pdf');
    }

    public function store(){
        $credentials = $request->validate([
            'nisn' => ['required'],
            'jk' => ['required'],
            'nama' => ['required'],
            'theSelect' => ['required'],
            'email'=> ['required', 'email'],
            'nohp' => ['required'],
            'noayah' => ['required'],
            'noibu' => ['required'],
            'ref' => ['required'],
            
           
            ]);
    
            $credentials ['nisn'] = bcrypt ($credentials['nisn']);
            User::create($credentials);
    
            return redirect('/registration')->with('succes', 'Registrasi berhasil, silahkan Login!');
    }
    
}
