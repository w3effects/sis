<?php

use Sis\Principal\PrincipalHelpers;

class PrincipalsController extends \BaseController {

    /**
     * @var Sis\Principal\PrincipalHelpers
     */
    private $helper;

    public function __construct(PrincipalHelpers $helper){

        $this->beforeFilter('authPrincipal', array('only' => ['show']));
        $this->helper = $helper;
    }
	/**
	 * Display a listing of principals
	 *
	 * @return Response
	 */
	public function index(){

        return Redirect::to('principals/login');
    }

	/**
	 * Show the form for creating a new principal
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('principals.create');
	}

	/**
	 * Store a newly created principal in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Principal::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Principal::create($data);

		return Redirect::route('principals.index');
	}

	/**
	 * Display the specified principal.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$principal = Principal::findOrFail($id);

		return View::make('principals.show', compact('principal'));
	}

	/**
	 * Show the form for editing the specified principal.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$principal = Principal::find($id);

		return View::make('principals.edit', compact('principal'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$principal = Principal::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Principal::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$principal->update($data);

		return Redirect::route('principals.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Principal::destroy($id);

		return Redirect::route('principals.index');
	}

    public function login(){
        if(! $this->helper->isPrincipal()) return View::make('principals.login');

        return Redirect::route('principals.show', ['id' => Auth::user()->id ] );
    }

    public function dologin(){
        authConfig('Principal','principals');

        $Credentials = Input::except('_token','name');

        if(Auth::attempt($Credentials)){
            authSessionset();
           return Redirect::route('principals.show', ['id' => Auth::user()->id ] )
               ->with('success_message','You Have Succesfully Logged in !!');
        }else{
           return Redirect::back()->withInput()
               ->with('error_message', 'Could Not Verify Your Credentials  !! Please Try Again !!');
        }
    }

}