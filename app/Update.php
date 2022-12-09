<?php

namespace app;

use App\User;
use Validator;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $table = 'users';
    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function scopeValidator($query, array $data)
    {
        return Validator::make($data, [
          'name' => 'required|max:255',
         // 'email' => 'required|email|max:255|unique:users',
          'password' => 'required|confirmed|min:6',
        ]);

/*
*/
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    public function scopeUpdates($query, array $data, $idw)
    {
        //return DB::update('update users set password = '.bcrypt($data['password']).' where id = ?', [$idw]);

//   $users = User::where('id',"=",$idw)->take(1)->get();
   $user = User::find($idw);
        $user->email=$data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return $user;
    /*
        return User::update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    */
    }
}
