<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use Illuminate\Support\Facades\Auth;

class articleController extends Controller
{
    public function create() {
        return view("article.crear");
    }

    public function assign(Request $req) {
        $hoy = getdate();
        $hoy=$hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"]." ".($hoy["hours"]+2).":".$hoy["minutes"].":".$hoy["seconds"];

        $art=new article;
        $art->id_user=Auth::user()->id_user;
        $art->name=$req->input("name");
        $art->description=$req->input("description");
        $art->created_at=$hoy;
        $art->updated_at=$hoy;
        $art->save();
        return redirect()->route("main");
    }

    public function borrar(Request $req) {
        $a=article::find($req->input("id"))->delete();
        return redirect()->route("main");
    }

    public function editar(Request $req) {
        $o=article::find($req->input("id"));
        return view("article.editar",["o"=>$o]);
    }

    public function assign_editar(Request $req) {
        $hoy = getdate();
        $hoy=$hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"]." ".($hoy["hours"]+2).":".$hoy["minutes"].":".$hoy["seconds"];

        $art=article::find($req->input("id"));
        $art->id_user=Auth::user()->id_user;
        $art->name=$req->input("name");
        $art->description=$req->input("description");
        $art->created_at=$hoy;
        $art->updated_at=$hoy;
        $art->save();
        return redirect()->route("main");
    }
}
