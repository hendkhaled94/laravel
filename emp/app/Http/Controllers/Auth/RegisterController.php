<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Employee;
use Storage;
use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/adminpanel/employees';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
            'fname' => 'required|regex:/^[a-zA-Z]+$/',
            'lname' => 'required|regex:/^[a-zA-Z]+$/',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'job' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
        $user=new User([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $storedImage='';
        $employee=new Employee();
        // dd($data->fname)
        $employee->fname=$data['fname'];
        $employee->lname=$data['lname'];
        if(Input::hasFile('image')){
            // $storedImage=$data->image->store('public/images');
            $storedImage = Storage::putFile('public/images', $data['image']);
        }
        $employee->image=$storedImage;
        $employee->job=$data['job'];
        //bad try , can't use this point in json
        //$employee->location=DB::raw("GeomFromText('POINT(" . $data['location'] . ")')");
        $employee->status=2;
        DB::transaction(function() use ($user, $employee) {
            $user->save();
            User::findOrFail($user->id)->employee()->save($employee);
          
        });
       return redirect()->back();
    }
}
