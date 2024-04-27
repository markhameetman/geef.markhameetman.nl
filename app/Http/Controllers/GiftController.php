<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function list(){
        return view('gifts.list', [
            'gifts' => Gift::all()
        ]);
    }
}
