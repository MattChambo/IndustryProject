<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Session;

class ApprovalController extends Controller
{
    public function index()
	    {
	        $users = User::where('privilege', '=', 'unapproved_user')->get();
	       

	        //return view('chapters.index')->withChapters($chapter);
	        return view('Approval.index', compact('users'));
	    }

    public function destroy($id)
	    {
	        $users = User::findOrFail($id);

	        $users->delete();

	        Session::flash('success', 'The user was successfully deleted');

	        return redirect('Approval');
	    }

	  public function approve($id)
	  {
	  		$users = User::findOrFail($id);

	  		$users->privilege = 'user';

	  		$users->save();

	  		Session::flash('success', 'The user was successfully approved');

	  		return redirect('Approval');
	  }
}
