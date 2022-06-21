<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Figure;
use Illuminate\Support\Facades\Auth;

class figureController extends Controller
{
    public function formularioCrear() {
       return view("figure/crear");
    }
    public function crear(Request $req) {
       $hoy = getdate();
        $hoy=$hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"]." ".($hoy["hours"]+2).":".$hoy["minutes"].":".$hoy["seconds"];
      //creamos los figures
      $f=new Figure;
      $f->nameFigure=$req->input("nameFigure");
      $f->id_user=Auth::user()->id_user;
      $f->biography=$req->input("biography");
      $f->role=$req->input("role");
      $f->flaw=$req->input("flaw");
      $f->external_motivation=$req->input("external_motivation");
      $f->internal_motivation=$req->input("internal_motivation");
      $f->positive_traits=$req->input("positive_traits");
      $f->negative_traits=$req->input("negative_traits");
      $f->quirks_mannerisms=$req->input("quirks_mannerisms");
      $f->motto=$req->input("motto");
      $f->build=$req->input("build");
      $f->hair_color=$req->input("hair_color");
      $f->hair_style=$req->input("hair_style");
      $f->eye_color=$req->input("eye_color");
      $f->scars=$req->input("scars");
      $f->created_at=$hoy;
      $f->updated_at=$hoy;
      $f->save();

      return redirect()->route("main");
    }

    public function borrar(Request $req) {
     // echo $req->input("id");
      $f=Figure::find($req->input("id"))->delete();
       return redirect()->route("userFigures");
    }

    public function editar(Request $req) {
      $f=Figure::find($req->input("id"));
      return view("figure.editar",["f"=>$f]);
    }

    public function assign_editar(Request $req) {
        $hoy = getdate();
        $hoy=$hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"]." ".($hoy["hours"]+2).":".$hoy["minutes"].":".$hoy["seconds"];
      //creamos los figures
        $f=Figure::find($req->input("id"));
        $f->nameFigure=$req->input("nameFigure");
        $f->id_user=Auth::user()->id_user;
        $f->biography=$req->input("biography");
        $f->role=$req->input("role");
        $f->flaw=$req->input("flaw");
        $f->external_motivation=$req->input("external_motivation");
        $f->internal_motivation=$req->input("internal_motivation");
        $f->positive_traits=$req->input("positive_traits");
        $f->negative_traits=$req->input("negative_traits");
        $f->quirks_mannerisms=$req->input("quirks_mannerisms");
        $f->motto=$req->input("motto");
        $f->build=$req->input("build");
        $f->hair_color=$req->input("hair_color");
        $f->hair_style=$req->input("hair_style");
        $f->eye_color=$req->input("eye_color");
        $f->scars=$req->input("scars");
        $f->created_at=$hoy;
        $f->updated_at=$hoy;
        $f->save();

      return redirect()->route("main");
    }
}
