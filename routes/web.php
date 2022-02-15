<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//de route verwijst naar de ArticleController met de functie home en weergeeft de thuis pagina
Route::get('/', [ArticleController::class, 'home']);
//de route verwijst naar de ArticleController met de functie index
Route::get('/Article', [ArticleController::class, 'index']);
// create functie
Route::get('create', [ArticleController::class,'create']);
// store functie
Route::post('store', [ArticleController::class,'store']);
//de route verwijst naar de ArticleController met de functie content
Route::get('article/{id}',[ArticleController::class,'content']);

Route::get('contact', function ()
{
    return view('pages.contact');
});

Route::get('/admin-articles',[ArticleController::class,'read']);
Route::get('delete/{id}',[ArticleController::class, 'delete']);


// de home page heb in de Articlecontroller gezet.
//Route::get('/', function () {
//    return view('index');
//});

//Route::get('/create','Controller@create');
//Route::get('blog', function () {
//    $articales = \App\Models\Article::all();
//    dd($articales);
//    //$klasnaam = "palvsod2b";
//    return view('pages.blog', ['Articles' => $articales]);
//});

/*
 * de route verwijst naar de ArticleController met de functie create
 * deze functie verwijst naar de form pagina.
*/

/*
 * de route verwijst naar de ArticleController met de functie store
 * deze functie wordt gebruikt om de form gegevens opslaan in database en folder
*/


//met deze manier wordt functie uitgevoerd maar deze functie kan ook in een controller worden gezet
// dan ziet je web wat schoner uit.//////////////////////////////////////
//Route::get('/Article',  function  ()
//{
//    $articles = Article::all();
//
//    return view('pages.blog', ['articles' => $articles]);
//});
/////////////////////////////////////////////////////////////////////////
/*
Route::get('contact', function ()
{
    return view('pages.contact');
});


Route::get('welcome', function ()
{
    return view('welcome');
});
Route::get('dashboard', function()
{
    return view('pages.dashboard');
});*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
