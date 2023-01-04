<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Redirect;//construct içerisinde yönlendirme yapabilmek için

class ProductsController extends Controller
{
    public function __construct(){
        if(!session("username")){
            Redirect::to("/")->send();
        }
    }
    public function index(){
        $select = Products::all()->toArray();
        return view("dashboard_views.list.content",["products"=>$select]);
    }

    public function createpage(){
        return view("dashboard_views.create.content");
    }

    public function create(Request $request){
        $inputs = $request->all();
        //print_r($inputs);
        
        $image = $inputs["image"];
        $image_extension = $image->getClientOriginalExtension();//uzantısını almak için kullanılır.
        $image_name = $image->getClientOriginalName();
        $upload_file = $image->move(public_path("images"),$image_name);
        $insertData = array(
            "title"=>$inputs["title"],
            "content"=>$inputs["content"],
            "image_url"=>$image_name
        );
        if($upload_file){
            $insert = Products::create($insertData);
            if($insert){
                return redirect("/dashboard");
            }else{
                return redirect("/create");
            }
        }
    } 



    public function delete($id){
        $delete=Products::query()->find($id);
        $delete->delete();
        if($delete){
            return redirect("/dashboard");
        }else{
            return redirect("/dashboard");
        }
    }

    public function logout(){
        session()->forget("username");
        return redirect("/");
    }
}
