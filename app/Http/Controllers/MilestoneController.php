<?php

namespace app\Http\Controllers;

use App\Task;
use App\User;
use App\Milestone;
use App\Group;
use Auth;
use Illuminate\Http\Request;

class MilestoneController extends Controller
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
    public function index()
    {
        $idw = Auth::user()->id;
        $milestones = Milestone::with('group')->where('user_id', '=', $idw)->paginate(10);

        return view('milestones')->with('milestones', $milestones);
    }

    public function tasks($id)
    {
        $idw = Auth::user()->id;
        $milestones = Milestone::where('user_id', '=', $idw)->get();
        $groups = Group::where('user', '=', $idw)->get();
        $tasks = Task::with('milestone')->where('milestone_id', '=', $id)->paginate(10);

        return view('tasks')->with('tasks', $tasks)->with('milestones', $milestones)->with('groups', $groups);
    }

    public function delete($id)
    {
        $group = Milestone::find($id)->delete();

        return redirect()->back()->with('message', 'Milestone Deleted Successfully');
    }

    public function edit($id)
    {
        $milestones = Milestone::where('id', '=', $id)->get();
        $group = Group::where('id', '!=', $milestones[0]['cat_id'])->get();

        return view('editmilestones')->with('milestones', $milestones)->with('group', $group);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $validator = Milestone::Validator($data);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $group = Milestone::find($data['id']);
        $group->milestone = $data['milestone'];

        $group->cat_id = $data['group'];
        $group->timestamps = false;
        $group->save();
        $groups = Milestone::paginate(10);

        return redirect('milestones')->with('groups', $groups)->with('message', 'Milestone Updated Successfully!');
    }

    public function create()
    {
        $idw = Auth::user()->id;
        $groups = Group::where('user', '=', $idw)->get();

        return view('createmilestone')->with('groups', $groups);
    }

    public function docreate(Request $request)
    {
        $data = $request->all();
        $validator = Milestone::Validator($data);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $group = new Milestone();
        $group->milestone = $data['milestone'];
        $group->cat_id = $data['group'];
        $group->user_id = Auth::user()->id;
        $group->timestamps = false;
        $group->save();
        $groups = Milestone::paginate(10);

        return redirect('milestones')->with('groups', $groups)->with('message', 'Milestone Created Successfully!');
    }
}
