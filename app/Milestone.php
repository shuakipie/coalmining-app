<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Validator;
use Auth;

class Milestone extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_milestone';
    protected $fillable = array('milestone', 'cat_id', 'user_id');
    public $timestamps = false;

    public function Task()
    {
        return $this->hasMany('App\Task');
    }

    public function Group()
    {
        return $this->belongsTo('App\Group', 'cat_id');
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
          'milestone' => 'required|max:150',
        ]);
     }
      /*
    public function scopeStatus(){
    /*
    $milestone=Milestone::all();
    $tasks=Task::where('milestone_id',"=",$milestone[0]['id'])->count();
    $div=floor(100/$tasks);
    $calc=
    return with('milestone',$milestone);
    }
    */

    public function scopeStatus()
    {
        $idw = Auth::user()->id;
      // echo $idw;
      $milestones = self::where('user_id', '=', $idw)->get();
        $milestone = self::where('user_id', '=', $idw)->count();
        $milestone_count = array();
        $milestone_count2 = array();
        $div_count = array();
        for ($i = 0;$i < $milestone;++$i) {
            $tasks1 = Task::with('milestone')->where('milestone_id', '=', $milestones[$i]['id'])->count();
            array_push($milestone_count, $tasks1);
            $tasks2 = Task::with('milestone')->where('milestone_id', '=', $milestones[$i]['id'])->where('status', '=', '1')->count();
            array_push($milestone_count2, $tasks2);

            $div = @(100 / $tasks1);
            if (false === $div) {
                $div = null;
            }
            $count = $div * $tasks2;
            array_push($div_count, $count);
        }

        return $div_count;
    }
}
