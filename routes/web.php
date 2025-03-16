<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PetController};

Route::get('/', [PetController::class, "index"])->name("index");

Route::get('/pet-by-id', [PetController::class, "idView"])->name("pet.idView");
Route::post('/pet-by-id', [PetController::class, "getPetById"])->name("pet.searchById");

Route::get('/pet-by-status', [PetController::class, "statusView"])->name("pet.statusView");
Route::post('/pet-by-status', [PetController::class, "getPetByStatus"])->name("pet.searchByStatus");

Route::get('/create-pet', [PetController::class, "createView"])->name("pet.createView");
Route::post('/create-pet', [PetController::class, "createPet"])->name("pet.create");

Route::put('/edit-pet{id}', [PetController::class, "editPet"])->name("pet.edit");

Route::delete('/delete-pet{id}', [PetController::class, "deletePet"])->name("pet.delete");
