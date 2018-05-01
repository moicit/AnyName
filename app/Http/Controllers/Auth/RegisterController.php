<?php

namespace MOIC\Http\Controllers\Auth;

use MOIC\User;
use MOIC\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use MOIC\Http\Requests;
use Auth;
use Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */




    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'Council' => ''
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \MOIC\User
     */

     public function update_avatar(Request $request){

      // Handle the user upload of avatar
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
      }

     }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'Council' => $data['Council'],
            'phone' => $data['phone'],
            'bio' => $data['bio'],
            'fbLink' => $data['fbLink'],
        ]);
    }



}
