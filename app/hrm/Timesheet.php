<?php

namespace app\hrm;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Timesheet extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_timesheet';
    //protected $fillable = array('category','user');
    public $timestamps = false;

    public function Emp()
    {
        return $this->belongsTo('App\hrm\Employee', 'emp_id');
    }

     public function Project()
    {
        return $this->belongsTo('App\hrm\Project', 'proj_id');
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

   

    public function scopeDoCreate($query, array $data)
    {

//echo $data['start_time'];
//echo '<br>';
//echo date('Y-m-d H:i', strtotime($data['start_time']));
        $emp = new self();
        $emp->emp_id= $data['emp_id'];
        $emp->proj_id = $data['proj_id'];
        $emp->start_time = date('Y-m-d H:i:s', strtotime($data['start_time']));
        $emp->end_time = date('Y-m-d H:i:s', strtotime($data['end_time']));
        $emp->task = $data['task'];
        $emp->notes = $data['notes'];
        $emp->save();
        return $emp;
    }
    public function scopeDoUpdate($query, array $data)
    {

        $emp = self::find($data['id']);
        $emp->emp_id= $data['emp_id'];
        $emp->proj_id = $data['proj_id'];
        $emp->start_time = date('Y-m-d H:i:s', strtotime($data['start_time']));
        $emp->end_time = date('Y-m-d H:i:s', strtotime($data['end_time']));
        $emp->task = $data['task'];
        $emp->notes = $data['notes'];
        $emp->save();
        return $emp;
    }
}


