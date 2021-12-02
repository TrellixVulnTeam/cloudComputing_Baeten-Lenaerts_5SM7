<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\RulesController;     
use App\Http\Controllers\homebrewController;     
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

Route::get('/', [CharacterController::class, 'home']);

Route::get('/home', [CharacterController::class, 'home']);
Route::get('/randomCharacterCreation', [CharacterController::class, 'RCC']);
Route::get('/rules', [RulesController::class, 'rules']);

Route::get('/spells', [RulesController::class, 'foundSpells']);
//Route::post('/foundSpells', [RulesController::class, 'foundSpells']);
Route::get('/showSpell/{name}', [RulesController::class, 'showSpell']);

Route::get('/classes', [RulesController::class, 'foundClasses']);
//Route::get('/foundClasses', [RulesController::class, 'foundClasses']);
Route::get('/showClass/{name}', [RulesController::class, 'showClass']);

//Route::get('/character/{weight}/{lenght}', [CharacterController::class, 'showBMI']);

// homebrew content
Route::get('/homebrew', [homebrewController::class, 'homebrew']);
//Route::get('/homebrewspellcreator', [homebrewController::class, 'homebrewSpellCreator']);
Route::get('/foundHomebrewSpells', [homebrewController::class, 'foundHomebrewSpells']);
Route::get('/showHomebrewSpell/{name}', [homebrewController::class, 'showHomebrewSpell']);