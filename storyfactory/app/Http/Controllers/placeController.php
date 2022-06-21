<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;

class placeController extends Controller
{
    public function create() {
        return view("place.crear");
    }

    public function assign(Request $req) {
        $hoy = getdate();
        $hoy=$hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"]." ".($hoy["hours"]+2).":".$hoy["minutes"].":".$hoy["seconds"];

        $place=new Place;
        $place->id_user=Auth::user()->id_user;
        $place->name=$req->input("name");
        $place->description=$req->input("description");
        $place->history=$req->input("history");
        $place->created_at=$hoy;
        $place->updated_at=$hoy;
        $place->save();

        return redirect()->route("main");
    }

    public function borrar(Request $req) {
        $f=Place::where("id_place",$req->input("id"))->delete();
        return redirect()->route("userPlaces");
    }

    public function editar(Request $req) {
        $f=Place::where("id_place",$req->input("id"))->get();
        return view("place.editar",["f"=>$f[0]]);
    }
    public function assign_editar(Request $req) {
        $hoy = getdate();
        $hoy=$hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"]." ".($hoy["hours"]+2).":".$hoy["minutes"].":".$hoy["seconds"];

        $place=Place::find($req->input("id"));
        $place->id_user=Auth::user()->id_user;
        $place->name=$req->input("name");
        $place->description=$req->input("description");
        $place->history=$req->input("history");
        $place->created_at=$hoy;
        $place->updated_at=$hoy;
        $place->save();

        return redirect()->route("main");
    }
}
