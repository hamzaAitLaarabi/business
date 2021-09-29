<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Users;
use Illuminate\Support\MessageBag;
use Session;
class UsersController extends Controller
{   
     function register(Request $req)
    {   
        // validation inputed from
        $req->validate([
            'name'     =>'required|string|max:20',
            'email'    =>'string|email|max:50|unique:users',
            'phone'    =>'required|min:9|max:15|unique:users',
            'password' =>'required|max:16',
            'Cpassword'=>'required|max:16',

        ]);
        // check if password same
        if ($req->input("password")===$req->input("Cpassword")) {
            $user = new Users;
            $user->name =  $req->input("name");
            $user->email = $req->input("email");
            $user->password = Hash::make($req->input("password"));
            $user->phone = $req->input("phone");
            $user->role = 4;
            
            $user->save();
        return redirect("/login");
        }
        else{         
            return redirect("#Cpassword");
        }
        
    }

    function login(Request $req )
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required',
            ]);
       $email    = Users::where(['email'=>$req->email])->first();
       $phone    = Users::where(['phone'=>$req->email])->first();
       if($email){
        if ($email && Hash::check($req->password,$email->password))
        {
            $req->session()->put('user',$email);
            return redirect("/");
        }
        else
        { return redirect()->back()->with('em-in',"Nous n'avons pas pu vérifier vos informations d'identification. Veuillez vérifier et réessayer.");}

       }elseif($phone){
        if ($phone && Hash::check($req->password,$phone->password))
        {
            $req->session()->put('user',$phone);
            return redirect("/");
        }
        else
        { return redirect()->back()->with('em-in',"Nous n'avons pas pu vérifier vos informations d'identification. Veuillez vérifier et réessayer.");}                                 
       }else
        { return redirect()->back()->with('mp-in',"L'adresse email ou Numéro de téléphone que vous avez entrés ne correspondent pas à ceux présents dans nos fichiers. Veuillez vérifier et réessayer.");}
    }
    
}
