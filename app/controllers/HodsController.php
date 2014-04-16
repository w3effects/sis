<?php


use Sis\Hod\HodHelpers;

class HodsController extends \BaseController {

    /**
     * @var Sis\Hod\HodHelpers
     */
    private $helpers;

    public function __construct(HodHelpers $helpers){

        $this->beforeFilter('authPrincipal', array('only' => ['index','create']));

        $this->helpers = $helpers;
    }

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

        if($this->helpers->isHod()){
            $hod = Hod::findOrFail($id);

            return View::make('hods.show', compact('hod'));
        }else{

            return Redirect::to('hods/login')
                ->with('error_message','Login to view this page !!');
        }
	}

	/**
	 * Show the form for editing the specified hod.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        if($this->helpers->isEditable($id)){
            $hod = Hod::find($id);

            return View::make('hods.edit', compact('hod'));
        }else{

            return Redirect::to(homeUrl())->with('error_message','You don\'t have permission to edit that page');
        }
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

    public function login(){
        if(! $this->helpers->isHod()) return View::make('hods.login');

        return Redirect::route('hods.show', ['id' => Auth::user()->id ] );
    }

    public function dologin(){

        authConfig('Hod','hods');
        $Credentials = Input::except('_token','name');

        $validator = Validator::make($Credentials, ['email' => 'required|email','password'=>'required']);

        if ($validator->fails())
        {
            return Redirect::back()
                ->with('error_message','Please Fill out Both Fields Correctly!!')
                ->withInput();
        }

        if(Auth::attempt($Credentials)){

            return Redirect::route('hods.show', ['id' => Auth::user()->id ] )
                ->with('success_message','You Have Successfully Logged in !!');
        }else{
            return Redirect::back()->withInput()
                ->with('error_message', 'Could Not Verify Your Credentials  !! Please Try Again !!');
        }
    }


}