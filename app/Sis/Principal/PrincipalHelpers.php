<?php namespace Sis\Principal;

use Illuminate\Support\Facades\Auth;

class PrincipalHelpers {

    public function isPrincipal(){
        if(Auth::check()){

            if(Auth::user()->role == 'principal') return true;

            return false;
        }

        return false;
    }
} 