<?php

namespace app\Http\Controllers;

use App\User;
use App\Update;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $idw = Auth::user()->id;
        $users = User::Sample($idw);

//     print_r($users);
     return view('auth/profile')->with('users', $users);

   //$data['users'] = User::Sample($idw);
    //return View::make('auth/profile', $data);
    }

    public function update(Request $request)
    {
        $idw = Auth::user()->id;
        $users = User::Sample($idw);
        $formData = $request->all();
        $validator = Update::Validator($formData);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $user_update = Update::Updates($formData, $idw);

        return redirect()->back()->with('message', 'Success, your profile now updated!');
//    return Redirect::to('auth/profile')->with('message', 'Success, your profile now updated!');
//   return view('auth/profile', compact('users'));
    }
}
