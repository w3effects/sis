<?php namespace Sis\Principal;

use Illuminate\Support\Facades\Auth;

class PrincipalHelpers {

    public function isPrincipal(){
        if(Auth::check()){

            if(Auth::user()->role == 'principals') return true;

            return false;
        }

        return false;
    }

    public function isEditable($id){

        if(Auth::check()){
            if(Auth::user()->role == 'principals'){
                if($id == Auth::user()->id) return true;
            }
        }

        return false;

    }
} 