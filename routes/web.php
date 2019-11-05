<?php
/*         -Ruta principal-         */
Route::get('/', function(){return view('home');});

/*        -Peliculas-               */
Route::get('/movies','MoviesController@list');
Route::get('/movies/search', 'MoviesController@search');
Route::get('/movies/top','MoviesController@top');
Route::get('/movies/{id}', 'MoviesController@searchId');

/*        -Actores-                 */
Route::get('/actors', 'ActorController@directory');
Route::get('/actors/search','ActorController@search');
Route::get('/actors/{id}', 'ActorController@searchActor');
//Route::get('/addMovie');

?>