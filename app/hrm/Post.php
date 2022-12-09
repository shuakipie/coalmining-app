<?php

namespace app\hrm;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_post';
  //  protected $fillable = array('category','user');
    public $timestamps = false;
/*
    public function Task()
    {
        return $this->hasManyThrough('App\Task', 'App\Milestone', 'cat_id', 'milestone_id');
    }
    */

    public function Emp()
    {
        return $this->hasMany('App\Employee', 'post_id');
    }

     public function Dept()
    {
        return $this->belongsTo('App\hrm\Department', 'dept_id');
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
        $emp->post= $data['post'];
        $emp->dept_id = $data['dept_id'];
        $emp->save();
        return $emp;
    }
    public function scopeDoUpdate($query, array $data)
    {

        $emp = self::find($data['id']);
         $emp->post= $data['post'];
        $emp->dept_id = $data['dept_id'];
        $emp->save();
        return $emp;
    }
}
