<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactMassageController extends Controller
{
    public function send(Request $request){
        $data = $request->all();

        return response()->json($data);
    }
}
