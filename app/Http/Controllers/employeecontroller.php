<?php

namespace App\Http\Controllers;
use App\Employee;

use Illuminate\Http\Request;

class employeecontroller extends Controller
{
        public function index(){
 
     
 
        return view('theme');
    }
    public function create(Request $request)
    {
    	$employees=new Employee();

    	$employees->name=request('name');
    	$employees->email=request('email');
    	$employees->designation=request('designation');
    	$employees->address=request('address');
    	$employees->phoneno=request('phoneno');

    	$employees->save();

	}

public function show()
{
			$employee1 = Employee::all();
        return view('displayall')->with(compact('employee1'));

}

 
 
 

  

}
