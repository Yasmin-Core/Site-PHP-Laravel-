<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

use App\User;


class UsersController extends BaseController
//class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function cadastro (Request $request){
        $validationInput = Validator::make($request->all(),
        [
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required|string',
            'password'=>'required|string',
        ]);
        if(!$validationInput->fails()){
            $user = new User();
            $user->name = $request->first_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
        }
        return view('site.home');
    }
    public function viewCadastro(){
        return view('site.cadastro');

    }
}

