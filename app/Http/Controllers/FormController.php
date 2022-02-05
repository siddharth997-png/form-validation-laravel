<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {
    public function home(){
        return view('form');
    }

    public function getForm(Request $body){
        $body->validate([
            'name' => 'required',
            'email' => 'email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        echo '<pre>';
        print_r($body->all());
    }
}
