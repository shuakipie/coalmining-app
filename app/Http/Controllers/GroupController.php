<?php

namespace app\Http\Controllers;

use App\Task;
use App\User;
use App\Milestone;
use App\Group;
use Auth;
use Illuminate\Http\Request;

class GroupController extends Controller
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
    public function index()
    {
        $idw = Auth::user()->id;
        $groups = Group::where('user', '=', $idw)->paginate(10);

        return view('groups')->with('groups', $groups);
    }

    public function milestones($id)
    {
        $milestone = Milestone::with('group')->where('cat_id', '=', $id)->paginate(10);

        return view('milestones')->with('milestones', $milestone);
    }

    public function tasks($id)
    {
        $idw = Auth::user()->id;

        $milestones = Milestone::where('user_id', '=', $idw)->get();
        $groups = Group::where('user', '=', $idw)->get();

        $milestone = Milestone::where('cat_id', '=', $id)->get();
        $milestone_count = Milestone::where('cat_id', '=', $id)->count();

        $tasks = Task::with('milestone')
            ->join('tbl_milestone', 'tbl_todo.milestone_id', '=', 'tbl_milestone.id')
            ->join('tbl_categories', 'tbl_milestone.cat_id', '=', 'tbl_categories.id')
            ->where('tbl_categories.id', '=', $id)
            ->select('tbl_todo.*')
            ->paginate(10);

        return view('tasks')->with('tasks', $tasks)->with('milestones', $milestones)->with('groups', $groups);
    }

    public function delete($id)
    {
        $group = Group::find($id)->delete();

        return redirect()->back()->with('message', 'Group Deleted Successfully');
    }

    public function edit($id)
    {
        // $groups=Group::find($id)->get();
   $groups = Group::where('id', '=', $id)->get();

        return view('editgroup')->with('groups', $groups);
    }

    public function create()
    {
        return view('creategroup');
    }

    public function finished($id, $stat)
    {
        $tasks = Task::UpdateStat($id, $stat);

        return redirect()->back();
    }

    public function docreate(Request $request)
    {
        $data = $request->all();
        $validator = Group::Validator($data);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $group = new Group();
        $group->category = $data['group'];
        $group->user = Auth::user()->id;
        $group->timestamps = false;
        $group->save();
        $groups = Group::paginate(10);

        return redirect('groups')->with('groups', $groups)->with('message', 'Group Created Successfully!');
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $validator = Group::Validator($data);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $group = Group::find($data['id']);
        $group->category = $data['group'];
        $group->timestamps = false;
        $group->save();
        $groups = Group::paginate(10);

        return redirect('groups')->with('groups', $groups)->with('message', 'Group Updated Successfully!');
    }

    public function status($id)
    {
        $milestones = Milestone::where('cat_id', '=', $id)->get();
        $milestone = Milestone::where('cat_id', '=', $id)->count();
        $tasks = array();
        $task_count = array();
        for ($i = 0;$i < $milestone;++$i) {
            $task = Task::where('milestone_id', '=', $milestones[$i]['id'])->get();
            array_push($tasks, $task);
            $task_counts = Task::where('milestone_id', '=', $milestones[$i]['id'])->count();
            array_push($task_count, $task_counts);
        }
      //  print_r($tasks);
        $group = Group::find($id);
        $group_name = $group->category;

        return view('status')->with('group', $group_name)->with('milestones', $milestones)->with('tasks', $tasks)->with('task_count', $task_count);
    }
}
