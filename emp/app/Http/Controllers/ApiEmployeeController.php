<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class ApiEmployeeController extends Controller
{
    //
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees=Employee::all();
        return $employees;
    }
        //
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $employees=Employee::where('lname', 'LIKE', '%'. $request->searchBy .'%')
        ->get();
        return $employees;
    }

}
