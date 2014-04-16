<?php

use Sis\Teachers\TeacherHelpers;

class TeachersController extends \BaseController {


    /**
     * @var Sis\Teachers\TeachersHelpers
     */
    private $helpers;

    function __construct(TeacherHelpers $helpers)
    {
        $this->helpers = $helpers;
    }


    /**
	 * Display a listing of teachers
	 *
	 * @return Response
	 */
	public function index()
	{
		$teachers = Teacher::all();

		return View::make('teachers.index', compact('teachers'));
	}

	/**
	 * Show the form for creating a new teacher
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('teachers.create');
	}

	/**
	 * Store a newly created teacher in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Teacher::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Teacher::create($data);

		return Redirect::to(homeUrl())->with('success_message','Teacher Added Successfully ');
	}

	/**
	 * Display the specified teacher.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$teacher = Teacher::findOrFail($id);

		return View::make('teachers.show', compact('teacher'));
	}

	/**
	 * Show the form for editing the specified teacher.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$teacher = Teacher::find($id);

		return View::make('teachers.edit', compact('teacher'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$teacher = Teacher::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Teacher::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$teacher->update($data);

		return Redirect::route('teachers.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Teacher::destroy($id);

		return Redirect::route('teachers.index');
	}

    public function login(){
        if(! $this->helpers->isTeacher()) return View::make('teachers.login');

        return Redirect::route('teachers.show', ['id' => Auth::user()->id ] );
    }

    public function dologin(){

        authConfig('Teacher','teachers');
        $Credentials = Input::except('_token','name');

        $validator = Validator::make($Credentials, ['email' => 'required|email','password'=>'required']);

        if ($validator->fails())
        {
            return Redirect::back()
                ->with('error_message','Please Fill out Both Fields Correctly!!')
                ->withInput();
        }

        if(Auth::attempt($Credentials)){

            return Redirect::route('teachers.show', ['id' => Auth::user()->id ] )
                ->with('success_message','You Have Successfully Logged in !!');
        }else{
            return Redirect::back()->withInput()
                ->with('error_message', 'Could Not Verify Your Credentials  !! Please Try Again !!');
        }
    }

}