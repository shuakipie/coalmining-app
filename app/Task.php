<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Task extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_todo';

    public function Milestone()
    {
        return $this->belongsTo('App\Milestone', 'milestone_id');
    }

    /*
    public function Group(){
    return $this->belongsTo('App\Group');
    }
    */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['item', 'description', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function scopeShowRecords($query, $idw)
    {
        $users = self::where('user_id', '=', $idw)->take(100)->paginate(5);
//     print_r($users);
    // $phone = Task::find(1)->milestone;
//     return $phone;
    // $users = User::all();
     return $users;
    }

    public function scopeFindRecords($query, $idw)
    {
        $users = self::where('id', '=', $idw)->get();
    // $users = User::all();
     return $users;
    }

    public function scopeUpdateStat($query, $id, $stat)
    {
        $user = self::find($id);
        $user->status = $stat;
        if ($stat == 1) {
            $user->finish_dt = date('Y-m-d');
        } else {
            $user->finish_dt = '0000-00-00';
        }
        $user->save();

        return $user;
    }

    public function scopeCreateValidator($query, array $data)
    {
        return Validator::make($data, [
          'title' => 'required|max:100',
          'description' => 'required|max:150',
          'schedule_dt' => 'required|min:8',
        ]);
    }

    public function scopeEditValidators($query, array $data)
    {
        return Validator::make($data, [
          'title' => 'required|max:100',
          'description' => 'required|max:150',
          'schedule_dt' => 'required|min:8',
        ]);
    }

    public function scopeUpdates($query, array $data)
    {
        //  return DB::update('update users set password = '.bcrypt($data['password']).' where id = ?', [$idw]);
    //  $users = User::where('id',"=",$idw)->take(1)->get();
    if ($data['schedule_dt'] == '' or $data['schedule_dt'] == ' ') {
        $data['schedule_dt'] = '0000-00-00';
    } else {
        $data['schedule_dt'] = date('Y-m-d', strtotime($data['schedule_dt']));
    }

        if ($data['finish_dt'] == '' or $data['finish_dt'] == ' ') {
            $data['finish_dt'] = '0000-00-00';
        } else {
            $data['finish_dt'] = date('Y-m-d', strtotime($data['finish_dt']));
        }

        $task = self::find($data['id']);
        $task->item = $data['title'];
        $task->description = $data['description'];
        $task->milestone_id = $data['milestone'];
        $task->priority = $data['priority'];
        $task->schedule_dt = $data['schedule_dt'];
        $task->finish_dt = $data['finish_dt'];
        $task->save();

        return $task;
    }

    public function scopeDoCreate($query, array $data, $idw)
    {
        //  print_r($data);
      $task = new self();
        $task->item = $data['title'];
        $task->description = $data['description'];
        $task->milestone_id = $data['milestone'];
        $task->priority = $data['priority'];
        $task->user_id = $idw;
        $task->schedule_dt = date('Y-m-d', strtotime($data['schedule_dt']));
        $task->save();

        return $task;
    }
}
