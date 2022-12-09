<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Group extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_categories';
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
}
