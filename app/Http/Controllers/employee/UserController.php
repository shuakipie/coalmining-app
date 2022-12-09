<?php

namespace app\Http\Controllers\employee;

use App\hrm\Employee;
use App\hrm\Attendance;
use App\hrm\Timesheet;
use App\hrm\Department;
use App\hrm\Post;
use App\hrm\Leave;
use App\hrm\Logs;
use App\hrm\Payroll;
use App\hrm\Project;
use Hash;
use Auth;
use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\custom\Curl;
use Carbon\Carbon;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     */
    private $emps;

    public function __construct()
    {
        if(session('emp_id')==''){
        return redirect('/');
        }
        $id = session('emp_id');
        $this->emps=Employee::where('id', '=', $id)->get();
    }


    public function authenticate(Request $request)
    {
       $formData = $request->all();
       
      $hash_password=Hash::make($formData['password']);

      //is member available
       $members_count=Employee::Where('email','=',$formData['email'])
       //->Where('password','=',$hash_password)
       ->Where('status', '=', '1')
       ->count();


       //password check
       if($members_count>0){
       $members=Employee::Where('email','=',$formData['email'])
       ->Where('status', '=', '1')
       ->first();

        if(Hash::check($formData['password'], $members->password)){
         // Session::put('emp_id', $members[0]['id']);
          //Session::put('emp_name', $members[0]['name']);
          
          $request->session()->put('emp_id', $members->id);
          $request->session()->put('emp_name', $members->name);
          return redirect('employee/dashboard'); 
        }
        else{
        //echo 'password wrong';
        return redirect('/')->withErrors('Password Mismatch!');
        }
       }
       else{
        //echo 'user not found';
        return redirect('/')->withErrors('Employee not found!!');
       }

    }
    
    public function appoint()
    {
        $id = session('emp_id');
        if(session('emp_id')==''){
        return redirect('/');
        }
   return view('Employee/appointment')->with('emps',$this->emps);
    }

    public function index()
    {
        $id = session('emp_id');
        if(session('emp_id')==''){
        return redirect('/');
        }
      
       $tot_hours=Timesheet::Where('emp_id', '=', $id)
       ->Select(DB::Raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(tbl_timesheet.end_time) - UNIX_TIMESTAMP(tbl_timesheet.start_time))) as total'))
       ->get();
              $tot_hours=$tot_hours[0]['total'];
        $pay=Payroll:: Where('emp_id', '=', $id)
          ->select(DB::Raw('sum(pay)+sum(incentive) as total'))->get();
        $salary=$pay[0]['total'];
        
        $tot_days=Attendance::Where('emp_id', '=', $id)
          ->Where('emp_id', '=', $id)
          ->count();

      $hours=Timesheet::Where('emp_id', '=', $id)
       ->Select(DB::Raw('SEC_TO_TIME(UNIX_TIMESTAMP(tbl_timesheet.end_time) - UNIX_TIMESTAMP(tbl_timesheet.start_time)) as total, tbl_timesheet.*'))
       ->Having('total', '>', 0)
       ->Limit(100)
       ->OrderBy('id' ,'DESC')
       ->get()
       ->groupBy(function($date) {
        return Carbon::parse($date->start_time)->format('Y-m-d'); // grouping by years
        });
       //print_r($hours);
       /*
        foreach ($hours as $hour){
          //print_r($hour);
          foreach ($hour as $hour2){
            echo $hour2;  
          }
        }
*/

      return view('Employee/home')->with('tot_hours', $tot_hours)->with('tot_days', $tot_days)->with('hours', $hours)->with('salary', $salary)->with('emps',$this->emps);
    }


  
/* Leave */
    public function leave()
    {
        
        if(session('emp_id')==''){
        return redirect('/');
        }
        $id = session('emp_id');
        $employees=Leave::with('emp')
              ->Where('emp_id', '=', $id)
              -> Select(DB::Raw('datediff(tbl_leave.end_date,tbl_leave.start_date) as duration,  tbl_leave.*'))
              ->paginate(25);
        return view('Employee/leave')->with('employees', $employees)->with('emps',$this->emps);
    }

    public function doleave(Request $request)
    {
         if(session('emp_id')==''){
        return redirect('/');
        }
        $id = session('emp_id');

        $formData = $request->all();
        $new_arr  = array('emp_id' => $id);
        $formData = array_replace($formData, $new_arr);
        $emp_create= Leave::DoCreate($formData);

        
        //logging
        //$log_data=array('Leave Created', $emp_create['id'], 'Leave');
        //$log=Logs::DoEntry($log_data);

        return redirect('employee/leave')->with('message', 'Leave Requested!');
    }


