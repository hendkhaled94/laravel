<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Employee;
use App\User;
use DB;
use Storage;
use Session;

class AdminEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $users=User::all();
        return view('admin.employees.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::findOrFail($id);
        return view('admin.employees.edit')->withUser($user);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $imageValidation='';
        if(isset($request->image)){
           $imageValidation='required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }
        $this->validate($request, [
            'fname' => 'required|',
            'lname' => 'required|',
            'image'=>$imageValidation,
            'job' => 'required',
            'location' =>'required',

        ]);
      
        
        $employee=User::findOrFail($id)->employee;
        $employee->fname=$request->fname;
        $employee->lname=$request->lname; 
        if(isset($request->image)){
            $storedImage='';
            if(Input::hasFile('image')){
                // $storedImage=$data->image->store('public/images');
                $storedImage = Storage::putFile('public/images', $request->image);
            }
          $employee->image=$storedImage;
        }
        $employee->job=$request->job;
        $employee->status=2;
        
        User::findOrFail($id)->employee()->save($employee);

        return redirect()->route('employees.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
