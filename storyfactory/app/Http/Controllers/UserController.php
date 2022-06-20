<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use App\Models\place;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class UserController extends Controller{

    public function seeFigures() {
    	$places=DB::table("figure")->where("id_user",Auth::user()->id_user)->get();
    	return view("figure.see",["place"=>$places]);
    }

    public function seePlaces() {
        $places=DB::table("place")->where("id_user",Auth::user()->id_user)->get();
        return view("place.see",["place"=>$places]);
    }

    public function seeArticles() {
        $ar=DB::table("article")->where("id_user",Auth::user()->id_user)->get();
        return view("article.see",["article"=>$ar]);
    }

    public function changeView() {
        //obtenemos los datos del user
        $user=Usuario::find(Auth::user()->id_user);
        $username=$user->username;
        $email=$user->email;
        return view("user.change",["name"=>$username,"email"=>$email]);
    }

    public function assign(Request $req) {
        $user=Usuario::find(Auth::user()->id_user);
        $user->username=$req->input("name");
        $user->email=$req->input("email");
        $user->save();
        return redirect()->route("main");
    }

    public function admin() {
        //obtenemos todos los usuarios
        $users=Usuario::all();
        return view("admin.admin",["users"=>$users]);
    }

    public function borrarUser(Request $req) {
        $u=Usuario::find($req->input("id"))->delete();
        return redirect()->route("admin");
    }
}
