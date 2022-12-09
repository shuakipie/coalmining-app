<?php
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('/', 'WelcomeController@index');
//Route::get('admin/home', 'HomeController@index');

//Home
Route::get('admin/dashboard', 'HomeController@index');
Route::get('admin/company/hierarchy', 'HomeController@tree');
Route::get('admin/settings/system-logs', 'HomeController@logs');
Route::resource('admin/logs/search', 'HomeController@logs_search');
Route::get('admin/settings/general', 'HomeController@settings');
Route::resource('admin/settings/update', 'HomeController@settingsupd');

/*
| Admin Profile Controller
*/
Route::get('admin/settings/profile', 'ProfileController@index');
Route::resource('update', 'ProfileController@update');

//Employees
Route::get('admin/emp', 'admin\EmployeeController@index');
Route::get('admin/emp/create', 'admin\EmployeeController@create');
/*
Route::get('admin/emp/create', function(){
	return view('Admin/Employee/create');
});
*/

Route::resource('admin/emp/docreate', 'admin\EmployeeController@docreate');
Route::get('admin/emp/edit/{param}', 'admin\EmployeeController@edit');
Route::resource('admin/emp/update/', 'admin\EmployeeController@update');
Route::resource('admin/emp/search', 'admin\EmployeeController@search');

//Projects
Route::get('admin/projects', 'admin\ProjectController@index');
Route::get('admin/projects/create', function(){
	return view('Admin/Projects/create');
});
Route::resource('admin/projects/docreate', 'admin\ProjectController@docreate');
Route::get('admin/projects/edit/{param}', 'admin\ProjectController@edit');
Route::resource('admin/projects/update/', 'admin\ProjectController@update');
Route::get('admin/projects/delete/{param}', 'admin\ProjectController@delete');
Route::resource('admin/projects/search', 'admin\ProjectController@search');

//Leave
Route::get('admin/leave', 'admin\LeaveController@index');
Route::get('admin/leave/create', 'admin\LeaveController@create');
Route::resource('admin/leave/docreate', 'admin\LeaveController@docreate');
Route::get('admin/leave/edit/{param}', 'admin\LeaveController@edit');
Route::resource('admin/leave/update/', 'admin\LeaveController@update');
Route::get('admin/leave/delete/{param}', 'admin\LeaveController@delete');
Route::resource('admin/leave/search', 'admin\LeaveController@search');

Route::get('admin/leave/report', function(){
	return view('Admin/Leave/report')->with('data','0');
});
Route::resource('admin/leave/reportprocess', 'admin\LeaveController@date_report');

//Attendance
Route::get('admin/attendance', 'admin\AttendanceController@index');
Route::get('admin/attendance/create', 'admin\AttendanceController@create');
Route::resource('admin/attendance/docreate', 'admin\AttendanceController@docreate');
Route::get('admin/attendance/edit/{param}', 'admin\AttendanceController@edit');
Route::resource('admin/attendance/update/', 'admin\AttendanceController@update');
Route::get('admin/attendance/delete/{param}', 'admin\AttendanceController@delete');
Route::get('admin/attendance/calendar-view', 'admin\AttendanceController@full');
Route::resource('admin/attendance/search', 'admin\AttendanceController@search');
Route::get('admin/attendance/report', function(){
	return view('Admin/Attendance/report')->with('data','0');
});
Route::resource('admin/attendance/reportprocess', 'admin\AttendanceController@date_report');

//Guest Entry
Route::get('admin/attendance/guests', 'admin\AttendanceController@guests');
Route::get('admin/attendance/guest-entry', 'admin\AttendanceController@create');
Route::resource('admin/attendance/guest/docreate', 'admin\AttendanceController@docreate2');
Route::get('admin/attendance/guest/edit/{param}', 'admin\AttendanceController@edit2');
Route::resource('admin/attendance/guest/update/', 'admin\AttendanceController@update2');
Route::resource('admin/guest/search', 'admin\AttendanceController@guest_search');


