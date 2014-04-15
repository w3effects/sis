<?php

class SemistersController extends \BaseController {

	/**
	 * Display a listing of semisters
	 *
	 * @return Response
	 */
	public function index()
	{
		$semisters = Semister::all();

		return View::make('semisters.index', compact('semisters'));
	}

	/**
	 * Show the form for creating a new semister
	 *
	 * @return Response
	 */
	public function create()
	{
       $department = Hod::findorFail(Auth::user()->id)->department;

        return View::make('semisters.create',compact('department'));
	}

	/**
	 * Store a newly created semister in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::all();


		$validator = Validator::make($data, Semister::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        $data['start_date'] = sqldate(Input::get('start_date'));
        $data['end_date'] = sqldate(Input::get('end_date'));
		Semister::create($data);

		return Redirect::route('semisters.index');
	}

	/**
	 * Display the specified semister.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$semister = Semister::findOrFail($id);

		return View::make('semisters.show', compact('semister'));
	}

	/**
	 * Show the form for editing the specified semister.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$semister = Semister::find($id);

		return View::make('semisters.edit', compact('semister'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$semister = Semister::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Semister::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$semister->update($data);

		return Redirect::route('semisters.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Semister::destroy($id);

		return Redirect::route('semisters.index');
	}

}