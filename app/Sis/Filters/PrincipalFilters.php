<?php namespace Sis\Filters;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PrincipalFilters {

    public function filter(){
        if(Auth::guest()){

            return Redirect::to('principals/login')->with('error_message', 'Please Login to View This page');
        }

        if(Auth::check()){
            if(Auth::user()->role != "principals") return Redirect::back()->with('error_message','You Dont Have Permission to View This page');
        }

    }
}
