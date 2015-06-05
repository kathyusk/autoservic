<?php use Autoservice\Http\Entities\County;
use Autoservice\Http\Entities\City;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

//Route::get('/counties/', function(){
  //  $departamentos = County::all();

    //return view('counties')->with('departamentos',$departamentos);
    //return view('counties')->with(compact('departamentos'));
//});

//Route::get('/cities/', function(){
  //  $ciudades = City::all();

    //return view('counties')->with('departamentos',$departamentos);
  //  return view('cities')->with(compact('ciudades'));
//});


Route::resource('departamentos' , 'CountyController');

Route::resource('ciudades' , 'CityController');


Route::get('/tunombre/{nombre}/{apellido}' , function($nombre = null, $apellido = null){
    return "tu nombre es: ".$nombre." ".$apellido;});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



route::group (['prefix'=>'operations'], function(){

    Route::get('/sum/','OperationController@sum');

    Route::get('/sum/{num1}/{num2}','OperationController@sum');

    Route::get('/subtraction/{num1}/{num2}','OperationController@subtraction');

    Route::get('/multiplication/{num1}/{num2}','OperationController@multiplication');

    Route::get('/division/{num1}/{num2}','OperationController@division');

});