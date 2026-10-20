<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Validator;
use Redirect;
use App\Mail\SendMail;
use Mail;

class ContactController extends Controller
{
    public function GetinTouch(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|regex:/^[0-9\s]/',
            'contactQuery' => 'required',
            'mustBeEmpty'  => 'present|max:0',
        ]);

        if ($validator->fails()) {
            return Redirect::to(URL::previous() . "#form")->withErrors($validator)->withInput();
        } else {


            $data = array(
                'name'      =>  $request->name,
                'phone'      =>  $request->phone,
                'email'      =>  $request->email,
                'contactQuery'      =>  $request->contactQuery,
            );
        Mail::to('daniel@digital-soda.co.uk')->send(new SendMail($data));
        
        return Redirect::to(URL::previous() . "#success")->with('success','Your message has been sent');

        }
    }



}