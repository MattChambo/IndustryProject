<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Session;

class EditAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index(){

       
            $user = User::findOrFail(\Auth::user()->id);

            return view('editaccount.index', compact('user'));

     	
    }

    public function update(Request $request){
    	 $this->validate($request, array(
            'first_name' => 'required|min:1|max:255',
            'last_name' => 'required|min:1|max:255',
            'email' => 'email|required|min:1|max:255',
            'password' => 'required|min:1|max:255'

         ));

        $user = User::findOrFail(\Auth::user()->id);

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = password_hash($request->input('password'), PASSWORD_BCRYPT );

        $user->save();

        Session::flash('success', 'Your account details have been saved.');

        return redirect('/');
    }

     public function destroy(Request $request){

         

            $user = User::findOrFail(\Auth::user()->id);

            $user->delete();

            Session::flash('success', 'Your account was successfully deleted');

            return redirect('/');
    }
}
