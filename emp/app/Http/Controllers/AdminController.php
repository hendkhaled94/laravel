<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;
class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        return view('admin.layouts.app');
    }

}
