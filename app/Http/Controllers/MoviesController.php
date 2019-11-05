<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;

class MoviesController extends Controller
{
  public function list(){
    // $movies = DB::table('movies')->select('title')->get();
    $movies = Movie::paginate(10);
    return view('list_movies')->with('movies', $movies);
  }
  public function searchId($id){
    return view('movie')->with('movie', Movie::find($id));
  }
  public function addMovie(){
    return view('addMovie');
  }
  public function top(){
    $movies = Movie::where('rating','>', 5)->orderBy('rating')->get();
    return view('list_movies')->with('movies',$movies);
  }
  public function search(){
    $let = $_GET['buscar'];
    if($let != null){
      $movies = Movie::where('title','LIKE',"%$let%")->paginate(5);
      return view('list_movies')->with('movies',$movies);
    }else{
      $movies = Movie::paginate(10);
      return view('list_movies')->with('movies',$movies);
    }
  }
}
