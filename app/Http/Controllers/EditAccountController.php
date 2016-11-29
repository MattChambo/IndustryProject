<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EditAccountController extends Controller
{
     public function index(){
    	return view('editaccount.index');
    }
}
