<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{

    function index(){

    	return view('login.index');
    }


    function verify(Request $request){


        $user = new Users();
        //data = $user->all();
      //  print_r($data);

        $data = $user->where('userName', $request->username)
                        ->where('password', $request->password)
                        ->get();

        //echo $data[0]->type;

    	if(count($data) > 0 )
      {


            if($data[0]['type']=='admin'){
              //$request->session()->put('type', "admin");
              $request->session()->put('username', $request->username);
                return redirect('/admin');
            }
            elseif($data[0]['type']=='employe'){
                //   $request->session()->put('type', "tutor");
                $request->session()->put('username', $request->username);
                   return redirect('/employe');
             }
    	}

      else
      {
            $request->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
        }
    }
}
