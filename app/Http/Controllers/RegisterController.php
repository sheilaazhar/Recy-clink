<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'=>'Register',
            'active'=>'register',
            'kecamatans' => Kecamatan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=>['required','min:3','max:255','unique:users'],
            'jk'=>'required',
            'email'=>'required|email:dns|unique:users',
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9|max:15',
            'kecamatan_id'=>'required',
            'address'=>'required|max:255',
            'password'=>'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Registration successfull! Please login');
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
