<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function loginPost(Request $request)
    {
      
      
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            $user=User::whereId(Auth::user()->id)->first();  
                
            toastr()->info('Hoşgeldiniz ' . Auth::user()->name,'Karşılama');  
            if($user->who==1)
            return redirect()->route("home");
            else
            return redirect()->route("homeuser");
        }
        else
        {
            return redirect()->back()->withFail('Kullanıcı Adı veya Şifreniz hatalı');
        }

    }
    public function home()
    {      
        return view('home');
    } 
    public function homeuser()
    {      
        return view('homeuser');
    } 
    public function books()
    {      
        return view('books');
    } 
    public function addbook()
    {      
        return view('addbook');
    } 
    public function userbooks()
    {      
        return view('userbooks');
    } 
    public function mybooks()
    {      
        return view('mybooks');
    } 
    public function profil()
    {      
        return view('profil');
    } 
    public function users()
    {      
        return view('users');
    }
}
