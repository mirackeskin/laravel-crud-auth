<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
use Illuminate\Support\Facades\Redirect;//construct içerisinde yönlendirme yapabilmek için

class AuthController extends Controller
{

    public function __construct(){
        if(session("username")!="" && session("username")!=null){
            Redirect::to("/dashboard")->send();
        }
    }

    public function index(){
        return view("auth_views.login.content");
    }

    public function login(Request $request){
        $inputs = $request->all();
        
        $whereData=array(
            "username"=>$inputs["username"],
            "password"=>$inputs["password"]
        );
        $user = Auth::where($whereData)->get()->toArray();
        if($user){
            session(["username"=>$inputs["username"]]);
            return redirect("/dashboard");
        }else{
            return redirect("/");
        }
    }

    public function register(){
        return view("auth_views.register.content");
    }

    public function registration(Request $request){
        $inputs = $request->all();
        $insertData = array(
            "username"=>$inputs["username"],
            "password"=>$inputs["password"]
        );
        $insert = Auth::create($insertData);
        if($insert){
            session(["username"=>$inputs["username"]]);
            return redirect("/dashboard");
        }else{
            return redirect("/register");
        }
    }

}
