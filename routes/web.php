<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'indexP'])->name('projects.projectList');

Route::get('/project/ListTypes', [MainController::class, 'indexTy'])->name('projects.typeList');

Route::get('/project/ListTec', [MainController::class, 'indexTc'])->name('projects.technologiesList');

Route::get('/project/add/CreateProj', [MainController::class, 'createP'])->name('projects.createProject');

Route::post('/project', [MainController::class, 'storeP'])->name('projects.storeProject');

