<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApprovalController extends Controller
{
    public function index(){
    	return view('approval.index');
    }
}
