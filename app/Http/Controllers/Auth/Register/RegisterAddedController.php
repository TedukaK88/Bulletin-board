<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use DB;

class RegisterAddedController extends Controller
{
    //
    public function addRegister(Request $request)
    {
        // DD($request);

            //------------ validation  -----------------------------
            $rules = [
                'username' => 'required|string|min:2',
                'email' => 'required|string|email|max:100|unique:users,email',
                'password' => 'required|string|regex:/\A([a-zA-Z0-9]{8,30})+\z/u|confirmed'
            ];
            $validator = validator::make($request->all(),$rules);
            if($validator->fails()){
                return redirect('/register')
                ->withErrors($validator)
                ->withInput();
            }
            //-------------------------------------------------------

            //----------  add record  -------------------------------
            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            return view('/login');
            //-------------------------------------------------------

    }
}
