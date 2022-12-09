<?php

namespace app\Http\Controllers;

use App\Task;
use App\User;
use App\Milestone;
use App\Group;
use Auth;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Task Controller
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
    public function index($stat, $stat2)
    {
        $idw = Auth::user()->id;
        $milestones = Milestone::where('user_id', '=', $idw)->get();
        $groups = Group::where('user', '=', $idw)->get();
        if ($stat2 == 'list') {
            if ($stat == 'all') {
                $sym = '>=';
                $stat = '0';
            } elseif ($stat == 'overdue') {
                $sym = '=';
                $stat = '0';
            } elseif ($stat == 'archived') {
                $sym = '=';
                $stat = '1';
            }

            $tasks = Task::with('milestone')->where('user_id', '=', $idw)->where('status', $sym, $stat)->take(100)->orderBy('status', 'asc', 'schedule_dt', 'asc')->paginate(10);
        } else {
            if ($stat2 == 'low') {
                $pri = '0';
            } elseif ($stat2 == 'medium') {
                $pri = '1';
            } elseif ($stat2 == 'high') {
                $pri = '2';
            }

            $tasks = Task::with('milestone')->where('user_id', '=', $idw)->where('priority', '=', $pri)->take(100)->orderBy('status', 'asc', 'schedule_dt', 'asc')->paginate(10);
        }

        return view('tasks')->with('tasks', $tasks)->with('milestones', $milestones)->with('groups', $groups);
    }

    public function delete($id)
    {
        $user = Task::find($id)->delete();
 // $delete_action=Task::DoDelete($id);
   return redirect()->back()->with('message', 'Task Deleted Successfully');
    }

    public function edit($id)
    {
        $idw = Auth::user()->id;
        $tasks = Task::FindRecords($id);
        $milestone = Milestone::where('id', '!=', $tasks[0]['milestone']['id'])->where('user_id', '=', $idw)->get();

        return view('edittasks')->with('tasks', $tasks)->with('milestone', $milestone);
    }

    public function share($id)
    {
        $idw = Auth::user()->id;
        $users = User::where('id', '!=', $idw)->get();
        $tasks = Task::FindRecords($id);

        return view('sharetask')->with('tasks', $tasks)->with('users', $users)->with('taskid', $id);
    }

    public function create()
    {
        $idw = Auth::user()->id;
        $milestone = Milestone::where('user_id', '=', $idw)->get();

        return view('create')->with('milestone', $milestone);
    }

    public function finished($id, $stat)
    {
        $tasks = Task::UpdateStat($id, $stat);

        return redirect()->back();
    }

    public function docreate(Request $request)
    {
        $idw = Auth::user()->id;
        $formData = $request->all();
        $validator = Task::CreateValidator($formData);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $user_update = Task::DoCreate($formData, $idw);
        $tasks = Task::ShowRecords($idw);

        return redirect('tasks/view/all/list')->with('tasks', $tasks)->with('message', 'Task Created Successfully!');
    }

    public function update(Request $request)
    {
        $formData = $request->all();
        $validator = Task::EditValidators($formData);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $idw = Auth::user()->id;
        $task_update = Task::Updates($formData);
        $tasks = Task::ShowRecords($idw);

        return redirect('tasks/view/all/list')->with('tasks', $tasks)->with('message', 'Task Updated Successfully!');
//    return redirect()->back()->with('message', 'Task Updated Successfully!');
    }
}
