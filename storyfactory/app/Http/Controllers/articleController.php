<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class articleController extends Controller
{
    public function create() {
        return view("article.crear");
    }

    public function assign(Request $req) {
        $hoy = getdate();
        $hoy=$hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"]." ".($hoy["hours"]+2).":".$hoy["minutes"].":".$hoy["seconds"];

        $art=new Article;
        $art->id_user=Auth::user()->id_user;
        $art->name=$req->input("name");
        $art->description=$req->input("description");
        $art->created_at=$hoy;
        $art->updated_at=$hoy;
        $art->save();
        return redirect()->route("main");
    }

    public function borrar(Request $req) {
        $a=Article::find($req->input("id"))->delete();
        return redirect()->route("main");
    }

    public function editar(Request $req) {
        $o=Article::find($req->input("id"));
        return view("article.editar",["o"=>$o]);
    }

    public function assign_editar(Request $req) {
        $hoy = getdate();
        $hoy=$hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"]." ".($hoy["hours"]+2).":".$hoy["minutes"].":".$hoy["seconds"];

        $art=Article::find($req->input("id"));
        $art->id_user=Auth::user()->id_user;
        $art->name=$req->input("name");
        $art->description=$req->input("description");
        $art->created_at=$hoy;
        $art->updated_at=$hoy;
        $art->save();
        return redirect()->route("main");
    }
}