/* TimeSheet */
    public function timesheet()
    {
        
        if(session('emp_id')==''){
        return redirect('/');
        }
        $id = session('emp_id');
      
      /*
        $remove_empty=Timesheet::
        Where('emp_id', '=', $id)
       ->Select(DB::Raw('timediff(tbl_timesheet.end_time,tbl_timesheet.start_time) as duration, tbl_timesheet.id'))
       ->OrderBy('id', 'DESC')
       ->Having('duration', '=', "00:00:00")
       ->get();        
       //print_r($remove_empty);
       if(isset($remove_empty)){
       foreach ($remove_empty as $rem) {
        //echo $rem->id;
        //echo "<br />";
        $delete=Timesheet::find($rem->id)->delete();
       }
      }
      */
       

        $employees=Timesheet::with('emp')->with('project')
        ->Where('emp_id', '=', $id)
       ->Select(DB::Raw('timediff(tbl_timesheet.end_time,tbl_timesheet.start_time) as duration, tbl_timesheet.*'))
       ->OrderBy('id', 'DESC')
       ->paginate(25);

       $employees2=Timesheet::Where('emp_id', '=', $id)
       ->Select(DB::Raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(tbl_timesheet.end_time) - UNIX_TIMESTAMP(tbl_timesheet.start_time))) as total'))
       ->get();
       $tot=$employees2[0]['total'];
      
        $projects=Project::Where('status', '=', '0')->get();
       return view('Employee/timesheet')->with('employees', $employees)
       ->with('projects', $projects)->with('tot', $tot)->with('emps',$this->emps);      
    }

    public function dotime(Request $request)
    {
         if(session('emp_id')==''){
        return redirect('/');
        }
        $id = session('emp_id');

        $formData = $request->all();

        $start_time = date('Y-m-d H:i:s');
        $new_arr  = array('emp_id' => $id, 'start_time' => $start_time, 'end_time' => $start_time);

        
        $formData = array_replace($formData, $new_arr);
        $emp_create= Timesheet::DoCreate($formData);
        return $emp_create['id'];
        //return response()->json(['responseText' => 'Success!'], 200);     
    }    

    public function dotime2(Request $request)
    {
         if(session('emp_id')==''){
        return redirect('/');
        }
        $id = session('emp_id');
        $formData = $request->all();

        //$time2=Timesheet::Where('emp_id', '=', $id)->OrderBy('id', 'DESC')->Limit(1)->get();
        //$formData['id']=$time2[0]['id'];

        $end_time = date('Y-m-d H:i:s');

        
        $time=Timesheet::find($formData['id']);
        $time->end_time=$end_time;
        $time->save();
        //return $time['id'];
        return response()->json(['responseText' => 'Success!'], 200);     
    }    


