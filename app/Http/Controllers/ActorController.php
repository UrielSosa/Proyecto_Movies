<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Actor;

class ActorController extends Controller
{
  public function getNombreCompleto(){
    return $this->first_name ." ". $this->last_name;
  }
  public function directory(){
    $actors = Actor::all();
    return view('list_actors')->with('actors', $actors);
  }
  public function searchActor($id){
    $actor = Actor::find($id);
    return view('actor')->with('actor',$actor);
  }
  public function search(){
    $let = $_GET['buscar'];
    if($let != null){
      $actors = Actor::where('first_name','LIKE',"%$let%")->orWhere('last_name','LIKE',"%$let%")->get();
      return view('list_actors')->with('actors',$actors);
    }else{
      $actors = Actor::all();
      return view('list_actors')->with('actors',$actors);
    }
  }
}
