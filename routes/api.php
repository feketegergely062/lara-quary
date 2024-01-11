<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/drinks", [PubController::class, "getDrinks"]);
Route::get("/name", [PubController::class, "getDrinkNames"]);
Route::get("/name", [PubController::class, "getDrinkNamesAlias"]);
Route::get("/drink", [PubController::class, "getSelectedDrinks"]);
Route::get("/drink", [PubController::class, "getConcrateDrink"]);
Route::get("/drink", [PubController::class, "getKaDrinks"]);
Route::get("/drink", [PubController::class, "getMoreValue"]);
Route::get("/drink", [PubController::class, "getAmountRange"]);
Route::post("/adddrink",[PubController::class, "addDrink"]);
Route::post("/lastid",[PubController::class, "getLastDrinkId"]);
Route::post("/moredrinks",[PubController::class, "addMoreDrinks"]);
Route::post("/updatedrinks",[PubController::class, "updateDrinks"]);
Route::post("/deletedrinks",[PubController::class, "deleteDrinks"]);
Route::get("/inner",[PubController::class, "innerJoin"]);
Route::get("/left",[PubController::class, "leftJoin"]);
Route::get("/right",[PubController::class, "rightJoin"]);