//Department
Route::get('admin/company/dept', 'admin\DeptController@index');
Route::get('admin/company/dept/create', function(){
	return view('Admin/Department/create');
});
Route::resource('admin/dept/docreate', 'admin\DeptController@docreate');
Route::get('admin/company/dept/edit/{param}', 'admin\DeptController@edit');
Route::resource('admin/dept/update/', 'admin\DeptController@update');
Route::get('admin/dept/delete/{param}', 'admin\DeptController@delete');

//Posting
Route::get('admin/company/posting', 'admin\PostController@index');
Route::get('admin/posting/create', 'admin\PostController@create');
Route::resource('admin/posting/docreate', 'admin\PostController@docreate');
Route::get('admin/company/posting/edit/{param}', 'admin\PostController@edit');
Route::resource('admin/posting/update/', 'admin\PostController@update');
Route::get('admin/posting/delete/{param}', 'admin\PostController@delete');


//Time Sheet
Route::get('admin/timesheet', 'admin\TimeController@index');
Route::get('admin/timesheet/create', 'admin\TimeController@create');
Route::resource('admin/timesheet/docreate', 'admin\TimeController@docreate');
Route::get('admin/timesheet/edit/{param}', 'admin\TimeController@edit');
Route::resource('admin/timesheet/update/', 'admin\TimeController@update');
Route::get('admin/timesheet/delete/{param}', 'admin\TimeController@delete');
Route::resource('admin/timesheet/search', 'admin\TimeController@search');
Route::get('admin/timesheet/report', function(){
	return view('Admin/Timesheet/report')->with('data','0');
});
Route::resource('admin/timesheet/reportprocess', 'admin\TimeController@date_report');

//Payroll
Route::get('admin/payroll', 'admin\PayrollController@index');
Route::resource('admin/payroll/generate', 'admin\PayrollController@generate');
Route::resource('admin/payroll/savedata', 'admin\PayrollController@savedata');

/**
*	@TODO Payroll Finish
*/
Route::get('admin/payroll/statements', 'admin\PayrollController@statement');
Route::resource('admin/payroll/statement-view', 'admin\PayrollController@statementview');
Route::resource('admin/payroll/statements/search', 'admin\PayrollController@statementsearch');
Route::resource('admin/payroll/statements/filter', 'admin\PayrollController@statementfilter');

Route::get('admin/payroll/edit/{param}', 'admin\PayrollController@edit');
Route::resource('admin/payroll/update/', 'admin\PayrollController@update');





//Employee Login
Route::resource('employee/login', 'employee\UserController@authenticate');
Route::get('employee/dashboard', 'employee\UserController@index');

Route::get('employee/leave', 'employee\UserController@leave');
Route::resource('employee/leave/docreate', 'employee\UserController@doleave');


//Timesheet
Route::get('employee/timesheet', 'employee\UserController@timesheet');
Route::get('employee/timesheetupd', 'employee\UserController@dotime');
Route::get('employee/timesheetupd2', 'employee\UserController@dotime2');

//Attendance
Route::get('employee/attendance', 'employee\UserController@attendance');
Route::get('employee/attendanceupd', 'employee\UserController@doentry');
Route::get('employee/attendanceupd2', 'employee\UserController@doentry2');


Route::get('employee/payroll', 'employee\UserController@payroll');
Route::resource('employee/payroll/salaryslip', 'employee\UserController@statement');


Route::get('employee/logout', 'employee\UserController@logout');
Route::get('employee/appointment-letter', 'employee\UserController@appoint');


Route::get('employee/password', 'employee\UserController@password');
Route::resource('employee/passupd', 'employee\UserController@passupd');
Route::get('employee/profile', 'employee\UserController@profile');
Route::resource('employee/profileupd', 'employee\UserController@profileupd');


Route::get('employee/idcard', 'employee\UserController@idcard');









//Authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
/*    'profile'=> 'Auth\ProfileController',
*/
]);




