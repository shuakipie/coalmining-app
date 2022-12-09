<?php

namespace app\hrm;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Payroll extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_payroll';
    //protected $fillable = array('category','user');
    public $timestamps = false;

    
public function Emp()
    {
        return $this->belongsTo('App\hrm\Employee', 'emp_id');
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
