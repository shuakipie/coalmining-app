<?php

namespace app\hrm;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_projects';
    protected $fillable = array('category','user');
    public $timestamps = false;

    public function Task()
    {
        return $this->hasManyThrough('App\Task', 'App\Milestone', 'cat_id', 'milestone_id');
    }

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */

     /**
      * The attributes excluded from the model's JSON form.
      *
      * @var array
      */
     public function scopeValidator($query, array $data)
     {
         return Validator::make($data, [
          'group' => 'required|max:150',
        ]);
     }


      public function scopeDoCreate($query, array $data)
    {

        $emp = new self();
        $emp->proj_title= $data['title'];
        $emp->proj_desc = $data['description'];
        $emp->start_date = date('Y-m-d', strtotime($data['start_date']));
        $emp->deadline = date('Y-m-d', strtotime($data['deadline']));
        $emp->save();
        return $emp;
    }
    public function scopeDoUpdate($query, array $data)
    {

        $emp = self::find($data['id']);
       $emp->proj_title= $data['title'];
        $emp->proj_desc = $data['description'];
       $emp->start_date = date('Y-m-d', strtotime($data['start_date']));
        $emp->deadline = date('Y-m-d', strtotime($data['deadline']));
        $emp->status = $data['status'];
        $emp->save();
        return $emp;
    }
}
