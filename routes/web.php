<?php

use App\Http\Controllers\GiftController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GiftController::class, 'list']);
