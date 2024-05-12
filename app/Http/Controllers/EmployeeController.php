<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * route : employees.index
     */
    public function index()
    {
        $employees =  Employee::all();
        return view("employees.index", compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * route : employees.create
     */
    public function create()
    {
       $departements= Departement::all();
        return view("employees.create",compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * route : employees.store
     */
    public function store(Request $request)
    {
        Employee::create($request->all());

        return redirect()->route("employees.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $employee= Employee::find($id);
       return view("employees.show",compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //recuperer l'objet employee
      $employee=  Employee::find($id);
return view("employees.edit",compact('employee'));

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
      $employee=  Employee::find($id);
$employee->update($request->all());
//redirection vers la page d'affichage
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
      $employee=  Employee::find($id);
      $employee->delete();
      return redirect()->route('employees.index');

    }
}