//Attendance
    public function attendance()
    {
        
        if(session('emp_id')==''){
        return redirect('/');
        }
        $id = session('emp_id');

        $employees=Attendance::with('emp')
       ->Where('emp_id', '=', $id)
       ->get();

       $chks=Attendance::Where('emp_id', '=', $id)
          ->WhereDate('work_in','=', date('Y-m-d'))
          ->Limit(1)
          ->get();
        
      //  print_r($chks);
       return view('Employee/attendance')->with('employees', $employees)
       ->with('chks', $chks)->with('emps',$this->emps);
       
    }

    public function doentry(Request $request)
    {
         if(session('emp_id')==''){
        return redirect('/');
        }
        $id = session('emp_id');

        //$formData = $request->all();

        $time = date('Y-m-d H:i:s');
        $chk1=Attendance::Where('emp_id', '=', $id)
        ->WhereDate('work_in','=', date('Y-m-d'))->count();
        if($chk1>0){
          //echo $chk1;
          $chk=Attendance::Where('emp_id', '=', $id)
          ->WhereDate('work_in','=', date('Y-m-d'))
          ->get();
          //print_r($chk);
          //echo $chk[0]['id'];
          $time2=Attendance::find($chk[0]['id']);
          $time2->work_out=$time;
          $time2->save();
        }
        else{
        $formData=array('emp_id' => $id, 'work_in' => $time, 'work_out' => $time);
        //print_r($formData);
        $emp_create= Attendance::DoCreate($formData);
        }
      
        return response()->json(['responseText' => 'Success!'], 200);     
    }    

    

    public function password()
    {
      $id = session('emp_id');
                if(session('emp_id')==''){
        return redirect('/');
        }
       return view('Employee/password')->with('emps',$this->emps);
    }


    public function passupd(Request $request)
    {
        $id = session('emp_id');
                if(session('emp_id')==''){
        return redirect('/');
        }
        $data = $request->all();

        if($data['new_pass']!=$data['new_pass2']){
          return redirect('employee/password')->withErrors('New Passwords Mismatch!');
        } 

        $member = Employee::find($id);
        
       //change password
        if(Hash::check($data['old_pass'], $member->password)){
          $new_pass_hash=Hash::make($data['new_pass']);
          $member->password = $new_pass_hash;
          $member->save();
          return redirect('employee/password')->with('message', 'Password Updated Successfully!');
        }
        else{
        return redirect('employee/password')->withErrors('Old Password Mismatch');
        }

       
    }

    public function profile()
    {
      $id = session('emp_id');
                if(session('emp_id')==''){
        return redirect('/');
        }
        $employees = Employee::Where('id', '=', $id)->get();
       return view('Employee/profile')->with('employees', $employees)->with('emps',$this->emps);
    }


    public function profileupd(Request $request)
    {
        $id = session('emp_id');
                if(session('emp_id')==''){
        return redirect('/');
        }
        $formData = $request->all();
        $emp_create= Employee::DoUpdate($formData);
       return redirect('employee/profile')->with('message', 'Updated Successfully');
    }    
   

public function payroll()
{
     $id = session('emp_id');
                if(session('emp_id')==''){
        return redirect('/');
        }
  $payout = Payroll::with('emp')->Where('emp_id','=', $id)->paginate(25);
  return view('Employee/payroll')->with('payouts', $payout)->with('emps',$this->emps);
}

 public function statement(Request $request){
     $id = session('emp_id');
                if(session('emp_id')==''){
        return redirect('/');
        }

   $Data=$request->all();
   //print_r($Data);
   if(isset($Data['foo'])){
    $payout = [];
    $words = [];
   foreach($Data['foo'] AS $foo){
    $payout[]=Payroll::with('emp')->Where('id','=',$foo)->get();
    $words[]=$this->int_to_words(round($payout[0][0]['net']));
   }
  }
  else{
     return redirect('employee/payroll')->withErrors('Please select atleast one to print!');
  }
   //print_r($words);
  

  return view('Employee/salaryslip')->with('payout',$payout)
  ->with('words',$words)->with('emps',$this->emps);
}



public function logout(){
Session::forget('emp_id');
return redirect('/');
}

public function int_to_words($x)       {
$nwords = array("zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen", "twenty", 30 => "thirty", 40 => "forty", 50 => "fifty", 60 => "sixty", 70 => "seventy", 80 => "eighty", 90 => "ninety" );
           if(!is_numeric($x))
           {
               $w = '#';
           }else if(fmod($x, 1) != 0)
           {
               $w = '#';
           }else{
               if($x < 0)
               {
                   $w = 'minus ';
                   $x = -$x;
               }else{
                   $w = '';
               }
               if($x < 21)
               {
                   $w .= $nwords[$x];
               }else if($x < 100)
               {
                   $w .= $nwords[10 * floor($x/10)];
                   $r = fmod($x, 10);
                   if($r > 0)
                   {
                       $w .= '-'. $nwords[$r];
                   }
               } else if($x < 1000)
               {
                   $w .= $nwords[floor($x/100)] .' hundred';
                   $r = fmod($x, 100);
                   if($r > 0)
                   {
                       $w .= ' and '. $this->int_to_words($r);
                   }
               } else if($x < 100000)
               {
                   $w .= $this->int_to_words(floor($x/1000)) .' thousand';
                   $r = fmod($x, 1000);
                   if($r > 0)
                   {
                       $w .= ' ';
                       if($r < 100)
                       {
                           $w .= 'and ';
                       }
                       $w .= $this->int_to_words($r);
                   }
               } else {
                   $w .= $this->int_to_words(floor($x/100000)) .' lakh';
                   $r = fmod($x, 100000);
                   if($r > 0)
                   {
                       $w .= ' ';
                       if($r < 100)
                       {
                           $word .= 'and ';
                       }
                       $w .= $this->int_to_words($r);
                   }
               }
           }
           return $w;
}



}
