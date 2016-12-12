<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

use App\User;

use Session;

class ApprovalController extends Controller
{
	    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	    {
	    	if(\Auth::user()->privilege != 'admin'){
            Session::flash('error', 'You can not view this page without admin privileges');
            return redirect('/');
        }


	        $users = User::where('privilege', '=', 'unapproved_user')->get();
	       

	        //return view('chapters.index')->withChapters($chapter);
	        return view('Approval.index', compact('users'));
	    }

    public function destroy($id)
	    {
	    	if(\Auth::user()->privilege != 'admin'){
            Session::flash('error', 'You can not view this page without admin privileges');
            return redirect('/');
        }
        
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

	  		Mail::send('auth.emails.authemail', ['users' => $users], function ($m) use ($users) {
	  			$m->from('matthewwilliamchamberlain@gmail.com', 'Sophisticated Pedagogical Practice');
	  			
	  			$m->to($users->email, $users->first_name)->subject('Your Approval for Sophisticated Pedagogical Practice');

	  			});

	  		Session::flash('success', 'The user was successfully approved');

	  		return redirect('Approval');
	  }
}
