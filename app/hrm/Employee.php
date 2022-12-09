<?php

namespace app\hrm;

use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Input;
use Image;
use Hash;

class Employee extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_emp';
    //protected $fillable = array('category','user');
    public $timestamps = false;

    public function Post()
    {
        return $this->belongsTo('App\hrm\Post', 'post_id');
    }

    public function Attendance()
    {
        return $this->hasMany('App\Attendance', 'emp_id');
    }

    public function Timesheet()
    {
        return $this->hasMany('App\Timesheet', 'emp_id');
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

   

    public function scopeDoCreate($query, array $data)
    {

        //new password generation


        $emp = new self();
        $emp->name= $data['name'];
        $emp->post_id = $data['posting'];
        $emp->father = $data['father'];
        $emp->dob = date('Y-m-d', strtotime($data['dob']));
        $emp->doj = date('Y-m-d', strtotime($data['doj']));
        $emp->password=Hash::make('123456');
        $emp->mobile = $data['mobile'];
        $emp->email = $data['email'];
        $emp->salary = $data['salary'];
        /*$emp->facebook = $data['facebook'];
        $emp->twitter = $data['twitter'];
        $emp->github = $data['github'];
        $emp->linkedin = $data['linkedin']; */
        $emp->sex=$data['sex'];
        $emp->address = $data['address'];
        $emp->notes = $data['notes'];
        $emp->status=1;
        $emp->save();
        
        //for photo upload
         if (isset($data['photo']))
        {   

            $ext=$data['photo']->getClientOriginalExtension();
            $file_name=$emp['id'].".".$ext;
            $path1=base_path().'/uploads/photo/';
            $path = $path1.$file_name;
            $image = Input::file('photo');
            Image::make($image->getRealPath())->resize(150, 150)->save($path);

             $emp->photo = $file_name;

        }

        else{
             $emp->photo = 'default.jpg';            
        }
        //for resume upload
        if (isset($data['resume']))
        {   
            $ext=$data['resume']->getClientOriginalExtension();
            $file_name=$emp['id'].".".$ext;
            $path=base_path().'/uploads/resume';
            $data['resume']->move($path, $file_name); 
            $emp->resume = $file_name; 
        }
        $emp->save();
        return $emp;
    }
    
    public function scopeDoUpdate($query, array $data)
    {

        //print_r($data);

        $emp = self::find($data['id']);
        $emp->name= $data['name'];
        $emp->post_id = $data['posting'];
        $emp->father = $data['father'];
        $emp->dob = date('Y-m-d', strtotime($data['dob']));
        $emp->doj = date('Y-m-d', strtotime($data['doj']));
        $emp->mobile = $data['mobile'];
        $emp->email = $data['email'];
        $emp->salary = $data['salary'];
        $emp->facebook = $data['facebook'];
        $emp->twitter = $data['twitter'];
        $emp->github = $data['github'];
        $emp->linkedin = $data['linkedin'];
        $emp->address = $data['address'];
        $emp->notes = $data['notes'];
        $emp->status=$data['status'];
        //$emp->save();

//echo $data['photo'];
        //for photo upload
        if (isset($data['photo']))
        {   

            $ext=$data['photo']->getClientOriginalExtension();
            $file_name=$data['id'].".".$ext;
            $path1=base_path().'/uploads/photo/';
            $path = $path1.$file_name;
            $image = Input::file('photo');
            Image::make($image->getRealPath())->resize(150, 150)->save($path);

             $emp->photo = $file_name;

        }
        //for resume upload
        if (isset($data['resume']))
        {   
            $ext=$data['resume']->getClientOriginalExtension();
            $file_name=$data['id'].".".$ext;
            $path=base_path().'/uploads/resume';
            $data['resume']->move($path, $file_name); 
            $emp->resume = $file_name; 
        }
        $emp->save();
        

return $emp;
    }
}

