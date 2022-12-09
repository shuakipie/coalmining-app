<?php

namespace app\Http\Controllers;

use App\Task;
use App\User;
use App\Milestone;
use App\Group;
use App\Share;
use Auth;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Group Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders Task Management List, Create, Edit & Delete
    | Of course, you are free to change or remove the
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
 public function shareupd(Request $request)
 {
     $data = $request->all();
     $idw = Auth::user()->id;
     $milestones = Milestone::where('user_id', '=', $idw)->get();
     $groups = Group::where('user', '=', $idw)->get();
     $share = new Share();
     $share->owner = $idw;
     $share->typeid = $data['task_id'];
     $share->type = 0;
     $share->user = $data['user'];
     $share->timestamps = false;
     $share->save();
     $tasks = Task::ShowRecords($idw);

     return redirect('tasks/view/all/list')->with('tasks', $tasks)->with('milestones', $milestones)->with('groups', $groups)->with('message', 'Task Shared Successfully!');
 }

    public function index($val)
    {
        $idw = Auth::user()->id;
        $milestones = Milestone::where('user_id', '=', $idw)->get();
        $groups = Group::where('user', '=', $idw)->get();
        if ($val == 'team') {
            $var = 'user';
        } elseif ($val == 'own') {
            $var = 'owner';
        }

        $share = Share::where($var, '=', $idw)->get();

        if (!$share->isEmpty()) {
            $tasks = Task::where('id', '=', $share[0]['typeid'])->paginate(10);
        } else {
            $tasks = Task::where('id', '=', '0')->paginate(10);
        }

        return view('tasks')->with('tasks', $tasks)->with('milestones', $milestones)->with('groups', $groups);
    }
}
