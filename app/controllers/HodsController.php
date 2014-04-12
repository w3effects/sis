<?php

class HodsController extends \BaseController {

	/**
	 * Display a listing of hods
	 *
	 * @return Response
	 */
	public function index()
	{
		$hods = Hod::all();

		return View::make('hods.index', compact('hods'));
	}

	/**
	 * Show the form for creating a new hod
	 *
	 * @return Response
	 */
	public function create()
	{
        $departments = Department::lists('name','id');
		return View::make('hods.create', compact('departments'));
	}

	/**
	 * Store a newly created hod in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make($data = Input::all(), Hod::$rules, Hod::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        $data['password'] = Hash::make($data['password']);
		Hod::create($data);

        return Redirect::route('principals.show',[Auth::user()->id]);
	}

	/**
	 * Display the specified hod.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hod = Hod::findOrFail($id);

		return View::make('hods.show', compact('hod'));
	}

	/**
	 * Show the form for editing the specified hod.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hod = Hod::find($id);

		return View::make('hods.edit', compact('hod'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$hod = Hod::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Hod::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$hod->update($data);

		return Redirect::route('hods.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Hod::destroy($id);

		return Redirect::route('hods.index');
	}

}