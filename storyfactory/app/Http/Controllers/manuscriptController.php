<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\manuscript;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class manuscriptController extends Controller
{
    public function formularioCrear() {
        return view("historias/crear");
    }
    public function crear(Request $req) {
        $title=$_POST["datos"]["variable1"][0]["data"]["text"];
        $summary=$_POST["datos"]["variable1"][1]["data"]["text"];
        $today = getdate();
        $today=$today["year"]."-".$today["mon"]."-".$today["mday"]." ".($today["hours"]+2).":".$today["minutes"].":".$today["seconds"];
        //creamos el manuscript
        $manuscript=new manuscript;
        $manuscript->title=$title;
        $manuscript->summary=$summary;
        $manuscript->id_user=Auth::user()->id_user;
        $manuscript->created_at=$today;
        $manuscript->updated_at=$today;
        $manuscript->save();

       //contamos caracteres y lo añadimos al user
        $caracteres=strlen($title) + strlen($summary);
        $user=Usuario::find(Auth::user()->id_user);
        $user->caracteres=$caracteres;
        $user->save();
    }

    public function allManuscript() {
        $historias=DB::table('manuscript')->where("id_user",Auth::user()->id_user)->get();
        return view("historias.all",["historias"=>$historias]);
    }

    public function main() {

        //I get recent history
        $recentStories=DB::table('manuscript')->where("id_user",Auth::user()->id_user)->orderBy('updated_at', 'desc')->get();

        //I get the most recent characters
        $recentChar=DB::table('figure')->where("id_user",Auth::user()->id_user)->orderBy('updated_at', 'desc')->get();

        //I get the most recent locations
        $recentPlac=DB::table('place')->where("id_user",Auth::user()->id_user)->orderBy('updated_at', 'desc')->get();

        //I get the most recent objects
        $recentArt=DB::table('article')->where("id_user",Auth::user()->id_user)->orderBy('updated_at', 'desc')->get();

        //I get total characters written
        $caracteres=Usuario::find(Auth::user()->id_user)->caracteres;

        //I get user name
        $name=Usuario::find(Auth::user()->id_user)->username;

      return view('dashboard/index',["recentStories"=>$recentStories,"figure"=>$recentChar,"places"=>$recentPlac,"objeto"=>$recentArt,"caracteres"=>$caracteres,"name"=>$name]);
    }

    public function exportView() {
         $historias=DB::table('manuscript')->where("id_user",Auth::user()->id_user)->get();
        return view("export.see",["historias"=>$historias]);
    }

    public function exportData() {
        $escrito=DB::table('manuscript')->where("id_manuscript",intval($_GET["datos"]["variable1"]))->get();
        echo $escrito[0]->title . "ª" . $escrito[0]->summary;
    }

    public function editarView(Request $req) {
        $id=$req->input("id");
        //extraemos los datos
        $historia=manuscript::find($req->input("id"));
        $summary=$historia->summary;
        $title=$historia->title;
        //echo $summary;
        return view("historias.editar",["id"=>$id,"summary"=>$summary,"title"=>$title]);
    }

    public function editar(Request $req) {
        $title=$_POST["datos"]["variable1"][0]["data"]["text"];
        $summary="";
        $id=$_POST["datos"]["variable2"];
        for($i=0;$i<sizeof($_POST["datos"]["variable1"]);$i++) {
            $summary=$summary  . $_POST["datos"]["variable1"][$i]["data"]["text"];
        }
        //find the story
        $historia=manuscript::find($id);

        //edit story;
        $historia->title=$title;
        $historia->summary=$summary;
        $historia->save();
    }

    public function borrarHistorias(Request $req) {
        $h=manuscript::find($req->input("id"))->delete();

        $historias=DB::table('manuscript')->where("id_user",Auth::user()->id_user)->get();
        return view("historias.all",["historias"=>$historias]);
    }
}


