<?php
class controller_user{
    public function login(){
        Route::goto('user_login');
    }
    public function register(){
        Route::goto('user_register');
    }
    public function edit(){
        Route::goto('user_edit');
    }
}