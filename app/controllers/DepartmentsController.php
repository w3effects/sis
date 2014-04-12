<?php

use Sis\Department\DepartmentHelpers;

class DepartmentsController extends \BaseController {

    /**
     * @var Sis\Departments\DepartmentHelpers
     */
    private $helpers;

    public function __construct(DepartmentHelpers $helpers){

        $this->helpers = $helpers;
    }
	/**
	 * Display a listing of departments
	 *
	 * @return Response
	 */
	public function index()
	{

        if($this->helpers->isValidtoview()) {
            $departments = Department::with('hod')->get();

            return View::make('departments.index', compact('departments'));
        }else{
            return Redirect::back()->with('error_message','You Dont Have Permission to View this Page !!');
        }
	}

	/**
	 * Show the form for creating a new department
	 *
	 * @return Response
	 */
	public function create()
	{
        $departments = Department::lists('name','id');
		return View::make('departments.create',compact('departments'));
	}

	/**
	 * Store a newly created department in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Department::$rules,Department::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Department::create($data);

		return Redirect::route('principals.show',[Auth::user()->id]);
	}

	/**
	 * Display the specified department.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$department = Department::findOrFail($id);

		return View::make('departments.show', compact('department'));
	}

	/**
	 * Show the form for editing the specified department.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$department = Department::find($id);

		return View::make('departments.edit', compact('department'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$department = Department::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Department::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$department->update($data);

		return Redirect::route('departments.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Department::destroy($id);

		return Redirect::route('departments.index');
	}

}