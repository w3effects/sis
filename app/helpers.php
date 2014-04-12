<?php

function authConfig($authModel, $authTable){

    Config::set('auth.model',$authModel);
    Config::set('auth.table',$authTable);
}

function authSessionset(){

    Session::put('authModel',Config::get('auth.model'));
    Session::put('authTable',Config::get('auth.table'));

}

function authSessionDestroy(){

    Session::forget('authModel');
    Session::forget('authTable');
}