<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeData extends Controller
{
    // Get Employees................
    public function get_employees(Request $request)
    {
      $sort = '';
      $employee = Employee::query();
        if ($request->has('sort')) {
            $sort = $request->get('sort');
            $employees = $employee->orderBy($sort, 'asc')->paginate(10);
        }else{
            $employees = $employee->paginate(10);
        }
        return view('employees',['employees'=>$employees,'sort'=>$sort]);
    }

    // Add Employee................
    public function add_employee()
    {
      return view('add_employee');
    }

    // Save Employee................
    public function save_employees(Request $request)
    {
      $employees = new Employee();
      $employees->username = $request->username;
      $employees->email = $request->email;
      $employees->phone_no = $request->phone_no;
      $employees->gender = $request->gender;
      $employees->save();
      session()->flash('message', 'Employee Details Added Successfully');
      return redirect('employees');
    }

    // Edit Employee................
    public function edit_employee($id)
    {
      $employee = Employee::where('id',$id)->get();
      return view('edit_employee',['employee'=>$employee]);
    }

    // Update Employee................
    public function update_employee(Request $request,$id)
    {
      $employees = Employee::find($id);
      $employees->username = $request->username; 
      $employees->email = $request->email;
      $employees->phone_no = $request->phone_no;
      $employees->gender = $request->gender;
      $employees->save();
      session()->flash('message', 'Employee Details Updated Successfully');
      return redirect('employees');
    }

    // Delete Employee................
    public function delete_employee($id)
    {
      $employees = Employee::find($id);
      $employees->delete();
      session()->flash('message', 'Employee Deleted Successfully');
      return redirect('employees');
    }
}
